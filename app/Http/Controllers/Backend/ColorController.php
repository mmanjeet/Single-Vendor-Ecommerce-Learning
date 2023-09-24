<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {

        $colors = Color::query();
        if (!empty($request->get('name'))) {
            $colors->where('name', 'LIKE', "%" . $request->get('name') . "%");
        }
        $colors = $colors->paginate(2);
        return view('backend.admin.products.color-list')->with(['colors' => $colors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('backend.admin.products.color-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = array();
        $validator['name'] = 'required';
        $validator['color_code'] = 'required';
        $request->validate($validator);
        $color = new Color();
        $color->name = $request->name;
        $color->color_code = $request->color_code;
        $is_success = $color->save();
        if ($is_success) {
            return redirect()->route('admin.color.index')->with('msg', ["code" => 200, "message" => "Color has been created successfully."]);
        } else {
            return back()->with('msg', ["code" => 400, "message" => "Please try again."]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color): View
    {
        return view('backend.admin.products.color-edit')->with(['color' => $color]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Color $color): RedirectResponse
    {
        $validator = array();
        $validator['name'] = 'required';
        $validator['color_code'] = 'required';
        $request->validate($validator);
        $color->name = $request->name;
        $color->color_code = $request->color_code;
        $is_success = $color->save();
        if ($is_success) {
            return redirect()->route('admin.color.index')->with('msg', ["code" => 200, "message" => "Color has been update successfully."]);
        } else {
            return back()->with('msg', ["code" => 400, "message" => "Please try again."]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        $is_success = $color->delete();
        if ($is_success) {
            return redirect()->route('admin.color.index')->with('msg', ["code" => 200, "message" => "Color has been deleted successfully."]);
        } else {
            return back()->with('msg', ["code" => 400, "message" => "Please try again."]);
        }
    }
}
