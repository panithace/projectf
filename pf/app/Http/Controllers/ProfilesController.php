<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LikeController;

class ProfilesController extends Controller
{
    //
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }
    public function edit(User $user){
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }
    public function update(User $user){
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'Personal_Description' => 'required',
            //'Skills' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => '',
        ]);
        
        if (request('image')){
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }
           auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect("/profiles/{$user->id}" );
      
    }
}

        // $input = $request->all();
    	// $skills = explode(",", $request->skills);
    	// $profile = Profile::create($input);
    	// $profile->skill($skills);
        // return back()->with('success','Post added to database.');
     