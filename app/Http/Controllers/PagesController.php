<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Type\VoidType;

class PagesController extends Controller
{
    public function index(){
        return view('Vote.index');
    }
    public function about(){
        return view('Vote.About');
    }
    public function services(){
        return view('Vote.Services');
    }
    public function createpoll(){
        return view('Vote.CreatePoll');
    }
    public function submitpoll(){
        return view('Vote.SubmitPoll');
    }
}
