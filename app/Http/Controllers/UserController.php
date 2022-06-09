<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $senaraiUsers = [
        //     ['id' => 1, 'nama' => 'Ali', 'mykad' => '808080808080', 'email' => 'ali@gmail.com'],
        //     ['id' => 2, 'nama' => 'Ahmad', 'mykad' => '808080808282', 'email' => 'ahmad@gmail.com'],
        //     ['id' => 3, 'nama' => 'Siti', 'mykad' => '808080808980', 'email' => 'siti@gmail.com'],
        // ];

        $senaraiUsers = User::query()
        ->orderBy('id', 'desc')
        //->where('name', 'like', '%Bo%')
        //->select('id', 'name')
        ->paginate(15);

        // Die and dump
        //dd($senaraiUsers);

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
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email:filter'],
            'mykad' => ['required'],
            'password' => ['required', Password::min(6)]
        ]);

        //return $request->input('email');
        //return $request->email;
        //return $request->except('nama');
        //return $request->only('nama', 'email');
        // return $request->all()

        // Cara 1
        // $user = new User;
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->mykad = $request->input('mykad');
        // $user->password = bcrypt($request->input('password'));
        // $user->save();

        // Cara 2
        // $data = $request->only([
        //     'name',
        //     'email',
        //     'mykad'
        // ]);

        // $data['password'] = bcrypt($request->input('password'));
        //DB::table('users')->insert($data);
        // dd($data);
        // DB::table('users')->insert($data);

        // Cara 3
        $data = $request->all();
        User::create($data);

        return redirect()->route('users.index')->with('mesej_success', 'Rekod berjaya disimpan');
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
