<?php  include("header.php"); ?>
<form id="formtrivia">
    <div id="step">
        <div id="howto" class="section item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center wow slideInUp" data-wow-duration="0.5s">
                            <span class="spantitle">CARA MENDAPATKAN</span>
                            <h3 class="htitle">#one<span class="yellow">good</span>card</h3>
                    </div><!-- end .col-md-12 -->
                    <div class="col-md-4 first wow slideInUp" data-wow-duration="0.5s">
                       <div class="entry-box">
                            <div class="howtoimg">
                                <img src="assets/images/icon-1.png" alt="goodyear onecard">
                                <h4 class="yellow"><img src="assets/images/1.png"></h4>
                            </div>
                            <div class="box-content">
                                <p>Isi data diri dan tiga pertanyaan setelahnya</p>
                            </div>
                       </div>
                    </div><!-- end .col-md-4 -->
                    <div class="col-md-4 second wow slideInUp" data-wow-duration="0.5s">
                       <div class="entry-box">
                            <div class="howtoimg">
                                <img src="assets/images/icon-2.png" alt="goodyear onecard">
                                <h4 class="yellow"><img src="assets/images/2.png"></h4>
                            </div>
                            <div class="box-content">
                                <p>Selamat! Kamu mendapatkan Goodyear Mandiri One Card <span class="yellow">(Untuk 200 submitter pertama)</span></p>
                            </div>
                       </div>
                    </div><!-- end .col-md-4 -->
                    <div class="col-md-4 third wow slideInUp" data-wow-duration="0.8s">
                       <div class="entry-box">
                            <div class="howtoimg">
                                <img src="assets/images/icon-3.png" alt="goodyear onecard">
                                <h4 class="yellow"><img src="assets/images/3.png"></h4>
                            </div>
                            <div class="box-content">
                                <p>Dapatkan kode untuk di-redeem dengan uang sebesar Rp 250.000,- di store Goodyear terdekat <span class="yellow">(Setelah pembelian minimal 2 ban)</span></p>
                            </div>
                       </div>
                    </div><!-- end .col-md-4 -->
                    <div class="col-md-12 center wow slideInUp" data-wow-duration="0.8s">
                            <a class="boxbutton start">
                                <span>Mendapatkan #ONEGOODCARD semudah mengisi data dirimu! Siap?</span>
                            </a>
                    </div><!-- end .col-md-12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
        </div><!-- end #howto -->
        <div id="personaldata" class="section item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                          <div class="title-box"><h3>DATA DIRI</h3></div>
                          <div class="theForm">
                            <div class="rows">
                             <input id="name" type="text" placeholder="NAMA" name="name">
                             <span id="name_error" class="hides">Isi Nama Kamu</span>
                            </div>
                            <div class="rows">
                             <input id="email" type="text" placeholder="EMAIL" name="email">
                             <span id="email_error" class="hides">Isi Email Kamu</span>
                            </div>
                            <div class="rows">
                             <input id="nohp" type="text" placeholder="NO.HP" name="nohp">
                             <span id="nohp_error" class="hides">Isi Nomor Handphone Kamu</span>
                             <span id="errmsg" class="error"></span>
                            </div>
                             <a class="btnnext" id="btndata"></a>
                          </div>
                    </div><!-- end .col-md-12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
        </div><!-- end #personaldata -->
        <div id="trivia-1" class="section item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                          <div class="title-box"><h3>KUISIONER</h3></div>
                          <h4 class="page">#1</h4>
                          <div class="theForm">
                            <p>Apakah kamu pengguna ban Goodyear?</p>
                            <a class="button next choose">YA</a>
                            <a class="button next choose">TIDAK</a>
                          </div>
                    </div><!-- end .col-md-12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
        </div><!-- end #trivia-1 -->
        <div id="trivia-2" class="section item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                          <div class="title-box"><h3>KUISIONER</h3></div>
                          <h4 class="page">#2</h4>
                          <div class="theForm">
                            <p>Apa yang terlintas dibenakmu tentang Goodyear?</p>
                            <a class="button next choose">INOVASI</a>
                            <a class="button next choose">AMAN</a>
                            <a class="button next choose">KUALITAS</a>
                            <a class="button next choose">HARGA</a>
                          </div>
                    </div><!-- end .col-md-12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
        </div><!-- end #trivia-2 -->
        <div id="trivia-3" class="section item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                          <div class="title-box"><h3>KUISIONER</h3></div>
                          <h4 class="page">#3</h4>
                          <div class="theForm">
                            <p>Apakah kamu sudah menggunakan kartu e-toll lainnya?</p>
                            <a class="button next choose">YA</a>
                            <a class="button next choose">TIDAK</a>
                          </div>
                    </div><!-- end .col-md-12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
        </div><!-- end #trivia-3 -->
        <div id="result" class="section item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                            <h3>#one<span class="yellow">good</span>card</h3>
                    </div><!-- end .col-md-12 -->
                    <div class="col-md-12 center">
                            <div class="resultcontent">
                              <p class="yellow f18">SELAMAT</br>Anda mendapatkan #ONEGOODCARD</p>
                          <p>Terima kasih <span id="username" class="yellow"></span>, telah berpartisipasi dalam kuisioner kami. 
                            Silakan cek email Anda untuk informasi pengiriman <span class="yellow">#ONEGOODCARD</span> Anda.</p>
                            </div>

                              <p class="yellow f18">Ingin dapatkan potongan harga ban Goodyear senilai Rp200.000?</p>
                              <p><a href="#vouchertrivia" class="boxbutton"><span>YA</span></a></p>
                            <p class="share">
                                <span>Berbagi keamanan dan kemudahan #ONEGOODCARD ke teman Anda!</span>
                                <a href="#" class="sharebtn"><i class="icon-facebook"></i></a>
                                <a href="#" class="sharebtn"><i class="icon-twitter"></i></a>
                            </p>
                    </div><!-- end .col-md-12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
        </div><!-- end #result -->
        <div id="vouchertrivia" class="section item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                          <div class="title-box"><h3>JAWAB PERTANYAAN BERIKUT</h3></div>
                          <div class="theForm">
                            <div class="rows">
                              <label>Apa jenis mobil Anda?</label>
                             <input id="jenismobil" type="text" placeholder="eg. SUV" name="jenismobil">
                             <span id="jenismobil_error" class="hides">Isi jenis mobil Anda</span>
                            </div>
                            <div class="rows">
                              <label>Apa merk mobil Anda?</label>
                             <input id="merkmobil" type="text" placeholder="eg. BMW" name="merkmobil">
                             <span id="merkmobil_error" class="hides">Isi merk mobil Anda</span>
                            </div>
                            <div class="rows">
                              <label>Berapa ukuran ban mobil Anda?</label>
                             <input id="ukuranban" type="text" placeholder='eg. 17"' name="ukuranban">
                             <span id="ukuranban_error" class="hides">Isi ukuran ban mobil Anda</span>
                            </div>
                            <a class="boxbutton" id="finish">
                                <span>SELESAI</span>
                            </a>
                          </div>
                    </div><!-- end .col-md-12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
        </div><!-- end #vouchertrivia -->
        <div id="result2" class="section item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                            <h3>#one<span class="yellow">good</span>card</h3>
                    </div><!-- end .col-md-12 -->
                    <div class="col-md-12 center">
                            <div class="resultcontent">
                              <p class="yellow f18"><span class="f22">SELAMAT</span></br>Anda mendapatkan voucher Goodyear senilai Rp. 200,000,*</p>
                              <p>Silakan cek email Anda untuk pengambilan voucher.</p>
                            </div>
                            <p><a href="#popup-term" class="term showPopup">Syarat dan ketentuan berlaku</a></p>
                    </div><!-- end .col-md-12 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
        </div><!-- end #result2 -->
    </div><!-- end #step -->
    <div class="popup">
      <div id="popup-term" class="popupContainer">
          <div class="popup-content">
            <h3 class="yellow">Syarat dan ketentuan</h3>
            <ul>
              <li>Hanya berlaku untuk pembelian 2 unit ban Goodyear tipe consumer minimum rim 15" (berlaku
kelipatan) atau 4 unit Goodyear Assurance DuraPlus rim 14".</li>
              <li>Tidak berlaku untuk tipe Kelly dan Cargo 26.</li>
              <li>Promo berlaku hingga [TANGGAL]</li>
              <li>Dua ban yang Anda beli tetap mendapatkan perlindungan Goodyear Worry Free Program.</li>
            </ul>
          </div>
      </div>
    </div><!-- end .popup -->
    <input type="hidden" id="question1" name="question1">
    <input type="hidden" id="question2" name="question2">
    <input type="hidden" id="question3" name="question3">
</form>