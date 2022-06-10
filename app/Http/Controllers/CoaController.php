<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Maklumat;
use Barryvdh\DomPDF\Facade\Pdf;
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
        // Dapatkan data senarai users
        $senaraiUsers = User::all();

        return view('theme_coa.template-tambah', compact('senaraiUsers'));
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
            'user_id' => ['required', 'integer'],
            'kod' => ['required', 'integer'],
            'keterangan' => ['required'],
            'amaun' => ['required', 'numeric']
        ]);

        $data = $request->all();

        Maklumat::create($data);

        return redirect()->route('coa.index')->with('mesej_success', 'Rekod berjaya ditambah!');
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

    public function print()
    {
        $senaraiCoa = Maklumat::with('user')->get();

        $pdf = PDF::loadView('reports.maklumat', compact('senaraiCoa'));
        return $pdf->download(now() .'.pdf');
    }
}
