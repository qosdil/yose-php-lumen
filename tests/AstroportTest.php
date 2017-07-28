<?php

class AstroportTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLink()
    {
        $this->visit('/astroport')
             ->see('<div id="astroport-name">');
    }
}
