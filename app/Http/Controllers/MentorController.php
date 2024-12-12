<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mentors = Mentor::withCount('mentees')->get();
        return view('mentor.mentor', compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mentor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Mentor::create([
            'name' => $request->name,
            'score' => 0,
        ]);

        return redirect('/mentor')->with('success', 'Mentor Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mentor $mentor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mentor $mentor)
    {
        return view('mentor.update', compact('mentor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mentor $mentor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $mentor->name = $request->name;
        $mentor->update();
        return redirect('/mentor')->with('success', 'Mentor Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mentor $mentor)
    {
        $mentor->delete();
        return redirect('/mentor')->with('success', 'Mentor Deleted');
    }
}
