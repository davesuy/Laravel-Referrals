<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Pdazcom\Referrals\Events\ReferralCase;

Route::get('/', function () {

	// $user = new App\User();

	// //echo $user->getReferrals().'<br/>';

	//  foreach($user->getReferrals() as $referral) {
	//  	//echo $referral->program->name;

	//  	//echo $referral->link;
	    	
	//  }

	//  $ref = new ReferralCase(['bonus'], 9, 2);



 //    foreach(auth()->user()->getReferrals() as $referral) {

 //        $pointsEarned = 10;

 //        $ref = new ReferralCase([$referral->program->name], auth()->user()->id, $pointsEarned);

 //       // event($ref);


 //    }

	 

	 //event($ref);

	// echo print_r($ref);

	 //echo print_r(new Pdazcom\Referrals\Events\ReferralCase(['example'], 1, 55));
 
    //return view('welcome')->with('users', $users);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
