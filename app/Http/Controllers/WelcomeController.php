<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
        $ver = ["1"=> "kjv",
            "8"=> "AMPC",
            "12"=> "ASV",
            "31"=> "books",
            "37"=> "ceb",
            "42"=> "cpdv",
            "55"=> "DRC1752",
            "59"=> "ESV",
            "68"=> "GNT",
            "69"=> "GNTD",
            "70"=> "gw",
            "72"=> "hcsb",
            "90"=> "leb",
            "97"=> "msg",
            "100"=> "NASB",
            "105"=> "ncv",
            "107"=> "net",
            "110"=> "nirv-eng",
            "111"=> "NIV11",
            "113"=> "NIVUK",
            "114"=> "nkjv",
            "116"=> "nlt",
            "130"=> "ojb"
        ];
        return view('welcome', [
            'books'=>$books, 
            'notes'=>$notes, 
            'versions'=>$ver,
            'versionId'=>1,
            'bookId'=>1,
            'dataFromTable'=>null
        ]);
    }

    public function welcomeNextPage(Request $request, $bookId, $versionId) {
        $ver = ["1"=> "kjv",
            "8"=> "AMPC",
            "12"=> "ASV",
            "31"=> "books",
            "37"=> "ceb",
            "42"=> "cpdv",
            "55"=> "DRC1752",
            "59"=> "ESV",
            "68"=> "GNT",
            "69"=> "GNTD",
            "70"=> "gw"
        ];
        $newArr = ["kjv"=> "t_kjv",
            "AMPC"=> "t_ampc",
            "ASV"=> "t_asv",
            "books"=> "t_books",
            "ceb"=> "t_ceb",
            "cpdv"=> "t_cpdv",
            "DRC1752"=> "t_drc1752",
            "ESV"=> "t_esv",
            "GNT"=> "t_gnt",
            "GNTD"=>"t_gntd",
            "gw"=> "t-gw"
        ];
        foreach ($ver as $key => $value) {
            // dd($newArr[$value]);
            if($key == $versionId) {
                $table = $newArr[$value];
                // dd($table);
            }
        }
        // return $versions;
        $notes = DB::table('notes')->select('id','t')->where('book_id','=',$bookId)->where('verse_id','=',$versionId)->get();
        $books = DB::table('key_english')->select('n','b')->get();
        $versions = DB::table('bible_version_key')->select('id','table')->where('id','=',$versionId)->get();
        $dataFromTable = DB::table($table)->select('id','t')->where('b','=',$bookId)->where('v','=',$versionId)->get();
        return view('welcome', [
            'books'=> $books, 
            'notes'=> $notes, 
            'versions'=> $ver,
            'bookId' => $bookId,
            'versionId' => $versionId,
            'dataFromTable' => $dataFromTable
        ]);
    }
}
