<?php

use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ROController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PipelineController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\GtmFundRequestController;
use App\Http\Controllers\GTMMediaCampaignController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\GTMCollateralRequestController;
use App\Http\Controllers\GTMJointEventRequestController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/partners/test',  [PartnerController::class, 'test'])->name('partners.test');




Route::post('/registration/checkemail', [AuthController::class, 'checkemail'])->name('registration.checkemail');
Route::post('/register', [AuthController::class, 'register'])->middleware("logger");
Route::post('/login', [AuthController::class, 'login'])->middleware("logger");
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware("logger");
Route::get('/forgot', [ForgotPasswordController::class, 'forgot'])->middleware("logger");
Route::post('/reset', [ForgotPasswordController::class, 'reset'])->middleware("logger");




//Route::post('/partners/{id}/sendrejectionemail',  [PartnerController::class, 'sendRejectionEmail'])->name('partner.reject');


Route::get('/states', [StatesController::class, 'index'])->name('states');
Route::get('/getcity', [CityController::class, 'getCitiesForStateByName'])->name('getCitiesForStateByName');
Route::get('/getrolist', [ROController::class, 'getROListForState'])->name('getROListForState');



/*Pipeline routes */
Route::middleware(['auth:api','\App\Http\Middleware\Logger::class'])->group( function () {
	
    /*Dashboard Routes*/
    Route::get('/getDashboardData', [DashboardController::class, 'getDashboardData'])->name('getDashboardData');

    Route::get('/profile',  [PartnerController::class, 'profile'])->name('profile');
    Route::post('/profile/edit/personalinfo', [PartnerController::class, 'updatepersonalinfo'])->name('profile.updatepersonalinfo');

   // Route::get('/partners/test',  [PartnerController::class, 'test'])->name('partners.test');
    Route::get('/pipelines', [PipelineController::class, 'index'])->name('pipeline.index');
    Route::get('/pipeline/create', [PipelineController::class, 'create'])->name('pipeline.create');
    Route::post('/pipeline/store', [PipelineController::class, 'store'])->name('pipeline.store');
    Route::post('/pipelines/{id}/update', [PipelineController::class, 'update'])->name('pipeline.update');

    Route::post('/pipelines/filter', [DashboardController::class, 'pipelinesByParams'])->name('pipeline.pipelinesByParams');

    /*GTM Fund Request*/
    Route::post('/gtmfundrequest/store', [GtmFundRequestController::class, 'store'])->name('gtmfundrequest.store');
    Route::get('/gtmfundrequests', [GtmFundRequestController::class, 'index'])->name('gtmfundrequests');
    Route::post('/gtmfundrequest/{id}/update', [GtmFundRequestController::class, 'update'])->name('gtmfundrequest.update');
    Route::post('/gtmfundrequest/{id}/approve', [GtmFundRequestController::class, 'approve'])->name('gtmfundrequest.approve');
    Route::post('/gtmfundrequest/{id}/reject', [GtmFundRequestController::class, 'reject'])->name('gtmfundrequest.reject');
    Route::get('/gtmfundrequest/{id}/delete', [GtmFundRequestController::class, 'destroy'])->name('gtmfundrequest.delete');

    Route::post('/gtmcollateralrequest/store', [GTMCollateralRequestController::class, 'store'])->name('gtmmediacampaignrequest.store');
    Route::get('/gtmcollateralrequests', [GTMCollateralRequestController::class, 'index'])->name('gtmmediacampaignrequests');
    Route::post('/gtmcollateralrequest/{id}/update', [GTMCollateralRequestController::class, 'update'])->name('gtmcollateralrequest.update');
    Route::post('/gtmcollateralrequest/{id}/approve', [GTMCollateralRequestController::class, 'approve'])->name('gtmcollateralrequest.approve');
    Route::post('/gtmcollateralrequest/{id}/reject', [GTMCollateralRequestController::class, 'reject'])->name('gtmcollateralrequest.reject');
    Route::get('/gtmcollateralrequest/{id}/delete', [GTMCollateralRequestController::class, 'destroy'])->name('gtmcollateralrequest.delete');


    Route::post('/gtmmediacampaignrequest/store', [GTMMediaCampaignController::class, 'store'])->name('gtmcollateralrequest.store');
    Route::get('/gtmmediacampaignrequests', [GTMMediaCampaignController::class, 'index'])->name('gtmcollateralrequests');
    Route::post('/gtmmediacampaignrequest/{id}/update', [GTMMediaCampaignController::class, 'update'])->name('gtmmediacampaignrequest.update');
    Route::post('/gtmmediacampaignrequest/{id}/approve', [GTMMediaCampaignController::class, 'approve'])->name('gtmmediacampaignrequest.approve');
    Route::post('/gtmmediacampaignrequest/{id}/reject', [GTMMediaCampaignController::class, 'reject'])->name('gtmmediacampaignrequest.reject');
    Route::get('/gtmmediacampaignrequest/{id}/delete', [GTMMediaCampaignController::class, 'destroy'])->name('gtmmediacampaignrequest.delete');

    Route::post('/gtmjointeventrequest/store', [GTMJointEventRequestController::class, 'store'])->name('gtmjointeventrequest.store');
    Route::get('/gtmjointeventrequests', [GTMJointEventRequestController::class, 'index'])->name('gtmjointeventrequests');
    Route::post('/gtmjointeventrequest/{id}/update', [GTMJointEventRequestController::class, 'update'])->name('gtmjointeventrequest.update');
    Route::post('/gtmjointeventrequest/{id}/approve', [GTMJointEventRequestController::class, 'approve'])->name('gtmjointeventrequest.approve');
    Route::post('/gtmjointeventrequest/{id}/reject', [GTMJointEventRequestController::class, 'reject'])->name('gtmjointeventrequest.reject');
    Route::get('/gtmjointeventrequest/{id}/delete', [GTMJointEventRequestController::class, 'destroy'])->name('gtmjointeventrequest.delete');

    Route::post('/change-password', [ChangePasswordController::class, 'change_password'])->name('changepassword');
    Route::get('/logout', [AuthController::class, 'logout']);

    

    Route::get('/blogs/active', [BlogController::class, 'indexactive'])->name('blog.indexactive');
    Route::get('/blogs/view/{title}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('/case-studies/active', [CaseStudyController::class, 'indexactive'])->name('case-studies.indexactive');
	
    Route::get('/trainings/active', [TrainingController::class, 'indexactive'])->name('trainings.indexactive');
    Route::get('/trainings/{id}', [TrainingController::class, 'show'])->name('trainings.show');

    Route::get('/events/active', [EventController::class, 'indexactive'])->name('trainings.indexactive');
    Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');

    Route::get('/videos/active', [VideoController::class, 'indexactive'])->name('videos.indexactive');

});

Route::middleware(['auth:api','\App\Http\Middleware\CheckRole::class','\App\Http\Middleware\Logger::class'])->group( function () {

    

    Route::get('/partners/{status}',  [PartnerController::class, 'partners'])->name('partners');
    Route::get('/partners/{id}/view',  [PartnerController::class, 'show'])->name('partner.show');
    Route::post('/partners/{id}/approve',  [PartnerController::class, 'approve'])->name('partner.approve');
    Route::post('/partners/{id}/reject',  [PartnerController::class, 'reject'])->name('partner.reject');
    Route::post('/partners/{id}/generatecertificate', [PartnerController::class, 'htmlPdf'])->name('parner.generatecertificate');

    Route::get('/pipelines/{id}/approve', [PipelineController::class, 'approve'])->name('pipeline.approve');
    Route::post('/pipelines/{id}/reject', [PipelineController::class, 'reject'])->name('pipeline.reject');

    Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
    Route::post('/blog/create', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{id}/delete', [BlogController::class, 'destroy'])->name('blog.delete');
    Route::get('/blog/{id}/activate', [BlogController::class, 'activate'])->name('blog.activate');
    Route::post('/blog/{id}/edit', [BlogController::class, 'update'])->name('blog.update');

    Route::post('/casestudy/create', [CaseStudyController::class, 'store'])->name('casestudy.store');
    Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('casestudy.index');
    Route::get('/casestudy/{id}/delete', [CaseStudyController::class, 'destroy'])->name('casestudy.delete');
    Route::get('/casestudy/{id}/activate', [CaseStudyController::class, 'activate'])->name('casestudy.activate');
    Route::post('/casestudy/{id}/edit', [CaseStudyController::class, 'update'])->name('casestudy.update');

    Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
    Route::post('/video/create', [VideoController::class, 'store'])->name('video.store');

    Route::get('/trainings', [TrainingController::class, 'index'])->name('trainings.index');
    Route::post('/training/create', [TrainingController::class, 'store'])->name('training.store');
    Route::get('/training/{id}/delete', [TrainingController::class, 'destroy'])->name('training.delete');
    Route::get('/training/{id}/activate', [TrainingController::class, 'activate'])->name('training.activate');
    Route::post('/training/{id}/edit', [TrainingController::class, 'update'])->name('training.update');

    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::post('/event/create', [EventController::class, 'store'])->name('event.store');
    Route::get('/event/{id}/delete', [EventController::class, 'destroy'])->name('event.delete');
    Route::get('/event/{id}/activate', [EventController::class, 'activate'])->name('event.activate');
    Route::post('/event/{id}/edit', [EventController::class, 'update'])->name('event.update');

});

//Route::post('/partners/{id}/generatecertificate', [PartnerController::class, 'htmlPdf'])->name('parner.generatecertificate');

//All these routes should go under auth. Need to add Bearer token to all the calls


Route::get('/pipeline/sbu/{sbu}/products', [PipelineController::class, 'getProductsForSBU'])->name('pipeline.getProductsForSBU');
Route::get('/pipeline/rating/{rating}', [PipelineController::class, 'getRating'])->name('pipeline.rating');


Route::get('send-mail', function () {
    $details = [
        'title' => 'Test mail',
        'body' => 'This is for testing email using smtp',
    ];
    Mail::to('debmalya@pidatacenters.com')->cc('chaitalykundu@gmail.com')->send(new MyTestMail($details));
    //dd("Email is Sent.");
    return response()->json(['status' => 'ok', 'msg' => "Email is sent"]);
});

