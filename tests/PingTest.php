<?php

class PingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPing()
    {
        $this->visit('/ping')
             ->seeJson([
                'alive' => true,
             ]);
    }

    public function testPingLink()
    {
        $this->visit('/')
             ->see('<a id="ping-challenge-link" href="'.url('ping').'">Ping</a>');
    }
}
