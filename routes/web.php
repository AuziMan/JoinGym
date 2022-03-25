<?php

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a gym which
| contains the "web" middleware gym. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/SecurityReroute', function(){
    return view('SecurityReroute');
});
    
Route::get('/suspendedUser', function(){
    return view('suspendedUser');
});

Route::get('/customer', function(){
    echo "Hello customer";
})->middleware('customer');

Route::get('/suspended', function(){
    echo "Hello suspended user";
})->middleware('suspended');

Route::get('blank', function(){
    return View('/userPages/blankEditUser');
});

//===================Admin Routes======================

Route::get('/admin', 'AdminController@index');

Route::post('/editView', 'AdminController@editView');

Route::post('/editUser', 'AdminController@editUser');

Route::post('/suspend', 'AdminController@suspend');

Route::post('/delete', 'AdminController@delete');

Route::post('viewUser', 'AdminController@details');

Route::get('/moreinfo', function()
{
    return view('/userPages/moreinfo');
});

Route::post('/addNewInfo', 'UserController@addNewInfo');


//=================Job Listing Routes=================

Route::get('/jobAdmin', 'AdminController@jobAdmin');

Route::get('/addJob', function(){
    if(Auth::user()->role=='admin')
    {
        return view('/adminPages/addJobListing');
    } 
    else 
    {
        return view('securityReroute');
    }
});

Route::post('/addJobListing', 'AdminController@addJob');

Route::post('/editJobView', 'AdminController@editJob');

Route::post('/editJobData', 'AdminController@editJobData');

Route::post('/deleteJob', 'AdminController@deleteJob');

Route::get('/searchJob', function()
{
	return view('/userPages/searchForJob');
});

Route::post('/searchJobFunc', 'UserController@searchJob');

Route::post('/viewOneJob', 'UserController@viewOneJob');

Route::post('/applyJob', 'UserController@apply');

//================User Gym Profile Routes===============
Route::get('/userGymProfile', function()
{
    return view('/userPages/userGymProfile');
});

Route::get('/userGymProfile', 'UserController@displayUserGymProfile');

    
Route::post('/addUserGymProfile', 'UserController@addUserGymProfile');

// Route::get('/editUserGymProfile', function()
// {
//     return view('/userPages/editGymProfile');
// });

Route::post('/editUserGymProfile', 'UserController@editGymProfile');

Route::post('/doEditUserGymProfile', 'UserController@editUserGymProfileData');

Route::get('/displayUserGymProfile', 'UserController@testdisplayUserGymProfile');



//=======================User Profile========================

Route::get('/userProfile', function()
{
    return view('userPages/userProfile');
});

//=======================Gym Display Pages========================
Route::get('/gymPage1', function()
{
    return view('/gymPages/gym1DisplayPage');
});

Route::get('/gymPage2', function()
{
    return view('/gymPages/gym2DisplayPage');
});

Route::get('/gymPage3', function()
{
    return view('/gymPages/gym3DisplayPage');
});



//=======================Gym Routes========================
Route::get('/admingym', 'AdminController@admingym');

Route::get('/addgymView', function(){
    return view('/adminPages/addgym');
});

Route::post('/addgym', 'AdminController@addgym');

Route::post('/viewgym', 'gymController@viewgymMembers');

Route::post('/editgymView','AdminController@editgymView');

Route::post('/editgym', 'AdminController@editgym');

Route::post('/deletegym', 'AdminController@deletegym');

Route::get('/gyms', 'gymController@usergymView');

Route::post('/joingym', 'gymController@joingym');

Route::post('/leavegym', 'gymController@leavegym');

//=======================User Portfolio========================

