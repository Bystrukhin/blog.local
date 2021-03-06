<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        // Remember you could run test with command: vendor/bin/phpunit tests/Unit/ExampleTest.php

        $first = factory(Post::class)->create();

        $second = factory(Post::class)->create([
            'created_at' => Carbon::now()->subMonth()
        ]);

        $posts = Post::archives();

        $this->assertEquals([
            [
                'year' => $first->created_at->format('Y'),
                'month' => $first->created_at->format('F'),
                'published' => 1
            ],
            [
                'year' => $second->created_at->format('Y'),
                'month' => $second->created_at->format('F'),
                'published' => 1
            ]
        ], $posts);

    }
}
