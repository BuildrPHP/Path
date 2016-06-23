<?php namespace BuildR\Path\Tests\Unit\Platform;

use BuildR\Path\Platform\PlatformDetector;
use BuildR\Path\Platform\PlatformType;
use BuildR\TestTools\BuildR_TestCase;
use BuildR\Utils\Enumeration\EnumerationBase;

class PlatformDetectorTest extends BuildR_TestCase {

    /**
     * @requires OS WIN
     */
    public function testIsDetectsPlatformCorrectlyOnWindows() {
        $detectedPlatform = PlatformDetector::detect();

        $this->assertEquals(PlatformType::WIN, $detectedPlatform->getValue());
        $this->assertInstanceOf(EnumerationBase::class, $detectedPlatform);
    }

    /**
     * @requires OS Linux|Unix
     */
    public function testItDetectPlatformCorrectlyOnUnix() {
        $detectedPlatform = PlatformDetector::detect();

        $this->assertEquals(PlatformType::UNIX, $detectedPlatform->getValue());
        $this->assertInstanceOf(EnumerationBase::class, $detectedPlatform);

        //Detects windows after set the windows specific constant
        define('PHP_WINDOWS_VERSION_MAJOR', '1');

        $detectedPlatform = PlatformDetector::detect();
        $this->assertEquals(PlatformType::WIN, $detectedPlatform->getValue());
    }

}
