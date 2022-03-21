<?php

namespace Tests\Unit\Api;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User;

class RoutesTest extends TestCase
{
  use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_response()
    {
        $response = $this->post("/api/login")->assertStatus(200);
    }

    public function test_student_list_response()
    {
        $response = $this->get("/api/student")->assertStatus(200);
    }

    public function test_show_student_response()
    {
        $response = $this->get("/api/student/5")->assertStatus(200);
    }

    public function test_store_student_response()
    {
        $response = $this->post("/api/student")->assertStatus(200);
    }

    public function test_update_student_response()
    {
        $response = $this->put("/api/student/1")->assertStatus(200);
    }

    public function test_delete_student_response()
    {
        $response = $this->delete("/api/student/1")->assertStatus(200);
    }

    public function test_should_login_response()
    {
        $this->actingAs(User::factory()->create());
        $response = $this->delete("/api/student/1")->assertOk();
    }


}
