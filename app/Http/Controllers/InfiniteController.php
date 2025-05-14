<?php

namespace App\Http\Controllers;

use App\Models\Infinite;
use App\Models\Dojo;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
;

class InfiniteController extends Controller
{

 public function index(Request $request)
{
    if ($request->ajax()) {
        $data = Infinite::with('dojo')->select('infinites.*');

        return DataTables::of($data)
            ->addColumn('dojo_name', fn($row) => $row->dojo->name ?? 'N/A')
            ->addColumn('action', function($row) {
    return '<a href="'.route('Infinite.show', $row->id).'">View</a>';
})


            ->rawColumns(['action']) // ✨ Important to allow HTML output
            ->make(true);
    }
     $dojos = Dojo::all(); // 👈 Needed for the modal dropdown
    return view('Infinite.index', compact('dojos'));
}



    public function show(Infinite $Infinite){
        //route -->/Infinite/{id}
        $Infinite->load('dojo');

    return view('Infinite.show', ["Infinite" => $Infinite]);
    }

    public function create(){
        //route -->/Infinite/create
        $dojos = Dojo::all();

       return view('Infinite.create', ["dojos" => $dojos]);
    }

    public function store(Request $request){
        //route -->/Infinite/ (POST)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        Infinite::create($validated);

        return redirect()->route('Infinite.index')->with('success', 'Infinite Network created successfully.');

    }
    public function destroy(Infinite $Infinite){
        //route -->/Infinite/{id} (DELETE)

        $Infinite->delete();

        return redirect()->route('Infinite.index')->with('success', 'Infinite Network deleted successfully.');
    }




}
//edit() and update() for edit view and update request
//we wont be using these routes

