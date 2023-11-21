<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
public function register (Request $request){

$user = new User();
$user->name = $request->name;
$user->password = Hash::make($request->password);
$user->save();  
auth::login($user);
return redirect(route('PanelUsuario'));
}

public function login (Request $request){

   $credentials =[
    "name"=>$request->name,
    "password"=>$request->password,];

    $remember=($request->has('remember')?true:false);
    
    if(Auth::attempt($credentials,$remember)){

        $request->session()->regenerate();
        return redirect()->intended(route('PanelUsuario'));

    }else{return redirect('welcome');}
}

public function logout (Request $request){
    auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect(route('welcome'));
    
}

}