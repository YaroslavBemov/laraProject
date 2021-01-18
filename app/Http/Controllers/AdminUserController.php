<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index() {
        $users = User::orderBy('updated_at', 'desc')->paginate(9);

        return view('admin.users', $users);
    }

    public function createUser(){}
    public function storeUser(){}
    public function updateUser(){}
    public function deleteUser(){}
}
