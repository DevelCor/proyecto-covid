<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getUsers(Request $request)
    {
        $email = $request->all()['email'];
        $user = User::where('email', '=', $email)->get();
        $users = User::where('role','!=','admin')->get();


        if (isset($user[0])) {
            $illness = Illness::where('user_id', '=', $user[0]->id)->get();
            foreach ($illness as $key => $item) {
                if ($item->name === 'viruela') {
                    $illness[$key]->name = 'Viruela del mono';
                }
            }
            return view('admin.home', ['users' => $user, 'illness' => $illness, 'users_form' => $users]);
        }

        return redirect('/')->withErrors('Usuario no registrado');

    }
}
