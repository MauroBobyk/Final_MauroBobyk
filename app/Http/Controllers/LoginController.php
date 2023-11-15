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
return redirect(route(''));
}

public function login (Request $request){

    $user = new User();
    $user->name = $request->name;
    
}
public function logout (Request $request){
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect(route('welcome'));
    
}

}