<?php namespace BuildR\Path;

use BuildR\Path\Exception\PlatformException;
use BuildR\Path\Platform\PlatformDetector;
use BuildR\Path\Platform\PlatformType;

/**
 * Path factory
 *
 * BuildR PHP Framework
 *
 * @author Zoltán Borsos <zolli07@gmail.com>
 * @package Path
 *
 * @copyright    Copyright 2016, Zoltán Borsos.
 * @license      https://github.com/BuildrPHP/Path/blob/master/LICENSE.md
 * @link         https://github.com/BuildrPHP/Path
 */
class PathFactory {

    public static function create($path, PlatformType $platform = NULL) {
        if($platform === NULL) {
            $platform = PlatformDetector::detect();
        }

        switch($platform->getValue()) {
            case PlatformType::WIN:



                break;
            case PlatformType::UNIX:


                break;
            default:
                throw PlatformException::unsupported($platform);

                break;
        }
    }

}
