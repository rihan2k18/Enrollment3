<?php


// Login Page Routes .....
Route::get('/', function () {
    return view('Student_Login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});



//Logout Page Routes
Route::get('/logout','AdminController@logout');



//admin login route....
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');



//AddStudent Route
Route::get('/addstudent','Addstudent@addstudent');
Route::post('/save_student','Addstudent@savestudent');



//see all students route....
Route::get('/allstudent','AllStudentsController@allstudent');


//tutionfees route.....
Route::get('/tutionfee','TutionController@tution');


//departmentwise route...
Route::get('/cse','CSEController@cse');
Route::get('/bba','BBAController@bba');
Route::get('/ece','ECEController@ece');
Route::get('/eee','EEEController@eee');
Route::get('/mba','MBAController@mba');




//teacher route option.....
Route::get('/allteacher','TeacherController@allteacher');



//View Profile r Settings er Route...
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/setting','AdminController@setting');
