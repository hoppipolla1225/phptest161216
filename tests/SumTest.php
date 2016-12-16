<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\HelloController;
class SumTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }
    public function setUp()
    {
      parent::setUp();
      $this->controller = new HelloController();
    }
    public function test()
    {
      $this->assertEquals($this->controller->sum(10,20), 30);
      $this->assertEquals($this->controller->sum('10', 20), '');
      $this->assertEquals($this->controller->sum(10, '20'), '');
      $this->assertEquals($this->controller->sum(10.0, 20), '');
      $this->assertEquals($this->controller->sum(-999,20), -979);
      $this->assertEquals($this->controller->sum(-1000,20), '');
      $this->assertEquals($this->controller->sum(-100,-999), -1099);
      $this->assertEquals($this->controller->sum(-100,-1000), '');
      $this->assertEquals($this->controller->sum(-1000,-1000), '');
      $this->assertEquals($this->controller->sum(100,999), 1099);
      $this->assertEquals($this->controller->sum(1000, 100), '');
      $this->assertEquals($this->controller->sum(100, 1000), '');
      $this->assertEquals($this->controller->sum(333, 444), 'Happy');
      $this->assertEquals($this->controller->sum(333, 443), 776);
    }
}
