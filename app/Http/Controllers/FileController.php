<?php

namespace App\Http\Controllers;

use App\Http\Requests\deleteRequest;
use App\Http\Requests\editRequest;
use App\Http\Requests\StoreRequest;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('main.users.main');
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
    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();
        $text = $validatedData['text'];
        $path = time();
        Storage::disk('local')->put($path . '.txt', $text);
        return Response()->json(['id' => $path, 'status' => 200]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('main.users.delete');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('main.users.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(editRequest $request)
    {
        $validatedData = $request->validated();
        $name = $validatedData['name'];
        $text = $validatedData['text'];
        $path = storage_path('app/' . $name . '.txt');
        if (is_file($path)) {
            file::append($path, $text);
            return Response()->json(['id' => $name, 'status' => 200]);
        }{
        return Response()->json(['id' => $name, 'status' => 404]);
    }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(deleteRequest $request)
    {
        $validatedData = $request->validated();
        $name = $validatedData['name'];
        $path = storage_path('app/' . $name . '.txt');
        if (is_file($path)) {
            file::delete($path);
            return Response()->json(['id' => $name, 'status' => 200]);
        }{
        return Response()->json(['id' => $name, 'status' => 404]);

        }
    }
}
