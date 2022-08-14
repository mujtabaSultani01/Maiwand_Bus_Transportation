<?php

Route::resource('indexw','hemowebcontroller');
Route::resource('announcement','AnnouncementWebController');
Route::resource('gallery','gallerywebcontroller');
Route::resource('about','aboutuswebcontroller');
Route::resource('homeform','homecontroller');
Route::resource('galleryform','gallery');
Route::resource('announcementform','announcementController');

?>