<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\editor;
use App\Models\journal;
use App\Models\manuscripts;
use App\Models\reviewer;

class FormController extends Controller
{
    //for editor form
    function join_editor(){
        return view('join_editor');
    }


    function submit_editor(Request $request){

        $request->validate([
            'name'=>'required|regex:/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/',
            'mail'=>'required|email',
            'mobile'=>'required|numeric',
            'country'=>'required|regex:/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/',
            'specialization'=>'required|regex:/^([A-Za-z0-9]\s?)+([,]\s?([A-Za-z0-9]\s?)+)*$/',
            'affiliation'=>'required|regex:/^([A-Za-z0-9]\s?)+([,]\s?([A-Za-z0-9]\s?)+)*$/',
            'publication'=>'required|regex:/^([A-Za-z0-9]\s?)+([,]\s?([A-Za-z0-9]\s?)+)*$/',
            'photo'=>'required|mimes:jpeg,jpg,png',
            'cv'=>'required|mimes:pdf,docx',
           
           ]);

                $photo = time().'.'.$request->photo->extension(); 
                $cv = time().'.'.$request->cv->extension(); 
           
                $editor=new editor;
                $editor->name=strip_tags($request->name);
                $editor->email=strip_tags($request->mail);
                $editor->mobile=strip_tags($request->mobile);
                $editor->country=strip_tags($request->country);
                $editor->specialization=strip_tags($request->specialization);
                $editor->affiliation=strip_tags($request->affiliation);
                $editor->publication=strip_tags($request->publication);
                $editor->photo=strip_tags($photo);
                $editor->cv=strip_tags($cv);
                $editor->ip_address = \Request::ip();
           
                $editor->save();


                $request->photo->move(base_path('public_html/assets/editors/img'), $photo);
                $request->cv->move(base_path('public_html/assets/editors/cv'), $cv);


                return redirect('Join_editor')->with('message','Your request Submitted successfully');

    }





    // for manuscript 
    function manuscript(){
        $journal = journal::select('j_name','j_id')
        ->get();

        return view('manuscript', ['journal'=>$journal ]);
    }

    function submit_manuscript(Request $request){
        $request->validate([
            'mode'=>'required|regex:/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/',
            'type'=>'required|regex:/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/',
            'journal'=>'required|numeric',
            'author'=>'required|regex:/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/',
            'affiliation'=>'required|regex:/^([A-Za-z0-9]\s?)+([,]\s?([A-Za-z0-9]\s?)+)*$/',
            'mail'=>'required|email',
            'mobile'=>'required|numeric',
            'manuscript' =>'required',
            'file'=>'required|mimes:pdf,docx',
           ]);


           $j_name = journal::where('j_id',$request->journal)
           ->get('j_name')
           ->first();

    

           $file = time().'.'.$request->file->extension(); 

      
           $manuscript=new manuscripts;
           $manuscript->mode=strip_tags($request->mode);
           $manuscript->type=strip_tags($request->type);
           $manuscript->journal=$j_name->j_name;
           $manuscript->author=strip_tags($request->author);
           $manuscript->affiliation=strip_tags($request->affiliation);            $manuscript->email=strip_tags($request->mail);
           $manuscript->mobile=strip_tags($request->mobile);
           $manuscript->manuscript =strip_tags($request->manuscript);
           $manuscript->file=strip_tags($file);
          
           $manuscript->ip_address = \Request::ip();
      
           $manuscript->save();


           $request->file->move(base_path('public_html/assets/manuscript'), $file);



           return redirect('manuscript')->with('message','Your request Submitted successfully');

    }


    function reviewer(){
        return view('join_reviewer');
    }


    function submit_reviewer(Request $request){

        $request->validate([
            'name'=>'required|regex:/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/',
            'mail'=>'required|email',
            'mobile'=>'required|numeric',
            'country'=>'required|regex:/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/',
            'specialization'=>'required|regex:/^([A-Za-z0-9]\s?)+([,]\s?([A-Za-z0-9]\s?)+)*$/',
            'affiliation'=>'required|regex:/^([A-Za-z0-9]\s?)+([,]\s?([A-Za-z0-9]\s?)+)*$/',
            'publication'=>'required|regex:/^([A-Za-z0-9]\s?)+([,]\s?([A-Za-z0-9]\s?)+)*$/',
            'photo'=>'required|mimes:jpeg,jpg,png',
            'cv'=>'required|mimes:pdf,docx',
           
           ]);

                $photo = time().'.'.$request->photo->extension(); 
                $cv = time().'.'.$request->cv->extension(); 
           
                $reviewer=new reviewer;
                $reviewer->name=strip_tags($request->name);
                $reviewer->email=strip_tags($request->mail);
                $reviewer->mobile=strip_tags($request->mobile);
                $reviewer->country=strip_tags($request->country);
                $reviewer->specialization=strip_tags($request->specialization);
                $reviewer->affiliation=strip_tags($request->affiliation);
                $reviewer->publication=strip_tags($request->publication);
                $reviewer->photo=strip_tags($photo);
                $reviewer->cv=strip_tags($cv);
                $reviewer->ip_address = \Request::ip();
           
                $reviewer->save();


                $request->photo->move(base_path('public_html/assets/reviewers/img'), $photo);
                $request->cv->move(base_path('public_html/assets/reviewers/cv'), $cv);


                return redirect('join_reviewer')->with('message','Your request Submitted successfully');

    }













}
