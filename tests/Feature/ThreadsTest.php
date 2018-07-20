<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use TestCase;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
     function a_user_can_browse_threads(){
        $response= $this->get('/threads');

         $response->assertStatus(200);
    }
}
