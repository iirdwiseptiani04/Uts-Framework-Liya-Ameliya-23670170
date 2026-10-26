<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Akun admin yang ditulis di kode
    private const ADMIN_NAME     = 'Finda';
    private const ADMIN_EMAIL    = 'admin@test.com';
    private const ADMIN_PASSWORD = 'password123';

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (
            $credentials['email'] === self::ADMIN_EMAIL &&
            $credentials['password'] === self::ADMIN_PASSWORD
        ) {
            // Pastikan user ada di database, supaya session dan middleware auth bisa jalan
            $user = User::firstOrCreate(
                ['email' => self::ADMIN_EMAIL],
                [
                    'name' => self::ADMIN_NAME,
                    'password' => Hash::make(self::ADMIN_PASSWORD),
                ]
            );

            Auth::login($user, $request->boolean('remember'));
            $request->session()->regenerate();

            return redirect()->intended(route('admin.index'));
        }

        return back()->withErrors(['email' => 'Email atau password salah.'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
