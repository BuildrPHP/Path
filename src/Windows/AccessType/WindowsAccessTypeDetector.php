<?php namespace BuildR\Path\Windows\AccessType;

use BuildR\Path\AccessType\AbstractAccessTypeDetector;
use BuildR\Path\AccessType\AccessType;

/**
 * Windows specific accessTypeDetector implementation
 *
 * BuildR PHP Framework
 *
 * @author Zoltán Borsos <zolli07@gmail.com>
 * @package Path
 * @subpackage Windows\AccessType
 *
 * @copyright    Copyright 2016, Zoltán Borsos.
 * @license      https://github.com/BuildrPHP/Path/blob/master/LICENSE.md
 * @link         https://github.com/BuildrPHP/Path
 */
class WindowsAccessTypeDetector extends AbstractAccessTypeDetector {

    const ABSOLUTE_REGEX = '/^([a-zA-Z]\:[\\\\\/])/';

    /**
     * {@inheritDoc}
     */
    public function getType() {
        $result = (bool) preg_match(self::ABSOLUTE_REGEX, $this->path);
        return ($result === TRUE) ? AccessType::ABSOLUTE() : AccessType::RELATIVE();
    }

}
