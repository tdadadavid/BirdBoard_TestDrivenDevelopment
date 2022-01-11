<?php

namespace Tests\Unit;

use App\Models\Reply;
use PHPUnit\Framework\TestCase;

class ReplyTest extends TestCase
{
    public function test_a_reply_belongs_to_a_user()
    {
        $reply = Reply::factory()->create();

        $this->assertInstanceOf('App\Model\User' , $reply->owner);
    }
}
