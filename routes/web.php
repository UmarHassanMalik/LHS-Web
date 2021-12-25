<?php

use Illuminate\Support\Facades\Route;
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
    return redirect()->route('login');
});

//Dashboards
Route::get('/createUser',  [App\Http\Controllers\post_legal_caseController::class, 'createUser'])->name('createUser');



Route::get('/laywerDashboard',  [App\Http\Controllers\post_legal_caseController::class, 'lawyerDashboard'])->name('lawyerDashboard');






Route::get('/Feedback', [App\Http\Controllers\clientfeedbackController::class, 'create']);
Route::post('/Feedback', [App\Http\Controllers\clientfeedbackController::class, 'store']);

Route::get('/PostLegalCase', [App\Http\Controllers\post_legal_caseController::class, 'postcase']);
Route::post('/PostLegalCase', [App\Http\Controllers\post_legal_caseController::class, 'add']);



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user','fireauth');

// Route::get('/home/customer', [App\Http\Controllers\HomeController::class, 'customer'])->middleware('user','fireauth');



//Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

//Route::resource('/home/profile', App\Http\Controllers\Auth\ProfileController::class)->middleware('user','fireauth');

// Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);


Route::get('/forgot/password', [App\Http\Controllers\ForgotPassword::class, 'forgotPassword'])->name('forgotPassword');

Route::post('/forgot/password', [App\Http\Controllers\ForgotPassword::class, 'emailSend'])->name('emailSend');

Route::get('/change/password/{userId}', [App\Http\Controllers\ForgotPassword::class, 'changePassword'])->name('changePassword');

Route::post('/change/password', [App\Http\Controllers\ForgotPassword::class, 'changePasswordUpdate'])->name('changePasswordUpdate');





Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/lawyer/search', [App\Http\Controllers\post_legal_caseController::class, 'search'])->name('search');


Route::get('/lawyers/category/{lawyerType}', [App\Http\Controllers\post_legal_caseController::class, 'searchCategory'])->name('searchByType');




Route::get('/Profile/dashboard', [App\Http\Controllers\post_legal_caseController::class, 'dashboard'])->name('dashboard');

Route::get('/Profile/Settings', [App\Http\Controllers\post_legal_caseController::class, 'profile'])->name('profile');

// Route::get('/Profile/quotations', function () {
//     return view('Profile/quotations');
// });
Route::get('/Profile/Cases/Opened', [App\Http\Controllers\post_legal_caseController::class, 'myCases'])->name('myCases');

Route::get('/Profile/Cases/Ongoing', [App\Http\Controllers\post_legal_caseController::class, 'ongoingCases'])->name('ongoingCases');


Route::get('/Profile/Case/{id}', [App\Http\Controllers\post_legal_caseController::class, 'case'])->name('case');

Route::get('/Profile/Cases/Closed', [App\Http\Controllers\post_legal_caseController::class, 'closedCases'])->name('closedCases');

Route::get('/Profile/CloseCase/{id}', [App\Http\Controllers\post_legal_caseController::class, 'closeCase'])->name('closeCase');



Route::get('/hireLawyer/{lawyerId}/case/{caseId}/{app_id}', [App\Http\Controllers\hireController::class, 'hireLaywer'])->name('hireLaywer');

Route::post('/hireLawyer', [App\Http\Controllers\hireController::class, 'hireLawyerNow'])->name('hireLawyerNow');


Route::get('/removeApplication/{app_id}', [App\Http\Controllers\hireController::class, 'removeApp'])->name('removeApp');

Route::get('/closeCase/{title}', [App\Http\Controllers\hireController::class, 'closeCase'])->name('closeCase');



Route::get('/Articles', [App\Http\Controllers\post_legal_caseController::class, 'articles'])->name('articles');



Route::get('/PostLegalCase', function () {
    return view('PostLegalCase');
});
Route::get('/PakistanLaws', function () {
    return view('PakistanLaws');
});

Route::get('/Case/Messages/{title}/{user_id}', [App\Http\Controllers\post_legal_caseController::class, 'messages'])->name('messages');



Route::post('/Case/Message/New', [App\Http\Controllers\post_legal_caseController::class, 'sendMessage'])->name('sendMessage');

Route::post('/Case/Message/NewFile', [App\Http\Controllers\post_legal_caseController::class, 'sendFile'])->name('sendFile');



Route::get('/cache', function(){

    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    dd('Cache Configured Successfully');

});

Route::get('/key', function(){

    Artisan::call('key:generate');
    dd('App Key Generated Successfully');

});



//Start Lawyer Routes :

Route::get('/Profile/Lawyer/Settings', [App\Http\Controllers\post_legal_caseController::class, 'lawyerProfile'])->name('lawyerProfile');



Route::get('/Profile/Lawyer/Articles', [App\Http\Controllers\post_legal_caseController::class, 'myArticles'])->name('myArticles');
Route::post('/Profile/Lawyer/Add/Article', [App\Http\Controllers\post_legal_caseController::class, 'addArticle'])->name('addArticle');
Route::get('/Profile/Lawyer/Delete/Article/{id}', [App\Http\Controllers\post_legal_caseController::class, 'deleteArticle'])->name('deleteArticle');
Route::get('/Profile/Lawyer/Cases/Applied', [App\Http\Controllers\post_legal_caseController::class, 'appliedCases'])->name('appliedCases');
Route::get('/Profile/Lawyer/Cases/Ongoing', [App\Http\Controllers\post_legal_caseController::class, 'ongoingLawyerCases'])->name('ongoingLawyerCases');

Route::get('/Profile/Lawyer/Cases/Closed', [App\Http\Controllers\post_legal_caseController::class, 'hiredCases'])->name('hiredCases');
Route::get('/Profile/Lawyer/Cases/Apply', [App\Http\Controllers\post_legal_caseController::class, 'applyForCases'])->name('applyForCases');

Route::post('/Profile/Lawyer/Case/Apply', [App\Http\Controllers\post_legal_caseController::class, 'apply'])->name('apply');



//End Lawyer Routes
//Start Admin Routes:
Route::get('/Admin/Cases/Opened', [App\Http\Controllers\post_legal_caseController::class, 'articles'])->name('articles');


Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('adminDashboard');



Route::get('/cases/all', [App\Http\Controllers\AdminController::class, 'casesAll'])->name('casesView');


Route::get('/cases/ongoing/all', [App\Http\Controllers\AdminController::class, 'casesOnGoing'])->name('casesOnGoingView');


Route::get('/cases/closed/all', [App\Http\Controllers\AdminController::class, 'casesClosed'])->name('casesClosedView');

Route::get('/cases/open/all', [App\Http\Controllers\AdminController::class, 'casesOpened'])->name('casesOpenedView');



Route::get('/case/delete/{userId}/{caseTitle}', [App\Http\Controllers\AdminController::class, 'caseDelete'])->name('caseDelete');




Route::get('/users/all', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('usersView');


Route::get('/user/edit/{id}', [App\Http\Controllers\AdminController::class, 'userEditView'])->name('userEditView');
Route::post('/user/edit', [App\Http\Controllers\AdminController::class, 'userEdit'])->name('userEdit');

Route::get('/lawyer/edit/{id}', [App\Http\Controllers\AdminController::class, 'lawyerEditView'])->name('lawyerEditView');




Route::post('/lawyer/edit', [App\Http\Controllers\AdminController::class, 'lawyerEdit'])->name('lawyerEdit');


Route::get('/lawyers/all', [App\Http\Controllers\AdminController::class, 'lawyersView'])->name('lawyersView');

Route::get('/feedback/all', [App\Http\Controllers\AdminController::class, 'feedbackView'])->name('feedbackView');


Route::get('/feedback/delete/{feedbackId}', [App\Http\Controllers\AdminController::class, 'feedbackDelete'])->name('feedbackDelete');


Route::get('/articles/all', [App\Http\Controllers\AdminController::class, 'articleView'])->name('articleView');


Route::get('/article/delete/{articleId}', [App\Http\Controllers\AdminController::class, 'articleDelete'])->name('articleDelete');

//End Admin Routes
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/user/delete/{userId}', [App\Http\Controllers\AdminController::class, 'userDelete'])->name('userDelete');


Route::get('/lawyer/delete/{lawyerId}', [App\Http\Controllers\AdminController::class, 'lawyerDelete'])->name('lawyerDelete');
