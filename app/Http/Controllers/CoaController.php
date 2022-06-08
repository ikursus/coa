<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $senaraiCoa = [
            ['id' => 1, 'kod' => '110011', 'keterangan' => 'Asset 1', 'amaun' => 80.00],
            ['id' => 2, 'kod' => '110022', 'keterangan' => 'Asset 2', 'amaun' => 50.00],
            ['id' => 3, 'kod' => '110033', 'keterangan' => 'Asset 3', 'amaun' => 110.00],
            ['id' => 4, 'kod' => '110044', 'keterangan' => 'Asset 4', 'amaun' => 40.00],
            ['id' => 5, 'kod' => '110055', 'keterangan' => 'Asset 5', 'amaun' => 150.00]
        ];

        return view('theme_coa.index', compact('senaraiCoa'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme_coa.template-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'Berjaya dihantar!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //['id' => $id] = compact('id')
        // return view('theme_coa/template-edit')->with('id', $id)->with('pageTitle', $pageTitle);
        // return view('theme_coa/template-edit', ['id' => $id, 'pageTitle' => $pageTitle]);
        return view('theme_coa/template-edit', compact('id', 'pageTitle'));
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
        return 'Berjaya dikemaskini!';
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
