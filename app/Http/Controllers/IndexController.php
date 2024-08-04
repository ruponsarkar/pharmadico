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
use App\Models\news;
use App\Models\manuscript_status;
use DB;


class IndexController extends Controller
{
    //
    public function index(){
        $latestArticle = articles::where('status', 1)->limit(4)->orderBy("id", "desc")->get();
        $latestArticleThree = articles::where('status', 1)->limit(3)->orderBy("id", "desc")->get();
        $journals = journal::where('active', 1)->get();
        $news = news::orderBy("id", "desc")->get();
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
        'countJournal'=>$countJournal, 'countArticle'=>$countArticle, 'countDownload'=>$countDownload, 'countVisitor'=>$countVisitor,'news' =>$news]);
    }
   
    function search(Request $request)
    {
        // return $request->all();
        $query = $request->input('query');
        // return $query;
        if (!$query) {
            return response()->json(['error' => 'Query parameter is required'], 400);
        }

        $results = manuscript_status::where('muuid', 'LIKE', "%{$query}%")->first(); // Adjust the field 'name' based on your model

        return response()->json($results);
    }
   

   function manuscript(){
        $journals = journal::get();
        return view('manuscript', ['journals'=>$journals]);
    }

    function viewmanuscript(Request $request , $id){ 
        $parts = explode('-', $id);
        $originalFormat = implode('/', $parts);
        // return $originalFormat;
        $manuStatus = manuscript_status::where('muuid' , $originalFormat)->get();

        $getManufullDetails = manuscripts::where('muuid',   $manuStatus[0]->muuid)->first();
        return view('view-manuscript', ['manudata'=>$manuStatus, 'getManufullDetails'=>$getManufullDetails]);
        // return redirect()->back();
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

    function authorGuidlines(){

        $data = DB::table('pages')->where('type', 'author')->orderBy('id', 'desc')->first();
        
        return view('authorGuidlines', ['data'=>$data]);
    }
    
    function editorsGuidlines(){
        
        $data = DB::table('pages')->where('type', 'editor')->orderBy('id', 'desc')->first();
        return view('editorsGuidlines',  ['data'=>$data]);
    }
    function reviewersGuidlines(){
        $data = DB::table('pages')->where('type', 'reviewer')->orderBy('id', 'desc')->first();
        return view('reviewersGuidlines',  ['data'=>$data]);
    }
    
    
    function aboutUs(){
        $data = DB::table('pages')->where('type', 'about')->orderBy('id', 'desc')->first();
        return view('aboutUs',  ['data'=>$data]);
    }
    function contactUs(){
        $data = DB::table('pages')->where('type', 'contact')->orderBy('id', 'desc')->first();
        return view('contactUs',  ['data'=>$data]);
    }
    function PublicationEthicsandMalpracticeStatement(){
        $data = DB::table('pages')->where('type', 'PublicationEthicsandMalpracticeStatement')->orderBy('id', 'desc')->first();
        return view('PublicationEthicsandMalpracticeStatement',  ['data'=>$data]);
    }
    function ManuscriptPreparationGuidelines(){
        $data = DB::table('pages')->where('type', 'ManuscriptPreparationGuidelines')->orderBy('id', 'desc')->first();
        return view('ManuscriptPreparationGuidelines',  ['data'=>$data]);
    }
    function ResearchGuidelines(){
        $data = DB::table('pages')->where('type', 'ResearchGuidelines')->orderBy('id', 'desc')->first();
        return view('ResearchGuidelines',  ['data'=>$data]);
    }
    function APAStyle(){
        $data = DB::table('pages')->where('type', 'APAStyle')->orderBy('id', 'desc')->first();
        return view('APAStyle',  ['data'=>$data]);
    }
    function Writingagoodresearchpaper(){
        $data = DB::table('pages')->where('type', 'Writingagoodresearchpaper')->orderBy('id', 'desc')->first();
        return view('Writingagoodresearchpaper',  ['data'=>$data]);
    }
    function GoogleLanguageTranslator(){
        $data = DB::table('pages')->where('type', 'GoogleLanguageTranslator')->orderBy('id', 'desc')->first();
        return view('GoogleLanguageTranslator',  ['data'=>$data]);
    }
    
    
    


}
