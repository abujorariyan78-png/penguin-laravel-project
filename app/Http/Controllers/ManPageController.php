<?php

namespace App\Http\Controllers;

use App\Models\Manpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManPageController extends Controller
{
    public function index(){
        return view('man.man');
    }

    public function store(Request $request){
         $this->validate($request, [
            'title' => 'required|string',
            'price' => 'required|string',
            'sub_title'=>'required|string',
            
             
        ]);

        $man= new Manpage();

        $man->title=$request->title;
        $man->price=$request->price;
        $man->sub_title=$request->sub_title;

        $man_file = $request->file('man_image');
        Storage::putFile('public/img/', $man_file);
        $man->man_image = "storage/img/".$man_file->hashName();

          $man->save();

          return redirect()->route('man.page')->with('success'," man page data hass been store successfuly");
    }

    public function list(){
        $man=Manpage::all();
        return view('man.list_man',compact('man'));
    }

    public function edit($id){
        $man=Manpage::find($id);
        return view('man.edit_man',compact('man'));
    }

    public function update(Request $request,$id){
          $this->validate($request, [
            'title' => 'required|string',
            'price' => 'required|string',
            'sub_title'=>'required|string',
            
             
        ]);

        $man=  Manpage::find($id);

        $man->title=$request->title;
        $man->price=$request->price;
        $man->sub_title=$request->sub_title;
        
        if($request->file('man_image')){
        $man_file = $request->file('man_image');
        Storage::putFile('public/img/', $man_file);
        $man->man_image = "storage/img/".$man_file->hashName();

        }
       

          $man->save();

          return redirect()->route('list.man')->with('success'," man page data hass been store successfuly");
    }

    public function delete($id){
        $man=Manpage::find($id);
        $man->delete();
        return redirect()->route('list.man')->with('success', "Man page data hass been delete sucessfuly");
    }
}
