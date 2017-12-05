<?php
namespace App\Http\Controllers;
 
use App\Tweet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class TweetController extends Controller{
 
	public function createTweet(Request $request){
 
    	$tweet = Tweet::create($request->all());
            print_r($tweet);
    	return response()->json($tweet);
 
	}
 
	
}
?>