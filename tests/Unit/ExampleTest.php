<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Title;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    public function testBasicTest()
    {

  
       $this->assertTrue(true);
      // $this->disableExceptionHandling();
    }

   
    public function testTitlesModelCount() {
        $title_init = new Title();
        $this->assertTrue( count($title_init->all()) == 6, 'The value should be equal to 6');
    }
  


}
