<?php

class ConcreteWrapper extends \Avoja\Test\AbstractFunctionalTest
{
    public function get($url)
    {
        //return parent::get($url);
        return $this->getMock('\Avoja\Test\Crawler', array('get'));
    }
}