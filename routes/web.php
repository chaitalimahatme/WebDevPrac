<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('student', 'StudentController@getform')->name('student.form');
Route::post('student/submit', 'StudentController@submitform')->name('student.form.submit');
Route::get('student/table', 'StudentController@gettable')->name('student.table');

Route::get('student/edit/form/{id}', 'StudentController@editform')->name('student.form.edit');
Route::put('student/update/form/{id}', 'StudentController@updateform')->name('student.form.update');
Route::get('student/delete/form/{id}', 'StudentController@deleteform')->name('student.form.delete');
Route::get('export', 'StudentController@export')->name('export');
