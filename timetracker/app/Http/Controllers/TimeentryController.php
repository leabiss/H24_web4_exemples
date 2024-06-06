<?php

namespace App\Http\Controllers;

use App\Http\Requests\TimeentryRequest;
use App\Http\Resources\TimeentryCollection;
use App\Http\Resources\TimeentryResource;
use App\Models\Timeentry;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TimeentryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : TimeentryCollection
    {
        if (request()->has('sort_by')) {
            // TODO Validation
            $timeentries = Timeentry::orderBy(request()->get('sort_by'))->paginate(5);
        } else {
            $timeentries = Timeentry::paginate(5);
        }

        return new TimeentryCollection($timeentries);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TimeentryRequest $request): TimeentryResource
    {
        $timeentry = Timeentry::create($request->validated());

        return new TimeentryResource($timeentry);
    }

    /**
     * Display the specified resource.
     */
    public function show(Timeentry $timeentry): TimeentryResource
    {
        return new TimeentryResource($timeentry);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TimeentryRequest $request, Timeentry $timeentry): TimeentryResource
    {
        $timeentry->update($request->validated());

        return new TimeentryResource($timeentry);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timeentry $timeentry): TimeentryResource
    {
        $timeentry->delete();
        return new TimeentryResource($timeentry);
    }
}
