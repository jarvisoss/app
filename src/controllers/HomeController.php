<?php

namespace App\Controllers;

use Jarvis\Framework\Http\HttpController;

class HomeController extends HttpController
{
    public function index(): string
    {
        return '<h1>Welcome to Jarvis Framework</h1>';
    }
}
