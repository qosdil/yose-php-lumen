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
             ->see('<a id="ping-challenge-link" href="'.env('APP_URL', 'http://localhost:8000').'/ping">Ping</a>');
    }
}
