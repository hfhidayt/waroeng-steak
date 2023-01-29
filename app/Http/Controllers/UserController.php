<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.akun.index', [
            'title' => 'Akun',
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->session()->put('create', 'true');
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::Create($validatedData);

        $request->session()->forget('create', 'true');

        return redirect('/dashboard/akun')->with('success', 'Berhasil membuat akun baru!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $akun)
    {
        $request->session()->put('editId', $akun->id);
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required'
        ]);

        if($validatedData['password'] === $akun->password) {
            User::Where('id', $akun->id)->update(['username' => $validatedData['username']]);

            $request->session()->forget('editId');

            return redirect('/dashboard/akun')->with('success', 'Berhasil memperbarui data akun!');
        } else {
            $validatedData['password'] = Hash::make($validatedData['password']);

            User::Where('id', $akun->id)->update($validatedData);

            $request->session()->forget('editId');

            return redirect('/dashboard/akun')->with('success', 'Berhasil memperbarui data akun!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $akun)
    {
        User::destroy($akun->id);

        return redirect('/dashboard/akun')->with('success', 'Akun berhasil dihapus');
    }
}
