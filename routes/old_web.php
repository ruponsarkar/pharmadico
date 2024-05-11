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

Route::get('/', function () {
    return view('test_index');
});

// Route::get('abc', [IndexController::class, 'index']);

Route::get('/', [IndexController::class, 'index']);

Route::get('journals', [JournalController::class, 'journals']);

Route::get('journal-details/{id}', [journalController::class, 'Journals_details']);

Route::get('all_issues/{id}', [JournalController::class, 'allissuesList']);
Route::get('issues/{id}', [journalController::class, 'allIssues']);

Route::get('countDownload/{id}', [JournalController::class, 'countDownload']);

Route::get('manuscript', [IndexController::class, 'manuscript']);

Route::post('submit_manuscript', [FormController::class, 'submit_manuscript']);


Route::get('/Join_editor', function () {
    return view('Join_editor');
});

Route::post('submit_editor', [FormController::class, 'submit_editor']);
Route::post('submit_reviewer', [FormController::class, 'submit_reviewer']);



Route::get('/join_reviewer', function () {
    return view('join_reviewer');
});

Route::get('about-us', function () {
    return view('aboutUs');
});
Route::get('editors-guidlines', function () {
    return view('editorsGuidlines');
});
Route::get('author-guidlines', function () {
    return view('authorGuidlines');
});
Route::get('reviewers-guidlines', function () {
    return view('reviewersGuidlines');
});


Route::get('/contact-us', function () {
    return view('contact-us');
});





//test
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('all-manuscripts', [adminPanelController::class, 'allManuscript']);


Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return '<h1>Reoptimized class loader</h1>';
});



// admin panel 

Route::group(['middleware'=>['AuthCheck']], function(){

    Route::get('login', [adminPanelController::class, 'login']);
    Route::get('admin_index', [adminPanelController::class, 'adminIndex']);
    Route::get('all-manuscript', [adminPanelController::class, 'allManuscript']);
      Route::get('receive-editors', [adminPanelController::class, 'allEditorsRequest']);

    Route::get('journalForm', [adminPanelController::class, 'journalForm']);
    Route::post('addJournal', [adminPanelController::class, 'addJournal']);
    
    // Indexing ****************************
    Route::get('indexing', [adminPanelController::class, 'indexing']);
    Route::post('addIndexing', [adminPanelController::class, 'addIndexing']);
    Route::get('indexingList/{id}', [adminPanelController::class, 'indexingList']);
    Route::post('UpdateIndexing', [adminPanelController::class, 'UpdateIndexing']);
    Route::get('DeleteIndexing/{id}', [adminPanelController::class, 'DeleteIndexing']);
    // ***************************
    // Route::get('register', [adminPanelController::class, 'regis']);
    

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

    Route::get('Checkjournals', [adminPanelController::class, 'Checkjournals']);
    Route::get('update-journals/{id}', [adminPanelController::class, 'updateJournals']);
    Route::post('updateJournalsData/{id}', [adminPanelController::class,'updateJournalsData']);
    Route::post('updateJournalPhoto/{id}', [adminPanelController::class,'updateJournalPhoto']);
    Route::get('delete-journals/{id}', [adminPanelController::class,'deleteJournals']);
    Route::get('delete-article/{id}', [adminPanelController::class, 'deleteArticle']);

    Route::get('book', [adminPanelController::class,'book']);
    Route::post('addBook', [adminPanelController::class,'addBook']);
   

});

// Route::post('regis', [adminPanelController::class, 'addAdmin']);

 Route::post('check', [adminPanelController::class, 'check']);   
 Route::get('logout', [adminPanelController::class, 'logout']);













