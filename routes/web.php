<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\adminPanelController;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [IndexController::class, 'index']);

Route::get('journals', [JournalController::class, 'journals']);

Route::get('journal-details/{id}', [journalController::class, 'Journals_details']);

Route::get('all_issues/{id}', [JournalController::class, 'allissuesList']);
Route::get('issues/{id}', [journalController::class, 'allIssues']);

Route::get('countDownload/{id}', [JournalController::class, 'countDownload']);

Route::get('/search', [IndexController::class, 'search']);

Route::get('manuscript', [IndexController::class, 'manuscript']);

Route::get('searchManuscript', [IndexController::class, 'searchManuscript']);

Route::get('getIndexing', [IndexController::class,'index']);

Route::post('submit_manuscript', [FormController::class, 'submit_manuscript']);

Route::get('about', function(){
    return view('aboutUs');
});
Route::get('authorGuidlines', function(){
    return view('authorGuidlines');
});
Route::get('editorsGuidlines', function(){
    return view('editorsGuidlines');
});
Route::get('reviewersGuidlines', function(){
    return view('reviewersGuidlines');
});



Route::get('/Join_editor', function () {
    return view('Join_editor');
});
Route::get('/join_reviewer', function () {
    return view('join_reviewer');
});

//test
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('all-manuscripts', [adminPanelController::class, 'allManuscript']);
Route::get('add-conference', [adminPanelController::class,'addconference']);
// Route::get('update-manuscripts/{mid}/{status}', [adminPanelController::class, 'updateManuscript']);

// admin panel 

Route::group(['middleware'=>['AuthCheck']], function(){
    
    Route::get('login', [adminPanelController::class, 'login']);
    Route::get('admin_index', [adminPanelController::class, 'adminIndex']);
    Route::get('all-manuscript', [adminPanelController::class, 'allManuscript']);
    Route::get('receive-editors', [adminPanelController::class, 'allEditorsRequest']);
    
    Route::get('journalForm', [adminPanelController::class, 'journalForm']);
    Route::post('addJournal', [adminPanelController::class, 'addJournal']);
    Route::get('indexing', [adminPanelController::class, 'indexing']);
    Route::post('addIndexing', [adminPanelController::class, 'addIndexing']);
    Route::get('indexingList/{id}', [adminPanelController::class, 'indexingList']);
    Route::post('UpdateIndexing', [adminPanelController::class, 'UpdateIndexing']);
    Route::get('DeleteIndexing/{id}', [adminPanelController::class, 'DeleteIndexing']);
    
    Route::view('conference' , [adminPanelController::class,'conference']);
    Route::post('addConferences' , [adminPanelController::class,'addConferenceinsert']);
    

    Route::get('viewer/{id}', [adminPanelController::class, 'viewer']);
    Route::get('addEditors', [adminPanelController::class, 'addEditors']);
    Route::post('editors', [adminPanelController::class, 'editors']);

    Route::get('delete_editors/{id}', [adminPanelController::class, 'delete_editors']);

    Route::get('edit_editor/{id}', [adminPanelController::class, 'edit_editor']);
    Route::post('edit_editor/updateEditors/{id}', [adminPanelController::class, 'updateEditors']);

    Route::get('add-volume', [adminPanelController::class, 'addVolume']);
    Route::post('addVolume', [adminPanelController::class, 'addVolumeData']);
    Route::get('add-issues/{id}',  [adminPanelController::class, 'addIssues']);

    Route::post('add-issues/{id}', [adminPanelController::class, 'addIssuesData']);

    Route::get('add-article/{id}', [adminPanelController::class, 'addArticle']);

    Route::post('addArticleData/{id}', [adminPanelController::class, 'addArticleData']);

    Route::get('update-article/{id}', [adminPanelController::class, 'updateArticle']);
    Route::post('update-article/update-article-data/{id}', [adminPanelController::class, 'updateArticleData']);

    Route::get('Checkjournals', [adminPanelController::class, 'Checkjournals']);
    Route::get('update-journals/{id}', [adminPanelController::class, 'updateJournals']);
    Route::post('updateJournalsData/{id}', [adminPanelController::class,'updateJournalsData']);
    Route::post('updateJournalPhoto/{id}', [adminPanelController::class,'updateJournalPhoto']);
    Route::get('delete-journals/{id}', [adminPanelController::class,'deleteJournals']);
    Route::get('delete-article/{id}', [adminPanelController::class, 'deleteArticle']);

    Route::get('book', [adminPanelController::class,'book']);
    Route::post('addBook', [adminPanelController::class,'addBook']);

    // home assets 
    Route::post('changeHomeAsset', [adminPanelController::class,'changeHomeAsset']);
   

});

// Route::post('regis', [adminPanelController::class, 'addAdmin']);
// Route::get('register', [adminPanelController::class, 'regis']);

 Route::post('check', [adminPanelController::class, 'check']);   
 Route::get('logout', [adminPanelController::class, 'logout']);













