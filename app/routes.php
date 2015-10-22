<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	/*
	$owner = new Role;
	$owner->name = 'Owner';
	$owner->save();

	$admin = new Role;
	$admin->name = 'Admin';
	$admin->save();
	*/
	$user = User::where('username','=','kadirarli')->first();
	/*
	$user->attachRole( $admin ); // Parameter can be an Role object, array or id.

	$managePosts = new Permission;
	$managePosts->name = 'manage_posts';
	$managePosts->display_name = 'Manage Posts';
	$managePosts->save();

	$manageUsers = new Permission;
	$manageUsers->name = 'manage_users';
	$manageUsers->display_name = 'Manage Users';
	$manageUsers->save();

	$owner->perms()->sync(array($managePosts->id,$manageUsers->id));
	$admin->perms()->sync(array($managePosts->id));
	*/
	$bool = $user->hasRole("Owner");    // false
	$bool = $user->hasRole("Admin");    // true
	$bool = $user->can("manage_posts"); // true
	$bool = $user->can("manage_users"); // false

	return View::make('hello');
});
//

// Confide routes
Route::get ('users/create', 				'UsersController@create');
Route::post('users', 						'UsersController@store');
Route::get ('users/login', 					'UsersController@login');
Route::post('users/login', 					'UsersController@doLogin');
Route::get ('users/confirm/{code}', 		'UsersController@confirm');
Route::get ('users/forgot_password', 		'UsersController@forgotPassword');
Route::post('users/forgot_password', 		'UsersController@doForgotPassword');
Route::get ('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 		'UsersController@doResetPassword');
Route::get ('users/logout', 				'UsersController@logout');

Route::get("admin/qwe", function(){
	return "adminsin anladık:)";
});
