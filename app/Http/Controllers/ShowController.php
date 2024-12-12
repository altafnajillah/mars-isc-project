<?php

namespace App\Http\Controllers;

use App\Models\Mentee;
use App\Models\Mentor;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index()
    {
        $total_mentee = Mentee::count();
        $mentee_aktif = Mentee::where('active', true)->count();

        $team = Mentor::count();

        $mentees = Mentee::with('mentor')->orderBy('score', 'desc')->get();

        return view('index', compact('total_mentee', 'mentee_aktif', 'team', 'mentees'));
    }
}
