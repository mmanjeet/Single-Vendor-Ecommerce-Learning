<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * loginView
     *
     * @return View
     */
    public function loginView(): View
    {
        return view('backend.admin.login');
    }
    /**
     * loginAuth
     *
     * @param Request request
     *
     * @return RedirectResponse
     */
    public function loginAuth(Request $request): RedirectResponse
    {
        $data = $request->all();
        $validator = array();
        $validator['email'] = 'required|email';
        $validator['password'] = 'required';
        $request->validate($validator);
        if (Auth::guard('web')->attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 'Active'])) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->with('msg', 'Please Check Your Credentials');
        }
    }
    /**
     * profile
     *
     * @return View
     */
    public function profile(): View
    {
        return view('backend.admin.profile');
    }
    /**
     * updateProfile
     *
     * @param Request request
     *
     * @return void
     */
    public function updateProfile(Request $request): RedirectResponse
    {
        $validator = array();
        $validator['name'] = 'required|unique:users,name,' . auth()->user()->id;
        $validator['fname'] = 'required';
        $validator['lname'] = 'required';
        if (!empty($request->hasFile('profile_pic'))) {
            $validator['profile_pic'] = 'required|image|mimes:jpeg,png,jpg|max:300';
        }
        $validator['phone'] = 'required';
        $validator['address'] = 'required';
        $validator['postal_code'] = 'required';
        $validator['city'] = 'required';
        $validator['state'] = 'required';
        $validator['country'] = 'required';
        $request->validate($validator);
        $user = User::find(auth()->user()->id);
        $user->name = $request->post('name');
        $user->save();
        $user->userinfo->fname = $request->post('fname');
        $user->userinfo->lname = $request->post('lname');
        if (!empty($request->hasFile('profile_pic'))) {
            if (Storage::disk('public')->exists(auth()->user()->userinfo->profile_pic)) {
                Storage::disk('public')->delete(auth()->user()->userinfo->profile_pic);
            }
            $filename = time() . '.' . $request->file('profile_pic')->getClientOriginalExtension();
            $path = 'uploads/' . date("Y/m/d") . "/" . $filename;

            Image::make($request->file('profile_pic'))
                ->resize(180, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                }) // Resize the image if needed
                ->save(storage_path('app/public/' . $path), 100); // here 100 is a 100% quality
            //$imageName = $request->file('profile_pic')->store("uploads/" . date("Y/m/d"), 'public');
            $user->userinfo->profile_pic = $path;
        }
        $user->userinfo->phone = $request->post('phone');
        $user->userinfo->address = $request->post('address');
        $user->userinfo->postal_code = $request->post('postal_code');
        $user->userinfo->city = $request->post('city');
        $user->userinfo->state = $request->post('state');
        $user->userinfo->country = $request->post('country');
        $is_updated = $user->userinfo->save();
        if ($is_updated) {
            return redirect()->route('admin.profile')->with('msg', ["code" => 200, "message" => "Your Profile has been updated successfully."]);
        } else {
            return redirect()->route('admin.profile')->with('msg', ["code" => 400, "message" => "Please try again."]);
        }
    }


    /**
     * updatePassword
     *
     * @param Request request
     *
     * @return void
     */
    public function updatePassword(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'new_pass' => 'min:6',
                'password' => 'min:6|required_with:new_pass|same:new_pass'
            ],
            ['same' => 'Confirm password does not match.']
        );
        $object = User::find(auth()->user()->id);
        $object->password = Hash::make($request->password);
        if ($object->save()) {
            return back()->with('msg', ["code" => 200, "message" => "Your password has been updated successfully."]);
        } else {
            return back()->with('msg', ["code" => 400, "message" => "Please try again."]);
        }
    }

    /**
     * logout
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::guard('web')->logout();
        return redirect()->route('admin.login')->with('msg', 'You are logged out...');
    }
}
