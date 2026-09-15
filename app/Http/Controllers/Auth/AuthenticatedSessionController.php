<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Muestra la vista de inicio de sesión simplificada con el logo de Dimak y acceso directo.
     */
    public function create(): View
    {
        return view("auth.login");
    }

    /**
     * Maneja una solicitud de autenticación entrante.
     * Permite ingreso público directo con un solo clic con rol Administrador.
     */
    public function store(Request $request): RedirectResponse
    {
        // Si se envió email y password manualmente, intentamos autenticarlo
        if ($request->filled("email") && $request->filled("password")) {
            $credentials = $request->only("email", "password");
            $remember = $request->boolean("remember");

            if (Auth::attempt($credentials, $remember)) {
                $request->session()->regenerate();
                return redirect()->intended(route("dashboard", absolute: false));
            }
        }

        // Acceso demo público: Loguea automáticamente al usuario administrador
        $admin = User::where("role", "admin")->first() ?? User::first();

        if ($admin) {
            Auth::login($admin);
            $request->session()->regenerate();
            return redirect()->intended(route("dashboard", absolute: false));
        }

        return redirect()->route("login");
    }

    /**
     * Destruye una sesión autenticada.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard("web")->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");
    }
}
