<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdate;
use Illuminate\Http\Request;
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
        $data = [
            'title' => 'sportline | users',
            'breadCrumb' => 'Users',
            'users' => User::where('roles', 'USER')->simplePaginate(5)

        ];
        return view('pages.admin.user.index', $data);
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
        //
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
        $data = [
            'user' => User::find($id),
            'title' => 'sportline | edit'
        ];

        return view('pages.admin.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdate $request, $id)
    {
        $validated = $request->validated();
        if (User::where('id', $id)
            ->update([
                'name' => $validated['name']
            ])
        ) {
            $request->session()->flash('status', 'sukses update user!');
            return redirect()->to('/admin/users');
        } else {
            $request->session()->flash('status', 'gagal update user!');
            return redirect()->to('/admin/users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (User::find($id)
            ->delete()
        ) {
            session()->flash('status', 'sukses hapus user!');
            return redirect()->to('/admin/users');
        } else {
            session()->flash('status', 'gagal hapus user!');
            return redirect()->to('/admin/users');
        }
    }
}
