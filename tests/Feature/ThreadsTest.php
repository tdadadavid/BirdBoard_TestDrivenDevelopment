<?php

namespace Tests\Feature;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThreadsTest extends TestCase
{

    use DatabaseMigrations , RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->thread = Thread::factory()->create();

    }

    public function test_threads_endpoint_is_working()
    {
        $this->get('/threads')
              ->assertStatus(200);
    }

    public function test_a_user_can_see_threads_title()
    {

        $this->get('/threads')
            ->assertSee($this->thread->title);
    }

    public function test_a_user_can_a_see_a_particular_thread()
    {
        $this->get('/threads/' . $this->thread->id)
             ->assertStatus(200);
    }

    public function test_a_user_can_see_a_thread_title_and_body()
    {
        $this->get('/threads/' . $this->thread->id)
            ->assertSee([$this->thread->title , $this->thread->body]);
    }

    public function test_a_user_can_read_replies_associated_with_a_thread()
    {
        //Get a reply
        $reply = Reply::factory()->create(['thread_id' => $this->thread->id]);

        $this->get('/threads/' . $this->thread->id)
            ->assertSee([$reply->title , $reply->body]);
    }

}
