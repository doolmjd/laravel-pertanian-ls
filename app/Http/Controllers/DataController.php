<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Projection;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Data::all();

        return view('data.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'max:1000'
        ]);

        $data = new Data;
        $data->name = $request->name;
        $data->description = $request->description;
        // dd($data);
        if ($data->save()) {
            return redirect()->route('datas.show', ['data' => $data->id]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Data::where('id', $id)->with(['entries', 'projections'])->first();

        return view('data.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // Geometri
    // public function project(string $data)
    // {
    //     $data = Data::where('id', $data)->with(['entries'])->first();
    //     $delta = [];

    //     for ($i = 0; $i < $data->entries->count() - 1; $i++) {
    //         $delta[] = ($data->entries[$i + 1]->population - $data->entries[$i]->population) / $data->entries[$i]->population;
    //     }

    //     $average = array_sum($delta) / count($delta);

    //     $projection = [];
    //     $year = $data->entries->max('year');
    //     $population = $data->entries->max('population');
    //     $now = now();


    //     for ($j = 1; $j <= 30; $j++) {
    //         $year += 1;
    //         $projection[] = [
    //             'data_id' => $data->id,
    //             'year' => $year,
    //             'population' => round($population * pow((1 + $average),$j)),
    //             'created_at' => $now,
    //         ];
    //     }

    //     Projection::insert($projection);

    //     return redirect()->back();
    // }

    //LS
    // public function project(string $data)
    // {
    //     $data = Data::where('id', $data)->with(['entries'])->first();
    //     $delta = [
    //         'x' => 0.0,
    //         'y' => 0.0,
    //         'xy' => 0.0,
    //         'x2' => 0.0,
    //     ];
    //     $count = $data->entries->count();
    //     for ($i = 0; $i < $count; $i++) {
    //         $delta['x'] += $i + 1;
    //         $delta['y'] += $data->entries[$i]->population;
    //         $delta['xy'] += $data->entries[$i]->population * ($i + 1);
    //         $delta['x2'] += pow(($i + 1), 2);
    //         // $delta[] = ($data->entries[$i + 1]->population - $data->entries[$i]->population) / $data->entries[$i]->population;
    //     }
    //     $population = (($delta['y'] * $delta['x2']) - ($delta['x'] * $delta['xy'])) / (($count * $delta['x2']) - (pow($delta['x'], 2)));
    //     $average = (($count * $delta['xy']) - ($delta['x'] * $delta['y'])) / (($count * $delta['x2']) - (pow($delta['x'], 2)));


    //     $projection = [];
    //     $year = $data->entries->max('year');
    //     $now = now();


    //     for ($j = 1; $j <= 30; $j++) {
    //         $year += 1;
    //         $projection[] = [
    //             'data_id' => $data->id,
    //             'year' => $year,
    //             'population' => round($population + ($average * $j)),
    //             'created_at' => $now,
    //         ];
    //     }

    //     dd($projection);

    //     Projection::insert($projection);

    //     return redirect()->back();
    // }

    // Aritmatik
    public function project(string $data)
    {
        $data = Data::where('id', $data)->with(['entries'])->first();
        $delta = [];

        for ($i = 0; $i < $data->entries->count() - 1; $i++) {
            $delta[] = $data->entries[$i + 1]->population - $data->entries[$i]->population;
        }

        $average = array_sum($delta) / count($delta);

        $projection = [];
        $year = $data->entries->max('year');
        $population = $data->entries->max('population');
        $now = now();

        for ($j = 0; $j < 30; $j++) {
            $year += 1;
            $projection[] = [
                'data_id' => $data->id,
                'year' => $year,
                'population' => round($population + (($j + 1) * $average)),
                'created_at' => $now,
            ];
        }
        Projection::where('data_id', $data->id)->delete();

        Projection::insert($projection);

        return redirect()->back();
    }

}
