<?php
$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
	$app->post('tweet','TweetController@createTweet');

}); 
