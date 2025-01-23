<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class WebAppController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Index');
    }

    public function register(): Response
    {
        return Inertia::render('UserRegistration');
    }

    public function profile(): Response
    {
        return Inertia::render('Profile');
    }

    public function championships(): Response
    {
        return Inertia::render('Championships');
    }
}
