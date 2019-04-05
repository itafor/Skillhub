<?php

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

//     return view('menialJobSeekers.frontpage');
// });
Route::get('main', function () {
    return view('master.main');
});

Route::get('postjob', function () {
    return view('Admin.postJobs');
});
Route::get('jobseekerinfo/{id}', 'UserController@jobseekerinfo')->name('jobseekerinfo');

Route::get('phpinfo', function () {
    return view('menialJobSeekers.phpinfo');
});
Route::get('/', 'UserController@index');

Route::post('/searchskill', 'UserController@searchskill')->name('searchskill');

Route::post('/searchlocation', 'UserController@searchlocation')->name('searchlocation');

Route::middleware(['auth'])->group(function(){

Route::get('add-skill', 'UserController@getSkill')->name('add-skill');

Route::get('profilePicture', function () {
    return view('menialJobSeekers.profilePicture');
});
Route::get('/download/{id}','UserController@downloadFile')->name('downloadpix');
Route::get('imageProof', function () {
    return view('menialJobSeekers.imageProof');
});

Route::get('websiteProof', function () {
    return view('menialJobSeekers.websiteProof');
});
Route::get('admindashboard','UserController@admindashboard')->name('admindashboard');
Route::get('all-employers','EmployerController@allEmployers')->name('all-employers');

Route::get('all-applicants','UserController@allApplicants')->name('all-applicants');
	
Route::get('skill', 'UserController@skill')->name('skill');
Route::get('deleteApplicant/{id}', 'UserController@deleteApplicant')->name('deleteApplicant');


Route::get('editProfile', 'UserController@editProfile')->name('editProfile');
Route::POST('updateProfile', 'UserController@updateProfile')->name('updateProfile');
Route::POST('addskill', 'UserController@addSkill')->name('addskill');
Route::get('editskill/{id}', 'UserController@editSkill')->name('editskill');
Route::post('updateskill/{id}', 'UserController@updateSkill')->name('updateskill');
Route::get('deleteSkill/{id}', 'UserController@deleteSkill')->name('deleteSkill');


Route::post('profilePicture', 'UserController@profilePicture')->name('profilePicture');
Route::post('updateProfilePicture', 'UserController@updateProfilePicture')->name('updateProfilePicture');

Route::post('add-CV', 'UserController@addCV')->name('addCV');
Route::get('getCV', 'UserController@getMyCV')->name('getCV');

Route::get('viewSkills', 'UserController@viewSkills')->name('viewSkills');

Route::get('viewImageProof', 'UserController@viewImageProof')->name('viewImageProof');
Route::get('deleteImageProof/{id}', 'UserController@destroyImageProof')->name('deleteImageProof');

Route::get('viewWebsiteProof', 'UserController@viewWebsiteProof')->name('viewWebsiteProof');
Route::get('deleteImageProof/{id}', 'UserController@destroyImageProof')->name('deleteImageProof');

Route::get('deleteWebsiteProof/{id}', 'UserController@destroyWebsiteProof')->name('deleteWebsiteProof');

Route::post('storeImageProof', 'UserController@storeImageProof')->name('storeImageProof');
Route::post('storeWebsiteProof', 'UserController@storeWebsiteProof')->name('storeWebsiteProof');

Route::get('videoProof', 'UserController@videoProof')->name('videoProof');
Route::POST('storeVideoProof', 'UserController@storeVideoProof')->name('storeVideoProof');
Route::get('viewVideoProof', 'UserController@viewVideoProof')->name('viewVideoProof');
Route::get('applyToThisJob/{id}', 'UserController@applyToThisJob')->name('applyToThisJob');

Route::get('request-Job-seekers', 'EmployerController@requestJobseekers')->name('requestJobseekers');
Route::POST('storerequestedJobseekers', 'EmployerController@storeRequestedJobseekers')->name('storeRequestedJobseekers');
//get all applicants requested by by employer
Route::get('empAppReq', 'EmployerController@empAppReq')->name('empAppReq');
//show a particular applicant request
Route::get('viewSpecificEmpReq/{id}', 'EmployerController@viewSpecificEmpReq');
Route::get('editSpecificEmpReq/{id}', 'EmployerController@editSpecificEmpReq');
Route::post('updateRequestedJobseekers/{id}', 'EmployerController@updateRequestedJobseekers')->name('updateRequestedJobseekers');

Route::get('deleteSpecificEmpReq/{id}', 'EmployerController@destroyEmpApplicantReq');
Route::get('applicationsToThisJob/{id}', 'EmployerController@applicationsToThisJob');

Route::get('viewEmployer/{id}', 'EmployerController@viewEmployer')->name('viewEmployer');

//get the requested applicants by employers from the frontpage
Route::get('emprequest','AdminController@empRequest')->name('emprequest');
Route::get('adminViewEmpAppReq', 'AdminController@adminViewEmpAppReq')->name('adminViewEmpAppReq');

Route::get('approveSpecificEmpReq/{id}', 'AdminController@approveSpecificEmpReq')->name('approveSpecificEmpReq');

Route::get('disapproveSpecificEmpReq/{id}','AdminController@disapproveSpecificEmpReq')->name('disapproveSpecificEmpReq');

Route::get('shareJobToApplicants/{id}','AdminController@shareJobToApplicants')->name('shareJobToApplicants');

Route::get('sharedjobs','AdminController@getSharedjobs')->name('sharedjobs');

Route::get('deleteSharedjob/{id}','AdminController@deleteSharedjob')->name('deleteSharedjob');
Route::post('postJobs','AdminController@postJobs')->name('postJobs');

});

Route::get('page',function() {
	return view('Admin.page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('register','Auth\RegisterController@roles')->name('register');
Route::POST('dynamicdependent', 'UserController@fetch')->name('dynamicdependent.fetch');

Route::get('checkvideoproof/{id}', 'UserController@checkVideoProofs')->name('checkvideoproof');
Route::get('checkimageproof/{id}', 'UserController@checkImageProofs')->name('checkimageproof');
Route::get('checkonlineproof/{id}', 'UserController@checkOnlineProofs')->name('checkonlineproof');
Route::get('viewApplicant/{id}', 'UserController@viewApplicants')->name('viewApplicant');


// Email related routes
Route::get('requestUser/{id}', 'UserController@selectUserToRequest')->name('selectUserToRequest');
Route::post('saveRequest','MailController@saveRequest')->name('saveRequest');

Route::get('sendbasicemail','MailController@basic_email');
Route::get('gethtmlemail','MailController@get_email');

Route::get('applicanttohire/{id}','AdminController@applicantRequested')->name('applicanttohire');

Route::get('deleteReq/{id}','AdminController@deleteReq')->name('deleteReq');
