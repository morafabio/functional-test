<?php
/**
 * @author Jacopo 'Jakuza' Romei <jromei@gmail.com>
 */

/**
 * Unit tests for \Avoja\Test\AbstractFunctionalTest class
 */
class AbstractFunctionalTestTest extends \PHPUnit_Framework_TestCase {

    public function testGet() {
        $test = new \ConcreteWrapper();

        $this->assertInstanceOf('\Avoja\Test\Crawler', $test->get('http://www.google.com/'));
    }
}
