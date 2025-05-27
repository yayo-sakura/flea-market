<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
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
