<?php namespace BuildR\Path\AccessType;

/**
 * Common interface for system dependent access type detectors
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
interface AccessTypeDetectorInterface {

    /**
     * AccessTypeDetectorInterface constructor
     *
     * @param string $path
     */
    public function __construct($path);

    /**
     * Sets the path
     *
     * @param string $path
     *
     * @return \BuildR\Path\AccessType\AccessTypeDetectorInterface
     */
    public function setPath($path);

    /**
     * returns the current path
     *
     * @return string
     */
    public function getPath();

    /**
     * Returns the type of the defined path
     *
     * @return \BuildR\Path\AccessType\AccessType
     */
    public function getType();

}
