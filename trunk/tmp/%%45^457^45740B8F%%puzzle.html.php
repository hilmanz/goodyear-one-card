<?php /* Smarty version 2.6.13, created on 2015-11-10 23:05:25
         compiled from application/web/apps/puzzle.html */ ?>

     <div id="puzzle">
     	<div id="container" style="position:relative; height:600px;">
            <div class="msg_text">Drag and Drop Images and Solve the Puzzle</div>
            <canvas id="canvas"></canvas>
			
            <div>Time Puzzle <span id="clock" style="opacity:0;"></span></div>
            <!--<span id="countdown">120</span>-->
            <div id="progressbar"></div>
            <!--<h2><center><a href="#" class="button2 stop">Stop</a></center></h2>-->
			<h2><center><div id="namanya"></div>
			<div id="waktunya"></div></center></h2>
        </div>
    </div>
    
	
	
         <script>
<?php echo '
        const PUZZLE_DIFFICULTY = 4;
        const PUZZLE_HOVER_TINT = \'#009900\';

        var _stage;
        var _canvas;

        var _img;
        var _pieces;
        var _puzzleWidth;
        var _puzzleHeight;
        var _pieceWidth;
        var _pieceHeight;
        var _currentPiece;
        var _currentDropPiece;  

        var _mouse;
		
		function timepuzzle(){		
		var waktu = 60;
		 var totalSeconds = 0;
		counter=setInterval(function() {
		waktu--;

					++totalSeconds;
					$(\'#clock > #seconds\').html(pad(totalSeconds%60));
					$(\'#clock > #minutes\').html(pad(parseInt(totalSeconds/60)));
					
		if(waktu < 0) {
		clearInterval ( counter );
		gameOver();
		}else{
		waktu2=(waktu/6)*10;
		$(\'#namanya\').html("");
		$(\'#waktunya\').html("");

		//document.getElementById("countdown").innerHTML = waktu2;
		$( "#progressbar" ).progressbar({
					value: waktu2
				});
		}
		}, 1000);
			
		}

		function init(){
            _img = new Image();          
            _img.addEventListener(\'load\',onImage,false);
            _img.src = basedomainpath+"public_assets/puzzle/London Eye.jpg";
        }
        function onImage(e){
            _pieceWidth = Math.floor(_img.width / PUZZLE_DIFFICULTY)
            _pieceHeight = Math.floor(_img.height / PUZZLE_DIFFICULTY)
            _puzzleWidth = _pieceWidth * PUZZLE_DIFFICULTY;
            _puzzleHeight = _pieceHeight * PUZZLE_DIFFICULTY;
            setCanvas();
            initPuzzle();
        }
        function setCanvas(){
            _canvas = document.getElementById(\'canvas\');
            _stage = _canvas.getContext(\'2d\');
            _canvas.width = _puzzleWidth;
            _canvas.height = _puzzleHeight;
            _canvas.style.border = "1px solid black";
        }
        function initPuzzle(){
		
            _pieces = [];
            _mouse = {x:0,y:0};
            _currentPiece = null;
            _currentDropPiece = null;
            _stage.drawImage(_img, 0, 0, _puzzleWidth - 3, _puzzleHeight - 5, 0, 0, _puzzleWidth, _puzzleHeight);
            createTitle("Click to Start Puzzle");
			
            buildPieces();
		
        }
        function createTitle(msg){
            _stage.fillStyle = "#000000";
            _stage.globalAlpha = .4;
            _stage.fillRect(100,_puzzleHeight - 40,_puzzleWidth - 200,40);
            _stage.fillStyle = "#FFFFFF";
            _stage.globalAlpha = 1;
            _stage.textAlign = "center";
            _stage.textBaseline = "middle";
            _stage.font = "20px Arial";
            _stage.fillText(msg,_puzzleWidth / 2,_puzzleHeight - 20);
        }
        function buildPieces(){
            var i;
            var piece;
            var xPos = 0;
            var yPos = 0;
            for(i = 0;i < PUZZLE_DIFFICULTY * PUZZLE_DIFFICULTY;i++){
                piece = {};
                piece.sx = xPos;
                piece.sy = yPos;
                _pieces.push(piece);
                xPos += _pieceWidth;
                if(xPos >= _puzzleWidth){
                    xPos = 0;
                    yPos += _pieceHeight;
                }
            }
			
            document.onmousedown = shufflePuzzle;
        }
		
        function shufflePuzzle(){
		canvas.onmousedown = function(e){
            _pieces = shuffleArray(_pieces);
            _stage.clearRect(0,0,_puzzleWidth,_puzzleHeight);
            var i;
            var piece;
            var xPos = 0;
            var yPos = 0;
			
            for(i = 0;i < _pieces.length;i++){
                piece = _pieces[i];
                piece.xPos = xPos;
                piece.yPos = yPos;
                _stage.drawImage(_img, piece.sx, piece.sy, _pieceWidth, _pieceHeight, xPos, yPos, _pieceWidth, _pieceHeight);
                _stage.strokeRect(xPos, yPos, _pieceWidth,_pieceHeight);
                xPos += _pieceWidth;
                if(xPos >= _puzzleWidth){
                    xPos = 0;
                    yPos += _pieceHeight;
                }
				
            }
			timepuzzle();
            document.onmousedown = onPuzzleClick;
        }
		}
		
        function onPuzzleClick(e){		
		canvas.onmousedown = function(e){
		
		
            if(e.layerX || e.layerX == 0){
                _mouse.x = e.layerX - _canvas.offsetLeft+20;
                _mouse.y = e.layerY - _canvas.offsetTop+40;
				//alert(e.layerX);exit;
            }
            else if(e.offsetX || e.offsetX == 0){
                _mouse.x = e.offsetX - _canvas.offsetLeft;
                _mouse.y = e.offsetY - _canvas.offsetTop;
				//alert("2");exit;
            }
            _currentPiece = checkPieceClicked();
            if(_currentPiece != null){
                _stage.clearRect(_currentPiece.xPos,_currentPiece.yPos,_pieceWidth,_pieceHeight);
                _stage.save();
                _stage.globalAlpha = .9;
                _stage.drawImage(_img, _currentPiece.sx, _currentPiece.sy, _pieceWidth, _pieceHeight, _mouse.x - (_pieceWidth / 2), _mouse.y - (_pieceHeight / 2), _pieceWidth, _pieceHeight);
                _stage.restore();
                document.onmousemove = updatePuzzle;
                document.onmouseup = pieceDropped;
            }
			
			}
        }
        function checkPieceClicked(){
            var i;
            var piece;
            for(i = 0;i < _pieces.length;i++){
                piece = _pieces[i];
                if(_mouse.x < piece.xPos || _mouse.x > (piece.xPos + _pieceWidth) || _mouse.y < piece.yPos || _mouse.y > (piece.yPos + _pieceHeight)){
                    //PIECE NOT HIT
					
                }
                else{
                    return piece;
                }
            }
            return null;
        }
        function updatePuzzle(e){
            _currentDropPiece = null;
            if(e.layerX || e.layerX == 0){
                _mouse.x = e.layerX - _canvas.offsetLeft;
                _mouse.y = e.layerY - _canvas.offsetTop;
            }
            else if(e.offsetX || e.offsetX == 0){
                _mouse.x = e.offsetX - _canvas.offsetLeft;
                _mouse.y = e.offsetY - _canvas.offsetTop;
            }
            _stage.clearRect(0,0,_puzzleWidth,_puzzleHeight);
            var i;
            var piece;
            for(i = 0;i < _pieces.length;i++){
                piece = _pieces[i];
                if(piece == _currentPiece){
                    continue;
                }
                _stage.drawImage(_img, piece.sx, piece.sy, _pieceWidth, _pieceHeight, piece.xPos, piece.yPos, _pieceWidth, _pieceHeight);
                _stage.strokeRect(piece.xPos, piece.yPos, _pieceWidth,_pieceHeight);
                if(_currentDropPiece == null){
                    if(_mouse.x < piece.xPos || _mouse.x > (piece.xPos + _pieceWidth) || _mouse.y < piece.yPos || _mouse.y > (piece.yPos + _pieceHeight)){
                        //NOT OVER
						//alert("not ever");
                    }
                    else{
                        _currentDropPiece = piece;
                        _stage.save();
                        _stage.globalAlpha = .4;
                        _stage.fillStyle = PUZZLE_HOVER_TINT;
                        _stage.fillRect(_currentDropPiece.xPos,_currentDropPiece.yPos,_pieceWidth, _pieceHeight);
                        _stage.restore();
                    }
                }
            }
            _stage.save();
            _stage.globalAlpha = .6;
            _stage.drawImage(_img, _currentPiece.sx, _currentPiece.sy, _pieceWidth, _pieceHeight, _mouse.x - (_pieceWidth / 2), _mouse.y - (_pieceHeight / 2), _pieceWidth, _pieceHeight);
            _stage.restore();
            _stage.strokeRect( _mouse.x - (_pieceWidth / 2), _mouse.y - (_pieceHeight / 2), _pieceWidth,_pieceHeight);
        }
        function pieceDropped(e){
            document.onmousemove = null;
            document.onmouseup = null;
            if(_currentDropPiece != null){
                var tmp = {xPos:_currentPiece.xPos,yPos:_currentPiece.yPos};
                _currentPiece.xPos = _currentDropPiece.xPos;
                _currentPiece.yPos = _currentDropPiece.yPos;
                _currentDropPiece.xPos = tmp.xPos;
                _currentDropPiece.yPos = tmp.yPos;
            }
            resetPuzzleAndCheckWin();
        }
        function resetPuzzleAndCheckWin(){
            _stage.clearRect(0,0,_puzzleWidth,_puzzleHeight);
            var gameWin = true;
            var i;
            var piece;
		
            for(i = 0;i < _pieces.length;i++){
                piece = _pieces[i];
                _stage.drawImage(_img, piece.sx, piece.sy, _pieceWidth, _pieceHeight, piece.xPos, piece.yPos, _pieceWidth, _pieceHeight);
                _stage.strokeRect(piece.xPos, piece.yPos, _pieceWidth,_pieceHeight);
                if(piece.xPos != piece.sx || piece.yPos != piece.sy){
                    gameWin = false;
                }
            }
            if(gameWin){
                setTimeout(gameOver,500);
				clearInterval(counter);
				
						//counter ended, do something here
								var namenya=\'fauzi\';
								var menit=document.getElementById("minutes").innerHTML;
								var detik=document.getElementById("seconds").innerHTML;
								var timer=menit+":"+detik;
								$(\'#namanya\').html("Nama :"+namenya);
								$(\'#waktunya\').html("Waktu :"+timer);
									$.ajax ({ 
										type	 : \'POST\', 
										url	 :  basedomain+\'puzzle/savedata\' , 
										data:{namenya:namenya,timer:timer},
										dataType:\'json\',
										success	: function (result) 
											{
												
												alert("You Won!!");
											}
									});
				
            }
        }
        function gameOver(){

            document.onmousedown = null;
            document.onmousemove = null;
            document.onmouseup = null;
			
            initPuzzle();
        }
        function shuffleArray(o){
            for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
            return o;
        }
		
		
		

		$(\'#clock\').prepend(\'<label id="minutes">00</label>:<label id="seconds">00</label>\');
         var totalSeconds = 0;
        //counter=setInterval(setTime, 1000);
        
        function pad(val)
        {
            var valString = val + "";
            if(valString.length < 2)
            {
                return "0" + valString;
            }
            else
            {
                return valString;
            }
        }
		
		 $(".stop").click(function(){				
		
					$(".start").hide();
					$(".stop").show();
					alert("stop");
					
					clearInterval ( counter );
					var namenya=\'fauzi\';
								var menit=document.getElementById("minutes").innerHTML;
								var detik=document.getElementById("seconds").innerHTML;
								var timer=menit+":"+detik;
								
									$.ajax ({ 
										type	 : \'POST\', 
										url	 :  basedomain+\'puzzle/savedata\' , 
										data:{namenya:namenya,timer:timer},
										dataType:\'json\',
										success	: function (result) 
											{
												
												alert("You Won "+namenya+" waktu "+timer);
											}
									});					
               

            });
		

	

		'; ?>

</script>


