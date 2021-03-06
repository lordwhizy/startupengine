<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.features.index');
    }

    public function view(Request $request, $id)
    {
        $item = \App\Feature::find($id);

        $options = [
            'id' => $item->id,
            'type' => 'feature',
            'index_uri' => '/admin/features'
        ];

        return view('admin.components.resource_view')
            ->with('item', $item)
            ->with('options', $options);
    }

    public function viewFeaturePage($id)
    {
        $feature = \App\Feature::find($id);

        return view('features.view')->with('feature', $feature);
    }
}
