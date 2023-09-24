<?php

namespace App\Http\Controllers\Backend;

use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Models\AttributeProperty;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;


class AttrinutePropertyController extends Controller
{
    public function index(Request $request, int $id): View
    {
        $attribute = Attribute::find($id);
        $attribute_properties = AttributeProperty::paginate(2);
        return view('backend.admin.products.attributes.attribute-property')->with(['attribute' => $attribute, 'attribute_properties' => $attribute_properties]);
    }
    public function store(Request $request)
    {
        $validator = array();
        $validator['attribute_id'] = 'required';
        $validator['property'] = 'required';
        $request->validate($validator);
        $attribute_property = new AttributeProperty();
        $attribute_property->attribute_id = $request->attribute_id;
        $attribute_property->property = $request->property;
        $is_success = $attribute_property->save();
        if ($is_success) {
            return back()->with('msg', ["code" => 200, "message" => "Attribute Property has been created successfully."]);
        } else {
            return back()->with('msg', ["code" => 400, "message" => "Please try again."]);
        }
    }

    public function edit(Request $request, int $id)
    {
        $attribute_property = AttributeProperty::with(['attribute'])->findOrFail($id);
        return view('backend.admin.products.attributes.attribute-property-edit')->with(['attribute_property' => $attribute_property]);
    }

    public function update(Request $request, int $id)
    {
        $validator = array();
        $validator['attribute_id'] = 'required';
        $validator['property'] = 'required';
        $request->validate($validator);
        $attribute_property = AttributeProperty::findOrfail($id);
        $attribute_property->attribute_id = $request->attribute_id;
        $attribute_property->property = $request->property;
        $is_success = $attribute_property->save();
        if ($is_success) {
            return back()->with('msg', ["code" => 200, "message" => "Attribute Property has been created successfully."]);
        } else {
            return back()->with('msg', ["code" => 400, "message" => "Please try again."]);
        }
    }



    public function destroy(Request $request, int $id)
    {
        $attributeproperty = AttributeProperty::find($id);
        $is_success = $attributeproperty->delete();
        if ($is_success) {
            return back()->with('msg', ["code" => 200, "message" => "Attribute Property has been deleted successfully."]);
        } else {
            return back()->with('msg', ["code" => 400, "message" => "Please try again."]);
        }
    }
}
