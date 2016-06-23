<?php namespace BuildR\Path\Platform;

/**
 * Simple class to detect current platform type, that PHP run of
 *
 * BuildR PHP Framework
 *
 * @author Zoltán Borsos <zolli07@gmail.com>
 * @package Path
 * @subpackage Platform
 *
 * @copyright    Copyright 2016, Zoltán Borsos.
 * @license      https://github.com/BuildrPHP/Path/blob/master/LICENSE.md
 * @link         https://github.com/BuildrPHP/Path
 */
class PlatformDetector {

    /**
     * Detects the current platform type. This function returns
     * an enumeration.
     *
     * @return \BuildR\Path\Platform\PlatformType
     */
    public static function detect() {
        // Since PHP_OS constant contains the value which the PHP was built
        // is not 100% reliable. Another possibility to us the php_uname()
        // function, but the documentation says, in some old linux distribution
        // not fully reliable. This function us a WINDOWS ONLY PHP constant.
        // So this constant is only defined when PHP runs on windows.
        if(defined('PHP_WINDOWS_VERSION_MAJOR')) {
            return PlatformType::WIN();
        }

        return PlatformType::UNIX();
    }

}
