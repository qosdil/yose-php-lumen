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
             ->see('<a id="repository-link" href="https://github.com/qosdil/yose-php-lumen#readme">Readme</a>');
    }
}
