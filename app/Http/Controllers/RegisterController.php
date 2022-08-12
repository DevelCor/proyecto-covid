<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'personal_id' => 'required|string|unique:users,personal_id',
            'address' => 'required|string',
            'state' => 'required|string',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required_with:password|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        try {
            $data = $request->all();

            if ($request->post('teenager') == 'on') {
                $data['teenager'] = 1;
            } else {
                $data['teenager'] = 0;
            }

            $data['password'] = Hash::make($data['password']);
            $data['teenager'] = $data['teenager'];
            $data['role'] = 'user';
            $user = User::create($data);

            if ($user) {
                auth()->login($user);
                return redirect()->to('/');
            }

        } catch (\Throwable $e) {
            return response($e, 500);
        }
    }
}
