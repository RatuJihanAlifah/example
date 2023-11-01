<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Film;
use App\Models\Kritik;

class KritikController extends Controller
{
    public function create(Film $film, User $user)
    {
        $films = Film::select('id','judul')->get();
        return view('kritik.create', compact('films','user'));
    }

    public function store(Film $film, User $user, Kritik $kritik, Request $request)
    {
        $request->validate([
            'content'     => 'required',
            'point'       => 'required',
        ]);

        $kritik::create([
            'user_id'     => $request['user_id'],
            'film_id'  => $request['film_id'],
            'judul'     => $request['judul'],
            'content' => $request['content'],
            'point' => $request['point'],
        ]);
        return redirect()->route('film.show', $film->id );
    }
}
