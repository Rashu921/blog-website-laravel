<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;  //can get logged in username

use App\Models\post;

class HomeController extends Controller
{
    
   public function index()
   {
      $post = post::all(); 
       

      return view('home.index',compact('post'));
   } 


   public function upload(request $request) //get data
   {
          
          $data = new post;

          $data->username=Auth::user()->name;

          $data->description=$request->description;


          //insert image
          $image = $request->image;

          if($image)  
          {

          $imagename = time().'.'.$image->getClientOriginalExtension();

          $request->image->move('post' ,$imagename);   //move image to public filder

          $data->image = $imagename; // insert to db 
          }

          $data->save();

          return redirect()->back();


   }


   public function view()
   {

      $name = Auth::user()->name;

      $post = post::where('username','=',$name)->get();

      return view('home.post_page',compact('post'));
   }


   public function delete($id)
   {
        
       $data = post::find($id);

       $data->delete();

       return redirect()->back();

   }



   public function update($id)
   {
     
      $data = post::find($id);



      return view('home.update',compact('data'));

   }

   public function confirmupdate(Request $request , $id)
   {
      $post = post::find($id);

      $post->description=$request->description;


      $image = $request->image;

      if($image)  
      {

      $imagename = time().'.'.$image->getClientOriginalExtension();

      $request->image->move('post' ,$imagename);   

      $post->image = $imagename; 
      }

      $post->save();

      return redirect()->back();


   }
   
}
