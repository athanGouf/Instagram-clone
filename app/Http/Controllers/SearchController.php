<?php

namespace App\Http\Controllers;


use App\User;

class SearchController extends Controller
{


    public function __invoke(){
        $keyword = request()->validate([
            'keywords' => 'required'
        ]);

        $users = User::where('name','like',$keyword['keywords'].'%')
                    ->orWhere('username','like',$keyword['keywords'].'%')->get();
        $profiles = [];
        foreach($users as $user){
            array_push($profiles,$user->profile);
        }


        return view('search.index',compact('profiles'));
    }
}
