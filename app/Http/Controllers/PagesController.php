<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;

class PagesController extends Controller {

    public function getIndex() {
      $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();

        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {
        $first = 'Yunqing';
        $last = 'Peng';

        $fullname = $first . " " . $last;
        $email = 'pengyunqing730@gmail.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages.about')->with('data', $data);
    }

    public function getContact(){
        return view('pages.contact');
    }


}
