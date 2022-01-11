<?php

namespace Tests\Unit;

use App\Models\Thread;
use PHPUnit\Framework\TestCase;

class ThreadTest extends TestCase
{
    public function test_a_thread_has_replies()
    {
        $thread = Thread::factory()->create();

        $this->assertInstanceOf('App\Models\User'  ,$thread->replies);
    }
}
