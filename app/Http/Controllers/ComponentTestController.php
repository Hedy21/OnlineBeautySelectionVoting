<?php

namespace App\Http\Controllers;

use App\Models\ImageUpload;
use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function imageUpload(){
        return view('ComponentsTest.fileUpload');
    }
    public function showImages(){
        $data = ImageUpload::get()->all();
        return view('ComponentsTest.showImage',compact('data'));
    }
    public function storeImage(Request $request){
        $request->validate([
            'image'=>'required|image'
        ]);
        $fileName = time().'.'.$request->file('image')->getClientOriginalName();
        $data = ['photo'=>$fileName];
        $request->image->storeAs('images',$fileName,'public');
        ImageUpload::create($data);
        return redirect('showImages');
    }
}
