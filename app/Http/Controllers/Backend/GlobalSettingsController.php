<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GlobalSettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::get()->toArray();
        return view('backend.admin.global-settings')->with(['settings' => $this->convertToSingleArray($settings)]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        foreach ($data as $key => $value) {
            if (!empty($value)) {
                Setting::updateOrInsert(
                    ['key' => $key],
                    ['value' => $value]
                );
            }
        }
        return back()->with('msg', ["code" => 200, "message" => "Global Setting has been updated successfully."]);
    }


    public function convertToSingleArray($array)
    {
        if (!empty($array)) {
            return array_column($array, 'value', 'key');
        }
        return [];
    }
}
