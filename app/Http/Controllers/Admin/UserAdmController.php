<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserAdmFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class UserAdmController extends Controller
{
    public function index()
    {
        return view('admin.profile');
    }

    public function update(UserAdmFormRequest $request)
    {
        $data = $request->all();

        if ($data['password'] != null)
            $data['password'] = Hash::make($data['password']);
        else
            unset($data['password']);

        $update = auth()->user()->update($data);

        if ($update)
            return redirect()
                ->route('admin.profile')
                ->with('success', 'Perfil atualizado com sucesso.');
        return redirect()
            ->route('admin.profile')
            ->with('error', 'Falha ao atualizar perfil.');
    }

}
