<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class siswaController extends Controller
{
    public function index(): \View
    {
        //get Data db
        $siswas = DB::table('siswa')
           ->join('user',)
    }
}













class siswaController extends Controller
{
    //
}
