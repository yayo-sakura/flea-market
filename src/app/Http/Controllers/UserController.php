<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function user(){
        return view('auth.register');
    }

    public function storeUser(RegisterRequest $request){
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        Auth::login($user);
        $user->save();
        return redirect('/mypage/profile');
    }

    public function loginUser(LoginRequest $request){
        $credentials=$request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect('/');
        }

    }

    public function logout(){
        return view('auth.login');
    }

    public function loginAsUser($userId)
    {
        $user = User::find(1);
        
        if ($user) {
            Auth::login($user);
            return redirect()->route('dashboard')->with('success', $user->name . 'としてログインしました。');
        }
        
        return back()->with('error', 'ユーザーが見つかりません。');
    }
    public function example(Request $request)
    {
        $userId = 2; // ログインさせたいユーザーのID
        $user = User::findOrFail($userId);
        Auth::login($user);

        // ログイン後の処理 (例: ログイン済みのユーザー情報を取得)
        $authUser = Auth::user();
        dd($authUser);
    }
}
