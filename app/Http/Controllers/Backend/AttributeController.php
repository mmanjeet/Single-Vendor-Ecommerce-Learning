<?php

namespace App\Http\Controllers\Backend;

use App\Models\Attribute;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $attributes = Attribute::query();
        if (!empty($request->get('name'))) {
            $attributes->where('name', 'LIKE', "%" . $request->get('name') . "%");
        }
        $attributes = $attributes->paginate(2);
        return view('backend.admin.products.attributes.attribute-list')->with(['attributes' => $attributes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('backend.admin.products.attributes.attribute-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = array();
        $validator['name'] = 'required|unique:attributes,name';
        $request->validate($validator);
        $attribute = new Attribute();
        $attribute->name = $request->name;
        $is_success = $attribute->save();
        if ($is_success) {
            return redirect()->route('admin.attribute.index')->with('msg', ["code" => 200, "message" => "Attribute has been created successfully."]);
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
    public function edit(Attribute $attribute)
    {
        return view('backend.admin.products.attributes.attribute-edit')->with(['attribute' => $attribute]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attribute $attribute): RedirectResponse
    {
        $validator = array();
        $validator['name'] = 'required|unique:attributes,name,' . $attribute->id;
        $request->validate($validator);
        $attribute->name = $request->name;
        $is_success = $attribute->save();
        if ($is_success) {
            return redirect()->route('admin.attribute.index')->with('msg', ["code" => 200, "message" => "Attribute has been update successfully."]);
        } else {
            return back()->with('msg', ["code" => 400, "message" => "Please try again."]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attribute)
    {
        $is_success = $attribute->delete();
        if ($is_success) {
            return redirect()->route('admin.attribute.index')->with('msg', ["code" => 200, "message" => "Attribute has been deleted successfully."]);
        } else {
            return back()->with('msg', ["code" => 400, "message" => "Please try again."]);
        }
    }
}
