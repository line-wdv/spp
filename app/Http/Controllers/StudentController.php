<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class StudentController extends Controller
{
    public function index(): Response
    {
        return response('Ini halaman Dasbor Mahasiswa', 200)
            ->header('Content-Type', 'text/plain');
    }
}
