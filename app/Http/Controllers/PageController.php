<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method 1: Display Home Page
    public function index()
    {
        return view('home');
    }

    // Method 2: Display About Page with dynamic student data
    public function about()
    {
        $studentName = "Juan Dela Cruz";
        $course = "Associate in Computer Technology";
        return view('about', compact('studentName', 'course'));
    }
}