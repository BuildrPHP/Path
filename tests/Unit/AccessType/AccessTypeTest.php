<?php namespace BuildR\Path\Tests\Unit\AccessType;

use BuildR\Path\Unix\AccessType\UnixAccessTypeDetector;
use BuildR\Path\Windows\AccessType\WindowsAccessTypeDetector;
use BuildR\TestTools\BuildR_TestCase;
use BuildR\TestTools\DataSetLoader\DataSetLoaderFactory;

class AccessTypeTest extends BuildR_TestCase {

    public function providerWindows() {
        return DataSetLoaderFactory::XML(BUILDR_TEST_PROJECT_ROOT . '/tests/DataSet/AccessTypeDetectorUnit.xml',
            'testWindowsAccessType')->getResult();
    }

    public function providerUnix() {
        return DataSetLoaderFactory::XML(BUILDR_TEST_PROJECT_ROOT . '/tests/DataSet/AccessTypeDetectorUnit.xml',
            'testUnixAccessType')->getResult();
    }

    /**
     * @dataProvider providerWindows
     */
    public function testItDetectsAccessTypeOnWindowsCorrectly($input, $expected) {
        $winDetector = new WindowsAccessTypeDetector($input);
        
        $this->assertEquals($expected, $winDetector->getType()->getValue());
    }

    /**
     * @dataProvider providerUnix
     */
    public function testItDetectsAccessTypeOnUnixCorrectly($input, $expected) {
        $unixDetector = new UnixAccessTypeDetector($input);

        $this->assertEquals($expected, $unixDetector->getType()->getValue());
    }

    public function testGettersAndSettersWorksCorrectly() {
        $winDetector = new WindowsAccessTypeDetector('c:/');

        $this->assertEquals('c:/', $winDetector->getPath());
        $returned = $winDetector->setPath('z:/Documents');

        $this->assertInstanceOf(WindowsAccessTypeDetector::class, $returned);
        $this->assertNotEquals($winDetector, $returned);
        $this->assertEquals('c:/', $winDetector->getPath());
        $this->assertEquals('z:/Documents', $returned->getPath());
    }

}
