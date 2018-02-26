<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LaramanTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function exportWithoutNametest()
    {
        Artisan::call('laraman:export');

        // If you need result of console output
        $resultAsText = Artisan::output();

        $this->assertTrue(true);
    }
}
