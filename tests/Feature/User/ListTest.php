<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Domain\Services\User\Service;

class ListTest extends TestCase
{
    use RefreshDatabase;

    protected string $uri = "/user/list";

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_list_route()
    {
        $response = $this->get($this->uri);
        $response->assertStatus(200);

        User::factory()->count(100)->create();
        $data = Service::getAllUser();
        $this->assertEquals(100, count($data));

        $response->assertViewIs('pages.users.index');
    }
}
