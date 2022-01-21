<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Manager\UserManager;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    private $manager;

    public function __construct(UserManager $manager)
    {
        $this->manager = $manager;
    }

    public
    function auth()
    {
        // envoyer la requete a Github
        return Socialite::driver('github')->redirect();

    }

    public
    function redirect()
    {
        // recevoir une requete de github
        $userInfos = Socialite::driver('github')->stateless()->user();

        $newUSer = User::firstOrCreate([
            'email' => $userInfos->email
        ], [
            'name' => $userInfos->name,
            'password' => Hash::make(Str::random(24)),
            'avatar' => ($userInfos->avatar && !empty($userInfos->avatar))
                ? $this->manager->uploadAvatar($userInfos)
                : User::DEFAULT_AVATAR_PATH
        ]);

        Auth::login($newUSer);
        return redirect()->route('home');

    }
}
