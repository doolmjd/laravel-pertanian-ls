<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($data, Request $request)
    {
        $request->validate([
            'year' => 'numeric|min:0',
            'population' => 'numeric|min:0'
        ]);

        $entry = new Entry();
        $entry->year = $request->year;
        $entry->data_id = $data;
        $entry->population = $request->population;
        $entry->created_at = now();

        if ($entry->save()) {
            return redirect()->back();
        }
        return error('terjadi kesalahan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entry $entry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entry $entry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entry $entry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entry $entry)
    {
        //
    }
}
