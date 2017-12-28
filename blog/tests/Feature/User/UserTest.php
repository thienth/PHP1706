<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use Log;
use Carbon\Carbon;
class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

    	// test tao user moi
    	
  //   	User::saveUser('thienth@gmaol.com', 'thienth', '123456');
  //   	$user = User::where('email', 'thienth@gmaol.com')->first();
  //   	Log::info('test case User::saveUser voi data : ' . 'thienth@gmaol.com-' . 'thienth-' . '123456' . ' tai thoi diem '.Carbon::now());
  //       $this->assertTrue('thienth@gmaol.com' == $user->email);
        


  //       Log::info('test case User::saveUser voi data : ' . 'thienth1@gmaol.com-' . 'thienth-' . '123456'.Carbon::now());
  //       User::saveUser('thienth1@gmaol.com', 'thienth', '123456');
		// $this->assertFalse('thienth1@gmaol.com' == $user->email);

		$this->assertDatabaseHas('users', [
	        'email' => 'thienth32@gmail.com'
	    ]);

    }
}
