<?php

namespace App\Http\Controllers;

use App\Models\Maklumat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Cara 1 Nak dapatkan Data Menerusi Query Builder
        //$senaraiCoa = DB::table('maklumat')->orderBy('id', 'desc')->paginate(15);
        // $senaraiCoa = DB::table('maklumat')
        // ->join('users', 'maklumat.user_id', '=', 'users.id')
        // ->select('maklumat.*', 'users.id as userId', 'users.name', 'users.email')
        // ->orderBy('id', 'desc')
        // ->paginate(15);

        // Cara 2 Relation menerusi Model
        $senaraiCoa = Maklumat::with('user')->orderBy('id', 'desc')->paginate(15);

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
