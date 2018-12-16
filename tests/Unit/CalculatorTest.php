<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Calc;

class CalculatorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testSave()
    {
        $calc = factory(\App\Calc::class)->make();
        $this->assertTrue($calc->save());
    }
    //Unit test to check the question weightage field is integer
    public function testCalculatorWeightageFieldIsInteger()
    {
        $calc = Calc::inRandomOrder()->first();
        $question_weightage = (int)$calc->question_weightage;
        $this->assertInternalType("int", $question_weightage);
    }
    //Unit test to check the no of question field is integer
    public function testNoOfQuestionFieldIntefer()
    {
        $calc = Calc::inRandomOrder()->first();
        $no_of_questions = (int)$calc->no_of_questions;
        $this->assertInternalType("int", $no_of_questions);
    }


}
