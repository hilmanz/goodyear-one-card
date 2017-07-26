<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predis\Protocol;

use Predis\Commands\ICommand;

/**
 * Interface that defines a custom serializer for Redis commands.
 *
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
interface ICommandSerializer
{
    /**
     * Serializes a Redis command.
     *
     * @param ICommand $command Redis command.
     * @return string
     */
    public function serialize(ICommand $command);
}
