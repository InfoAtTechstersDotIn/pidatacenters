<?php

use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ROController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PipelineController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Auth\ChangePasswordController;

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
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/forgot', [ForgotPasswordController::class, 'forgot']);
Route::post('/reset', [ForgotPasswordController::class, 'reset']);




//Route::post('/partners/{id}/sendrejectionemail',  [PartnerController::class, 'sendRejectionEmail'])->name('partner.reject');


Route::get('/states', [StatesController::class, 'index'])->name('states');
Route::get('/getcity', [CityController::class, 'getCitiesForStateByName'])->name('getCitiesForStateByName');
Route::get('/getrolist', [ROController::class, 'getROListForState'])->name('getROListForState');



/*Pipeline routes */
Route::middleware(['auth:api'])->group( function () {
   // Route::get('/partners/test',  [PartnerController::class, 'test'])->name('partners.test');
    Route::get('/pipelines', [PipelineController::class, 'index'])->name('pipeline.index');
    Route::get('/pipeline/create', [PipelineController::class, 'create'])->name('pipeline.create');
    Route::post('/pipeline/store', [PipelineController::class, 'store'])->name('pipeline.store');
    Route::post('/pipelines/{id}/update', [PipelineController::class, 'update'])->name('pipeline.update');

    Route::post('/change-password', [ChangePasswordController::class, 'change_password'])->name('changepassword');
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::middleware(['auth:api','\App\Http\Middleware\CheckRole::class'])->group( function () {
    Route::get('/partners/{status}',  [PartnerController::class, 'partners'])->name('partners');
    Route::post('/partners/{id}/approve',  [PartnerController::class, 'approve'])->name('partner.approve');
    Route::post('/partners/{id}/reject',  [PartnerController::class, 'reject'])->name('partner.reject');
    Route::post('/partners/{id}/generatecertificate', [PartnerController::class, 'htmlPdf'])->name('parner.generatecertificate');

    Route::get('/pipelines/{id}/approve', [PipelineController::class, 'approve'])->name('pipeline.approve');
    Route::post('/pipelines/{id}/reject', [PipelineController::class, 'reject'])->name('pipeline.reject');

    /*Dashboard Routes*/
    Route::get('/getDashboardData', [DashboardController::class, 'getDashboardData'])->name('getDashboardData');

});

//Route::post('/partners/{id}/generatecertificate', [PartnerController::class, 'htmlPdf'])->name('parner.generatecertificate');

//All these routes should go under auth. Need to add Bearer token to all the calls


Route::get('/pipeline/sbu/{sbu}/products', [PipelineController::class, 'getProductsForSBU'])->name('pipeline.getProductsForSBU');
Route::get('/pipeline/rating/{rating}', [PipelineController::class, 'getRating'])->name('pipeline.rating');


Route::get('send-mail', function () {
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
    //Mail::to('')->send(new MyTestMail($details));
    //dd("Email is Sent.");
    return response()->json(['status' => 'ok', 'msg' => "Email is sent"]);
});