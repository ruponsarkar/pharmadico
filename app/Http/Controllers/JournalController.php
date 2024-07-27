<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\journal;
use App\Models\editor_data;
use App\Models\indexings;
use App\Models\volumes;
use App\Models\issue;
use App\Models\articles;
use App\Models\book;
use DB;

class JournalController extends Controller
{

    function journals(){
        $allJournals = journal::get()->where('active', 1);

        return view('journals', ['allJournals'=>$allJournals]);
    }


    function books(){
        $books = book::get()->where('active', 1);

        return view('book-list', ['books'=>$books]);
    }

 

    function Journals_details(Request $request, $id){
       
        $err = journal::count('j_id');

        if($id>$err || $id<1){
            echo "404";
            return;
        }

        $Journal_details = journal::select(['j_name','j_id','abbr_title','issn','frequency', 'subject', 'format','language','chief_editor', 'publisher','country_of_origin', 'aim_and_scope'])
        ->where('j_id', strip_tags($id))
        ->first();


        $Chief_editors = editor_data::select(['image','name','university','details','profile'])
        ->where('type','=', 'chief')
        ->where('j_id', '=', $id)
        ->where('active', '=', 1)
        ->get();


        $ass_editors = editor_data::select(['image','name','university','details','profile'])
        ->where('type','=', 'ass')
        ->where('j_id', '=', $id)
        ->where('active', '=', 1)
        ->get();



        $indexing = indexings::select(['link','img'])
        ->where('j_id', '=', $id)
        ->get();

        $volume = volumes::select(['id', 'name'])
        ->where('j_id','=',$id)
        ->get();
        



        $issues = issue::select(['name','id'])
        ->where('v_id','=',$id)
        ->get();
        
       
        
        
        
        

        return view('journal-details', ['Journal_details'=>$Journal_details, 'Chief_editors'=>$Chief_editors, 'ass_editors'=>$ass_editors, 'indexing'=>$indexing, 'volume'=>$volume, 'issues'=>$issues]);

    }
    
    
        function allissuesList(Request $request, $id){


        $j_id = volumes::select('id','j_id', 'name')
        ->where('id','=', $id)
        ->first();

        $Journal_details = journal::select(['j_name','j_id'])
        ->where('j_id', $j_id->j_id)
        ->first();



        $issues = issue::select(['name','id'])
        ->where('v_id','=', $id)
        ->where('active', 1)
        ->get();


        return view('all_issues', ['Journal_details'=>$Journal_details,  'issues'=>$issues]);


    }





    function allIssues(Request $request, $id){
       
    

        $Journal_details = journal::select(['j_name','j_id','abbr_title','issn','frequency','language','chief_editor', 'publisher','country_of_origin', 'aim_and_scope'])
        ->where('j_id', strip_tags($id))
        ->first();


        $Chief_editors = editor_data::select(['image','name','university','profile'])
        ->where('type','=', 'chief')
        ->where('j_id', '=', $id)
        ->get();


        $ass_editors = editor_data::select(['image','name','university','profile'])
        ->where('type','=', 'ass')
        ->where('j_id', '=', $id)
        ->get();



        $indexing = indexings::select(['link','img'])
        ->where('j_id', '=', $id)
        ->get();

        $volume = volumes::select(['id', 'name'])
        ->where('j_id','=',$id)
        ->get();

        $issues = issue::select('name','id')
        ->where('v_id','=',$id)
        ->get();




        $v_id = issue::select('v_id','id')
        ->where('id','=', $id)
        ->first();

        $j_id = volumes::select('id','j_id', 'name')
        ->where('id','=', $v_id->v_id)
        ->first();

        $Journal_details = journal::select(['j_name','j_id'])
        ->where('j_id', $j_id->j_id)
        ->first();

        $article = articles::select('id','name','aname','designation','doi','page','file','count', 'abstract', 'fileOriginalName')
        ->where('i_id','=', $v_id->id)
        ->where('v_id','=', $j_id->id)
        ->where('status','=', 1)
        ->get();


        return view('issues', ['Journal_details'=>$Journal_details, 'Chief_editors'=>$Chief_editors, 'ass_editors'=>$ass_editors, 'indexing'=>$indexing, 'volume'=>$volume, 'issues'=>$issues, 'article'=>$article]);

    }
    
    function countDownload(Request $request){
        // echo $request->id;
        $preCount = articles::where('id','=',$request->id)->first('count');
        $article = articles::where('id','=', $request->id)->update([
            'count' => 1 + $preCount->count
            ]);
            return "Counted";
            // return redirect()->back();
    }

    function article($slug){
        // $article = articles::where('slug', $slug)->first();

        $article = DB::table('article')
        ->join('issues', 'issues.id', '=', 'article.i_id')
        ->join('volume', 'volume.id', '=', 'issues.v_id')
        ->join('journals', 'journals.j_id', '=', 'volume.j_id')
        ->where('article.slug', $slug)
        ->select('*', 'article.name as name', 'article.id as airticle_id')
        ->first();

        return view('viewArticle', ['article'=> $article]);
    }
    





}
