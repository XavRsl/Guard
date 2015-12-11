<?php

use Laravel\Guard;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    /** @test */
    public function fields_are_not_mass_assignable_by_default()
    {

        // $this->setExpectedException('Illuminate\Database\Eloquent\MassAssignmentException');
        // MassAssignmentException isn't always thrown, only when model is totally guarded ([*])
        Guard::create(['any_field' => 'BLABLA']);
        $this->dontSeeInDatabase('guards', ['any_field' => 'BLABLA']);
    }

    /** @test */
    public function guard_config_fields_are_mass_assignable()
    {
        // $this->setExpectedException('Illuminate\Database\Eloquent\MassAssignmentException');
        // $this->assertTrue(true);
        Guard::create(['name' => 'BLABLA']);
        $this->seeInDatabase('guards', ['name' => 'BLABLA']);
        
    }
}
