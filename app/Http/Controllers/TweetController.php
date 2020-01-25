<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    private $tweets = [
        [
            'author' => 'Alex Bymoen',
            'content' => 'This is my first tweet'
        ],
        [
            'author' => 'Alex Bymoen',
            'content' => 'This is my second tweet'
        ],
        [
            'author' => 'Santa',
            'content' => 'This is my first tweet'
        ],
        [
            'author' => 'Alex Bymoen',
            'content' => 'This is my fourth tweet'
        ],
        [
            'author' => 'Santa',
            'content' => 'This is my second tweet'
        ],
    ];

    function show() {
        return view("showTweets", [ "allTweets" => $this->tweets]);
    }

    function showTweet($id) {
        if($id > sizeOf($this->tweets)) {
            return view("tweetError");
        }
        return view("showTweets", [ "allTweets" => [$this->tweets[$id]]]);
    }
}
