<?php namespace BuildR\Path\AccessType;

use BuildR\Path\Exception\PlatformException;
use BuildR\Path\Platform\PlatformType;
use BuildR\Path\Unix\AccessType\UnixAccessTypeDetector;
use BuildR\Path\Windows\AccessType\WindowsAccessTypeDetector;

class AccessTypeFactory {

    /**
     * Returns a valid AccessTypeDetector, that matches the platform
     *
     * @param string $path
     * @param \BuildR\Path\Platform\PlatformType $platform
     *
     * @return \BuildR\Path\AccessType\AccessTypeDetectorInterface
     * @throws \BuildR\Path\Exception\PlatformException
     */
    public static function create($path, PlatformType $platform) {
        switch($platform->getValue()) {
            case PlatformType::WIN:
                return new UnixAccessTypeDetector($path);

                break;
            case PlatformType::UNIX:
                return new WindowsAccessTypeDetector($path);

                break;
            default:
                throw PlatformException::unsupported($platform->getValue());
        }
    }

}
