<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show login page
    public function loginForm()
    {
        return view('admin.login');
    }

    // Handle login POST
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = User::where('email', $request->email)
                     ->where('role', 'admin')
                     ->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Invalid credentials');
        }

        session([
            'admin_id' => $admin->id,
            'admin_name' => $admin->name
        ]);

        return redirect()->route('admin.dashboard');
    }

    // Logout
    public function logout()
    {
        session()->flush();
        return redirect()->route('admin.login');
    }
}
