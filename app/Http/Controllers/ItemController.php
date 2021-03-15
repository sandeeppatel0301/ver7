<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $data = \App\Item::get();
        return $data;
    }
    public function remove($id)
    {
        $data = \App\Item::find($id)->delete();
        return redirect()->route('item');
    }
    public function removed_records()
    {
        $data = \App\Item::withTrashed()->get();
        //$data = \App\Item::onlyTrashed()->get(); To get only removed records
        return $data;
    }
}
