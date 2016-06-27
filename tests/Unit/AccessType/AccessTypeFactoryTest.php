<?php namespace BuildR\Path\Tests\Unit\AccessType;

use BuildR\Path\AccessType\AccessTypeFactory;
use BuildR\Path\Platform\PlatformType;
use BuildR\Path\Unix\AccessType\UnixAccessTypeDetector;
use BuildR\Path\Windows\AccessType\WindowsAccessTypeDetector;
use BuildR\TestTools\BuildR_TestCase;

class AccessTypeFactoryTest extends BuildR_TestCase {

    public function testItReturnsValidDetectorObjectOnUnix() {
        $detector = AccessTypeFactory::create('/home/user', PlatformType::UNIX());

        $this->assertTrue(is_object($detector));
        $this->assertInstanceOf(WindowsAccessTypeDetector::class, $detector);
    }

    public function testItReturnsValidDetectorObjectOnWindows() {
        $detector = AccessTypeFactory::create('/home/user', PlatformType::WIN());

        $this->assertTrue(is_object($detector));
        $this->assertInstanceOf(UnixAccessTypeDetector::class, $detector);
    }
    
}
