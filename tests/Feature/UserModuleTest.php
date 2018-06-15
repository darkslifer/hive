<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    function it_load_user_info_page()
    {
        $this->get('user')
             ->assertStatus(200);
    }

}
