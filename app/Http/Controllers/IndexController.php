<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeArticle;
use App\Models\articles;
use App\Models\journal;
use App\Models\visitor;
use App\Models\indexings;
use App\Models\home_asset;
use App\Models\manuscripts;
use App\Models\manuscript_status;


class IndexController extends Controller
{
    //
    public function index(){
        $latestArticle = articles::where('status', 1)->limit(4)->orderBy("id", "desc")->get();
        $latestArticleThree = articles::where('status', 1)->limit(3)->orderBy("id", "desc")->get();
        $journals = journal::where('active', 1)->get();

        $indexings = indexings::where('active', 1)->get();
        

        //for counter section
        
        
        $v = new visitor;
        $v->count = 1;
        $v->ip_address = \Request::ip();
        $v->save();
        
        
         $countJournal = journal::count('j_id');
         $countArticle = articles::where('status', 1)->count('id');
         $countDownload = articles::sum('count');
         $countVisitor = visitor::sum('count');

        return view('index', ['latestArticle' => $latestArticle, 'latestArticleThree' => $latestArticleThree, 'journals'=>$journals, 
        'indexings'=>$indexings,
        'countJournal'=>$countJournal, 'countArticle'=>$countArticle, 'countDownload'=>$countDownload, 'countVisitor'=>$countVisitor]);
    }
   
    function search(Request $request)
    {
        // return $request->all();
        $query = $request->input('query');

        if (!$query) {
            return response()->json(['error' => 'Query parameter is required'], 400);
        }

        $results = manuscript_status::where('muuid', 'LIKE', "%{$query}%")->where('status' , 0)->first(); // Adjust the field 'name' based on your model

        return response()->json($results);
    }
   

   function manuscript(){
        $journals = journal::get();
        return view('manuscript', ['journals'=>$journals]);
    }
    
    
       function refund(){
        return view('refund');
    }

    

    function Peer(){
        return view('Peer');
    }

    function ethics(){
        return view('Ethics');
    }

    function about(){
        return view('about');
    }
    
    
    function contact(){
        return view('contact');
    }

    function authorsGuideline(){
        return view('authorsGuideline');
    }

    function editorsGuideline(){
        return view('editorsGuideline');
    }
    function reviewsGuideline(){
        return view('reviewersGuideline');
    }
    
    
    


}
