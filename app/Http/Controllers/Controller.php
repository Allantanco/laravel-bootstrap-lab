<<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home Page
    public function home()
    {
        return view('welcome');
    }

    // About Page
    public function about()
    {
        $studentName = "Ma. Cyrene A. Javier";
        $course = "Associate in Computer Technology";
        return view('about', compact('studentName', 'course'));
    }