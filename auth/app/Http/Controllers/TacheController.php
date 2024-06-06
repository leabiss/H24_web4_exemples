<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTacheRequest;
use App\Http\Requests\TacheRequest;
use App\Models\Tache;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TacheController extends Controller
{
    public function __construct() {
        $this->authorizeResource(Tache::class, 'tache');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $taches = Tache::where('user_id'. Auth::id())->get();
        return view('taches.index', ['taches' => $taches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('taches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TacheRequest $request): RedirectResponse
    {
        $attributes = $request->validated();

        Auth::user()->taches()->create($attributes);

        return redirect()->route('taches.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tache $tache): View
    {
        return view('taches.show', ['tache' => $tache]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tache $tache): View
    {
        return view('taches.edit', ['tache' => $tache]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TacheRequest $request, Tache $tache): RedirectResponse
    {
        $attributes = $request->validated();
        $tache->update($attributes);
        return redirect()->route('taches.edit', $tache->id)->with('status', 'tache-updated');
    }
}
