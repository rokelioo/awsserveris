<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function getUsers()
    {
        return DB::select('select * from users left join user_role on users.id =user_role.user_id right join roles on user_role.role_id = roles.id;');
    }

    function getUserList()
    {
        if (Auth::user()->isAdministrator())
            return view('userList', ['users' => $this->getUsers()]);
        else return back()->with('error', 'You don\'t have permission to access this page');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
            /*|alphaNum|min:3*/
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            $user_email = $user_data['email'];
            $date = date("Y-m-d h:i:s");
            DB::update("UPDATE users SET last_login = '$date' where email='$user_email'");
            return redirect('/elder-list');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function checkRegistration(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6',
            'name' => 'required',
            'surname' => 'required',
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'last_login' => date("Y-m-d h:i:s"),
        );

        $user = User::create($user_data);
        var_dump($user->id);
        DB::insert("insert into user_role (user_id, role_id) values (?,?)", [$user->id, 2]);
        auth()->login($user);
        return redirect('/elder-list')->with('success', "Account successfully registered.");

    }
}
