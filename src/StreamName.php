<?php
/**
 * This file is part of the prooph/event-store.
 * (c) 2014-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Prooph\EventStore;

class StreamName
{
    /**
     * @var string
     */
    protected $name;

    public function __construct($name)
    {
        Util\Assertion::notEmpty($name, 'StreamName must not be empty');

        $this->name = $name;
    }

    public function toString()
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->toString();
    }
}
