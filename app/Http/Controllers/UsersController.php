<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function adduser(){
        return view('admin.adminadduser');
    }

    public function indexv(){
        return view('user.addhisa');
    }

    public function index()
    {
        $data['users'] = User::paginate(10);
        return view('admin.adminviewuser',$data);
    }
    
    public function create()
    {
        $data['user'] = new User();
        return view('admin.adminadduser', $data);
    }

    public function store()
    {
        $user = new User();
            $user->name = request()->name;
            $user->email = request()->email;
            $user->password = request()->password;
            // $user->usertype = request()->usertype;
           

            // if(request()->hasFile('picha')){
            //     $product->picha = request('picha')->store('picha');
            
            // }
    
            $user->save();

            // return request()->all();
    
            return redirect('/admin/adminviewuser');
        }

        public function edit(User $user)
        {
            $data['user'] = $user;
            return view('admin.adminadduser',$data);
    
        }
    
        public function update(User $user)
        {
            // if(request()->hasFile('picha')){
            //     Storage::delete($product->picha??'');
                
            //     $product->picha = request('picha')->store('picha');
            // }
            $user->name = request()->name;
            $user->email = request()->email;
            $user->password = request()->password;
            // $user->usertype = request()->usertype;
            $user->save();
            
            return redirect('/admin/adminviewuser');
    
        }

        public function destroy(User $user)
        {
            // Storage::delete($user->picha??'');
    
            $user->delete();
            return redirect('/admin/adminviewuser');
            
        }

}
