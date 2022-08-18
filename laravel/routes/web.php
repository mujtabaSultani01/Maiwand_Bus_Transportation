<?php

Route::resource('indexw','hemowebcontroller');
Route::resource('announcement','AnnouncementWebController');
Route::resource('gallery','gallerywebcontroller');
Route::resource('about','aboutuswebcontroller');
Route::resource('homeform','homecontroller');
Route::resource('galleryform','gallery');
Route::resource('announcementform','announcementController');

Route::resource('abouthistory','historycontroller');
Route::resource('message','messagecontroller');
Route::resource('aboutusform','aboutuscontroller');
Route::resource('/driver','drivercontroller');
Route::resource('/staff','staffcontroller');

Route::resource('/passenger','passengercontroller');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact_us', function () {
    return view('admin.contact_us');
});
Route::get('/drivertable', function () {
    return view('admin.drivertable');
});
Route::get('/passengertable', function () {
    return view('admin.passengertable');
});


?>