<?php

namespace App\Controllers;

class Assignment extends BaseController
{
    public function index(): string
    {
        return view('templates/index')
        .view('templates/footers');
        .view('templates/reviews');
    }
}
