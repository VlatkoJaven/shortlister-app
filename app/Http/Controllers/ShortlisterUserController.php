<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShortlisterUserService;

class ShortlisterUserController extends Controller
{
    protected $userService;

    public function __construct(ShortlisterUserService $userService)
    {
        $this->userService = $userService;
    }

    public function create()
    {
        return view('shortlister-users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => 'required|email|unique:shortlister_users,email',
            'phone' => ['required', 'regex:/^\d+$/'],
            'date_of_birth' => ['required', 'date', 'before_or_equal:today'],
        ]);
    
        $this->userService->createUser($validated);
    
        return redirect('/')->with('success', 'User created successfully.');
    }

    public function index()
    {
        $users = $this->userService->getAllUsersPaginated(10);
        return view('shortlister-users.index', compact('users'));
    }
}