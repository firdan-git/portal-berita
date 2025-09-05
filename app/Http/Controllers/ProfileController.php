<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use function Laravel\Prompts\alert;

class ProfileController extends Controller
{

    
    public function show()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return view('profile.show', compact('user'));
        }elseif($user->role === 'penulis'){
            return view('profile.shaw', compact('user'));
        }else{
            return Redirect::to('/');

    }

}

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = $request->user();

        if ($user->role === 'admin') {
            return view('profile.edit', compact('user'));
        }elseif($user->role === 'penulis'){
            return view('profile.editt', compact('user'));
        }else{

            abort(403);
    }
}

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.show')->with('Success', 'Akun berhasil diperbarui.');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}