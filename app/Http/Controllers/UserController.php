<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senaraiUsers = [
            ['id' => 1, 'nama' => 'Ali', 'mykad' => '808080808080', 'email' => 'ali@gmail.com'],
            ['id' => 2, 'nama' => 'Ahmad', 'mykad' => '808080808282', 'email' => 'ahmad@gmail.com'],
            ['id' => 3, 'nama' => 'Siti', 'mykad' => '808080808980', 'email' => 'siti@gmail.com'],
        ];

        return view('users.index', compact('senaraiUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'min:3'],
            'email' => ['required', 'email:filter']
        ]);

        //return $request->input('email');
        //return $request->email;
        //return $request->except('nama');
        //return $request->only('nama', 'email');
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageTitle = 'Kemaskini';

        return view('users.edit', compact('id', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
