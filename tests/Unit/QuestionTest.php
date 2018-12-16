<?php

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use  app\Question;
use app\user;
class QuestionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSave()
    {
        $user = $user = factory(\App\User::class)->make();
        $user->save();
        $question = factory(\App\Question::class)->make();
        $question->user()->associate($user);
        $this->assertTrue($question->save());
    }

    //unitest inserting tag and question  in question form
    public function testInsertQuestionTagTable()
    {
        $question= new Question();
        $question->id= 1234;
        $question->user_id= 1;
        $question->body = '#Who is the president of USA?';
        $question->tag = '#Knowledge #USA';
        $this->assertTrue($question->save());
    }

}
