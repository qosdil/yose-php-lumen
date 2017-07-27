<?php

class HomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHome()
    {
        $this->visit('/')
             ->see('Hello Yose');
    }

    public function testShareLink()
    {
        $this->visit('/')
             ->see('<a href="https://github.com/qosdil/yose-php-lumen#readme">YoseTheGame</a>');
    }
}
