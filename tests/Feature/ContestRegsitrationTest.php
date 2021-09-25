<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContestRegsitrationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function an_email_can_be_entered_into_the_contest()
    {
        $response = $this->post('/contest', [
            'email' => 'abc@abc.com',
        ]);

        $this->assertDatabaseCount('contest_entries', 1);
    }
}
