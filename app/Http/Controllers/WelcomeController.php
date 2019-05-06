<?php

namespace App\Http\Controllers;
use DB;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {   
        $books = DB::table('key_english')->select('n','b')->get();
        $notes = DB::table('notes')->select('id','t')->get();
        $versions = DB::table('bible_version_key')->select('id','version')->get();
        return $versions;
        return view('welcome', ['books'=>$books, 'notes'=>$notes, 'versions'=>$versions]);
    }

    public function welcome2($id) {
        $notes = DB::table('notes')->select('id','t')->where('book_id','=',$id)->get();
        $books = DB::table('key_english')->select('n','b')->get();
        return view('welcome', ['books'=>$books, 'notes'=>$notes]);
    }
}
