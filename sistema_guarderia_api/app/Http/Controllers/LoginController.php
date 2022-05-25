<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index(){
        return view('Auth.login');
        // return view('Front.home');
    }

    public function loginUser(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);;

        $user = User::where('email',$request->email)->first();

        if (Auth::attempt($credentials)){
            // $request->session()->regenerate();
            // return "You are login"; 
            session_start();
            $_SESSION['email'] = $request->email; 
            // Get session values.
            $value = $_SESSION['email'];
            return redirect()->to('/sistema'); 

        }
    

        // if(Hash::check(request('password'),$user->getAuthPassword())){
        //     // $token = $user->createToken(time())->plainTextToken;
        //     $user = Auth::user();
        //     // return view('System.home',compact('user'));
        //     return redirect()->to('/sistema');
        // }

        echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
        return redirect()->to('/login');

    }

    public function logoutUser(){


        #auth()->user()->currentAccessToken()->delete();

        session_start();

        // Destruir todas las variables de sesión.
        $_SESSION = array();

        // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
        // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Finalmente, destruir la sesión.
        session_destroy();
        $_SESSION['email'] = "";
        return redirect()->to('/login');

        /*
        # Cookies logout
        auth()->logout();

        return redirect()->to('/login');
        */

    }
    
}
