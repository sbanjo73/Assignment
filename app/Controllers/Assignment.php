<?php

namespace App\Controllers;

class Assignment extends BaseController
{
    public function index(): string
    {
        return view('pages/index') . view('pages/reviews');
    }

    public function reviews(): string
    {
        return view('templates/header') . view('templates/footer');
    }
}
