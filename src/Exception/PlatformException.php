<?php namespace BuildR\Path\Exception;

use BuildR\Foundation\Exception\Exception;

/**
 * Exceptions, related to platform errors
 *
 * BuildR PHP Framework
 *
 * @author Zoltán Borsos <zolli07@gmail.com>
 * @package Path
 * @subpackage Exception
 *
 * @copyright    Copyright 2016, Zoltán Borsos.
 * @license      https://github.com/BuildrPHP/Path/blob/master/LICENSE.md
 * @link         https://github.com/BuildrPHP/Path
 */
class PlatformException extends Exception {
    
    public static function unsupported($platformType) {
        return self::createByFormat('The (%s) platform is not supported!', [$platformType]);
    }

}
