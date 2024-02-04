<?php

namespace App\Http\Controllers;

use App\Models\Selection;
use Illuminate\Http\Request;
use App\Models\MaleSelection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SelectionController extends Controller
{
    public function selectionForm(){
        return view('queenSelectionsUploadForm');
    }
    public function selectionFormUpload(Request $req){
        $data = $req->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ],[
           'image.image' => 'the input file should be an image',
           'image.mimes' => ''
        ]);
       
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


    //for male selections
    public function leaderboard2(){
        $data = MaleSelection::get()->all();
        //dd($data);
        return view('leaderboard',compact('data'));
    }
    public function selectionForm2(){
        return view('kingSelectionsUploadForm');
    }
    public function selectionFormUpload2(Request $request){
         $data = $request->validate([
             'name' => 'required',
             'image' => 'required|image|mimes:jpeg,png,jpg'
         ],[
            'image.image' => 'the input file should be an image',
            'image.mimes' => ''
         ]);
        
        //$data = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $data["image"] = '/storage/'.$path;
        $data["votes"] = 0;
        MaleSelection::create($data);
        return redirect('leaderboard2');
    }

    //selection preview
    public function previewSelection($id){
        $idData = Selection::find($id)->toArray();
        //dd($idData);
       return view('previewSelection',compact('idData'));
    }
    
    // public function votedHer($id){
    //     if (auth()->check()) {
    //         // User is authenticated
    //     $user = Auth::user();

    //     // Update the noOfVote column to 0 in the database
    //     $user->update(['noOfVote' => 0]);

    //     // Fetch the updated user object
    //     $updatedUser = Auth::user();
        
    //     //add one vote to the selection with respective id
    //         if($user->noOfVote == 1){
    //             $selection = Selection::find($id);
    //             $votesIncrease = $selection->increment('votes');
    //             //return redirect('leaderboard');
    //         }else{
    //             //return back()->with('message',"you can vote only once");
    //             dd("you can vote only once");
    //         }
    //         return redirect('leaderboard');
    //     // go back to leaderboard
        

    //     } else {
    //         // User is not authenticated
    //         dd('User not authenticated');
    //     }
    // }

    public function votedHer($id)
{
    if (auth()->check()) {
        // User is authenticated
        $user = Auth::user();

        // Check if the user already voted
        if ($user->noOfVote == 1) {
            // Start a database transaction
            \DB::transaction(function () use ($user, $id) {
                // Update the noOfVote column to 0 in the database
                $user->update(['noOfVote' => 0]);

                // Fetch the updated user object
                $updatedUser = Auth::user();

                // Add one vote to the selection with the respective ID
                $selection = Selection::find($id);
                $votesIncrease = $selection->increment('votes');
            });

            // Redirect to the leaderboard
            return redirect('leaderboard');
        } else {
            // User already voted
            return back()->with('message', 'You can vote only once');
        }
    } else {
        // User is not authenticated
        dd('User not authenticated');
    }
}

}
