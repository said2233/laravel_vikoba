<?php

namespace App\Http\Controllers;

use App\Models\Vikoba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VikobasController extends Controller
{
    public function addhisa(Request $request){
        DB::beginTransaction();
        try {
            $data = new Vikoba();
            $data->user_id = Auth::user()->id;
            $data->hisa = request()->hisa;

           // dd($data); to know if data are taken fr form
            if ( $data->save()){
                DB::commit();
                return view('user.addhisa');
            }else{

            }
        } catch (\Throwable $th){
            DB::rollBack();

            return redirect()->back();
        }
    }

    // public function vikobas(){

    //      echo DB::table('vikobas')->sum('hisa');
    //     // $vikobas = Vikoba::sum('hisa');

    //     $vikobas = Vikoba::with(['user'])->orderBy('created_at', 'desc')->paginate(20);
    //     return view('admin.vikobas', ['vikobas' => $vikobas]);
    // }

    public function vikobas() {
        // Calculate the total sum of 'hisa'
        $totalHisaSum = DB::table('vikobas')->sum('hisa');
    
        // Fetch the paginated 'vikobas' data
        $vikobas = Vikoba::with(['user'])->orderBy('created_at', 'desc')->paginate(20);
    
        // Pass the total sum and 'vikobas' data to the view
        return view('admin.vikobas', [
            'vikobas' => $vikobas,
            'totalHisaSum' => $totalHisaSum, // Pass the sum to the view
        ]);
    }
    

    // public function myvikobas(){
    //     echo DB::table('vikobas')->sum('hisa');
    //     $vikobas = Vikoba::with(['user'])->where('user_id', Auth::user()->id)->get();
    //     return view('user.myvikobas', ['vikobas' => $vikobas]);
    // }

    public function myvikobas(){
        // Calculate the sum of 'hisa' for the specific user ID
        $sumHisa = DB::table('vikobas')->where('user_id', Auth::user()->id)->sum('hisa');
    
        // Retrieve the 'vikobas' for the specific user ID
        $vikobas = Vikoba::with(['user'])->where('user_id', Auth::user()->id)->get();
    
        // Pass the sum and 'vikobas' data to the view
        return view('user.myvikobas', ['vikobas' => $vikobas, 'sumHisa' => $sumHisa]);
    }

    public function editForm($id){
        $data = Vikoba::find($id);
    
        if (!$data) {
            return redirect()->route('user.myvikobas')->with('error', 'Record not found');
        }
    
        return view('user.editHisaForm', compact('data'));
    }

    public function update(Request $request, $id){
        DB::beginTransaction();
        try {
            $data = Vikoba::find($id);
    
            if (!$data) {
                return redirect()->route('user.myvikobas')->with('error', 'Record not found');
            }
    
            // Update the data fields with the new values from the request.
            $data->user_id = Auth::user()->id;
            $data->hisa = $request->hisa;
    
            if ($data->save()) {
                DB::commit();
                return redirect()->route('view-vikoba')->with('success', 'Record updated successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to update record');
            }
        } catch (\Throwable $th){
            DB::rollBack();
            return redirect()->back()->with('error', 'An error occurred');
        }
    }

    public function delete(Request $request, $id){
        DB::beginTransaction();
        try {
            $data = Vikoba::find($id);
    
            if (!$data) {
                return redirect()->route('user.myvikobas')->with('error', 'Record not found');
            }
    
            if ($data->delete()) {
                DB::commit();
                return redirect()->route('view-vikoba')->with('success', 'Record deleted successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to delete record');
            }
        } catch (\Throwable $th){
            DB::rollBack();
            return redirect()->back()->with('error', 'An error occurred');
        }
    }
    
    
    
}
