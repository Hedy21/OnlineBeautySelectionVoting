<?php

namespace App\Http\Controllers;

use App\Models\Selection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class SelectionController extends Controller
{
    public function selectionForm(){
        return view('queenSelectionsUploadForm');
    }
    public function selectionFormUpload(Request $req){
        $data = $req->all();
        Storage::disk('local')->put('example.txt','Contents');
        $fileName = time().$req->file('image')->getClientOriginalName();
        $path = $req->file('image')->storeAs('images',$fileName,'public');
        $data["image"] = '/storage/'.$path;
        $data["votes"] = 0;
        Selection::create($data);
        return redirect('leaderboard');
    }
    public function leaderboard(){
        $data = Selection::get()->all();
        //dd($data);
        return view('leaderboard',compact('data'));
    }
    public function preview(){
        return view('previewQueens');
    }
    public function voted(){
        $data = Selection::get()->all();
        return view('leaderboard',compact('data'));
    }
    public function vote(Request $req){
        $where = ['id' => $req->id];

    $selection = Selection::where($where)->first();

    if ($selection) {
        // Increment the 'votes' field
        $selection->increment('votes');

        // Fetch the updated data
        $updatedSelection = Selection::find($req->id);

        // Return the updated selection data
        return response()->json($updatedSelection);
    } else {
        // Handle the case where the selection is not found
        return response()->json(['error' => 'Selection not found'], 404);
    }
    }
}
