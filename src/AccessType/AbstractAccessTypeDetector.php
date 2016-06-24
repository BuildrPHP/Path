<?php namespace BuildR\Path\AccessType;

use BuildR\Path\AccessType\AccessTypeDetectorInterface;

/**
 * Abstract implementation of the AccessTypeDetectorInterface
 *
 * BuildR PHP Framework
 *
 * @author Zoltán Borsos <zolli07@gmail.com>
 * @package Path
 * @subpackage AccessType
 *
 * @copyright    Copyright 2016, Zoltán Borsos.
 * @license      https://github.com/BuildrPHP/Path/blob/master/LICENSE.md
 * @link         https://github.com/BuildrPHP/Path
 */
abstract class AbstractAccessTypeDetector implements AccessTypeDetectorInterface {

    /**
     * @type string
     */
    protected $path;

    /**
     * {@inheritDoc}
     */
    public function __construct($path) {
        $this->path = $path;
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path) {
        $this->path = $path;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getPath() {
        return $this->path;
    }
    
}
