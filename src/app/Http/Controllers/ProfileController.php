<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Address;
use App\Models\User;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{

	public function show_profile(){
		return view('show_profile');
	}

	public function store(ProfileRequest $request)
	{
		$loginUser = User::find(1);
		$requestParameters = $request->only([
			'profile_image',
			'name',
			'post_code',
			'address',
			'building'
		]);

		
		

		$profile = Profile::where('user_id', $loginUser->id)
			->firstOrNew();
		
		$address = Address::findOrNew($profile->address_id);
		$addressRequestParameters = [
			'post_code' => $requestParameters['post_code'],
			'address' => $requestParameters['address'],
			'building' => $requestParameters['building'],
			'user_id' => $loginUser->id,
		];
		
		$address->fill($addressRequestParameters);
		$address->save();
		
		$profileRequestParameters = [
			'image' => $requestParameters['profile_image'],
			'name' => $requestParameters['name'],
			'address_id' => $address->id,
			'user_id' => $loginUser->id,
		];
		$profile = new Profile;
		$path = $request->file('profile_image')->store('images',"public");
		$filename = basename($path);
		$profile->profile_image = $filename;
		$profile->fill($profileRequestParameters);
		$profile->save();

		return view('index',['profiles' => $profile]);
	}

	public function update(ProfileRequest $request)
	{
		$profile = $request->all();
		unset($request['_token']);
		Profile::find($request->id)->update($profile);
		return redirect('mypage');
	}
	
	public function mypage()
	{
		return view('mypage');
	}

}
