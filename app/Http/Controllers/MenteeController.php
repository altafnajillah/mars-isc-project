<?php

namespace App\Http\Controllers;

use App\Models\Mentee;
use App\Models\Mentor;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MenteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mentees = Mentee::with('mentor')->get();
        return view('mentee.mentee', compact('mentees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mentors = Mentor::all();
        return view('mentee.create', compact('mentors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'nim' => 'required|string|max:8',
                'angkatan' => 'required|in:2022,2023,2024',
                'mentor_id' => 'required|exists:mentors,id',
            ]);
//            $score = Score::create([
//                'commit' => 0,
//                'mentor' => 0,
//                'evaluation' => 0,
//                'addition' => 0,
//                'motm' => 0,
//            ]);

            $score = new Score();
            $score->save();

//            Mentee::create([
//                'name' => $request->name,
//                'nim' => $request->nim,
//                'angkatan' => $request->angkatan,
//                'mentor_id' => $request->mentor_id,
//                'score' => 0,
//                'scores_id' => $score->id,
//            ]);

            $mentee = new Mentee();
            $mentee->name = $request->name;
            $mentee->nim = $request->nim;
            $mentee->angkatan = $request->angkatan;
            $mentee->mentor_id = $request->mentor_id;
            $mentee->score = 0;
            $mentee->scores_id = $score->id;

            $mentee->save();

            return redirect('/mentee')->with('success', 'Mentee berhasil ditambahkan');
        } catch (\Exception $e) {
            Log::error('Error creating mentee: ' . $e->getMessage());
            return redirect('/mentee/create')->with('error', 'Mentee gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mentee $mentee)
    {
        $mentee = Mentee::with('scores')->find($mentee->scores_id);
        return view('mentee.detail', ['mentee' => $mentee]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mentee $mentee)
    {
        $mentors = Mentor::all();
        $mentee = Mentee::with('scores')->find($mentee->scores_id);
        return $mentee;
        return view('mentee.update', compact('mentee', 'mentors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:8',
            'active' => 'required|in:0,1',
            'angkatan' => 'required|in:2022,2023,2024',
            'mentor_id' => 'required|exists:mentors,id',
        ]);

        $mentee = Mentee::find($id);

        $mentee->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'active' => $request->active,
            'angkatan' => $request->angkatan,
            'mentor_id' => $request->mentor_id,
        ]);

        return redirect('/mentee')->with('success', 'Mentee berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mentee $mentee)
    {
        $mentee->delete();
        return redirect('/mentee')->with('success', 'Mentee berhasil dihapus');
    }
}
