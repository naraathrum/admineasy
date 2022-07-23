<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    private $database;

public function __construct()
{
    $this->database = \App\Services\FirebaseService::connect();
}
public function create(Request $request) 
{
    $this->database
        ->getReference('test/blogs/' . $request['title'])
        ->set([
            'title' => $request['title'] ,
            'content' => $request['content']
        ]);

    return response()->json('blog has been created');
}
public function index() 
{
    $this->database
    ->getReference('test/blogsfdfd/' . 'sdds')
    ->set([
        'title' => 'asas',
        'content' => 'asas'
    ]);
    echo '<pre>';
        print_r('asdsad');
}
public function edit(Request $request) 
{
    $this->database->getReference('test/blogs/' . $request['title'])
        ->update([
            'content/' => $request['content']
        ]);

    return response()->json('blog has been edited');
}
public function delete(Request $request)
{
    $this->database
        ->getReference('test/blogs/' . $request['title'])
        ->remove();

    return response()->json('blog has been deleted');
}
}

