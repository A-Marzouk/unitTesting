<?php

namespace Tests\Unit;

use App\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase ;

    /** @test */
    public function it_fetches_trending_articles(){

        // given  - set up the world ( like having data in the database )
        // generate 3 articles:
        factory(Article::class,3)->create();
        $mostPopular = factory(Article::class)->create(['reads' => 150]);


        // when - what is the action to execute

        $articles = Article::trending();

        // then
        $this->assertEquals($mostPopular->id, $articles->first()->id);
        $this->assertCount(3,$articles);
    }

}
