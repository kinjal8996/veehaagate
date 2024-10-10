<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginview()
    {
        return view ('frontend.login');
    }
    public function registerview()
    {
        return view ('frontend.register');
    }

    public function signupdata(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:6',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'pincode' => 'required|digits:6',
            'contact' => 'required|digits:10',

        ]);


        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $user= new User();
        $user->fullname=$request->input('fullname');
        $user->email=$request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->address=$request->input('address');
        $user->state=$request->input('state');
        $user->city=$request->input('city');
        $user->pincode=$request->input('pincode');
        $user->contact=$request->input('contact');

        $user->save();

        return redirect('Login');

        // echo "<pre>";
        // print_r($request->all());
    }

    public function logindata(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->put('customer_id', $user->customer_id);
            return redirect('/')->with([
                'success' => 'Login successful!',
                'username' => $user->fullname
            ]);
        }

        return redirect()->back()->with('error', 'Invalid email or password.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('customer_id');
        Auth::logout();
        return redirect('/');
    }
}

