<?php

// Confide routes
Route::get ('users/create'                  ,'UsersController@create');
Route::post('users'                         ,'UsersController@store');
Route::get ('users/login'                   ,'UsersController@login');
Route::post('users/login'                   ,'UsersController@doLogin');
Route::get ('users/confirm/{code}'          ,'UsersController@confirm');
Route::get ('users/forgot_password'         ,'UsersController@forgotPassword');
Route::post('users/forgot_password'         ,'UsersController@doForgotPassword');
Route::get ('users/reset_password/{token}'  ,'UsersController@resetPassword');
Route::post('users/reset_password'          ,'UsersController@doResetPassword');
Route::get ('users/logout'                  ,'UsersController@logout');
Route::post('users/loginWithFacebook'       ,'UsersController@loginWithFacebook');
Route::get('users/loginWithFacebook'       ,'UsersController@loginWithFacebook');

Route::get('/', function(){    
  //for seo
  SEOMeta::setTitle('Dashboard');
  OpenGraph::addImage('addImage.png');
  OpenGraph::type('article');
  Twitter::type('summary');
  Twitter::addImage('twitter.png');
  //to change language
  App::setlocale('tr');
  return View::make('hello');
});

// Sitemap | Because of I have only users table, I use users table. 
Route::get ('sitemap', function(){
  //for sitemap
	$users = DB::table('users')->orderBy('created_at', 'desc')->get();
    foreach($users as $user){
        $element = array(
                  'location'         => "/".$user->slug,
                  'last_modified'    => $user->created_at,
                  'change_frequency' => 'weekly',
                  'priority'         => '0.90'
            );
        SEOSitemap::addRaw($element);
    }
    return Response::make(SEOSitemap::generate(), 200, array('Content-Type' => 'text/xml'));
});

// RSS
Route::get('/rss', function(){
  //for rss
  $feed = Rss::feed('2.0', 'UTF-8');
  $feed->channel(array('title' => 'Channel\'s title', 'description' => 'Channel\'s description', 'link' => 'http://www.test.com/'));
  for ($i=1; $i<=5; $i++){
      $feed->item(array('title' => 'Item '.$i, 'description|cdata' => 'Description '.$i, 'link' => 'http://www.test.com/article-'.$i));
  }
  return Response::make($feed, 200, array('Content-Type' => 'text/xml'));
});