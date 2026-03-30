<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', function () {
    return view('student', [
        'name' => 'Jessa Mae R. Forrosuelo', 
        'course' => 'BSIT',
        'subjects' => ['Programming', 'Database', 'Networking', 'Web Development', 'Advanced Calculus'],
        'isEnrolled' => true 
    ]);
});

Route::get('/grades', function () {
    return view('grades', [
        'name' => 'Jessa Mae R. Forrosuelo',
        'grades' => [
            ['subject' => 'Programming', 'grade' => '3.0'],
            ['subject' => 'Database', 'grade' => '3.5'],
            ['subject' => 'Networking', 'grade' => '4.0'],
        ]
    ]);
});