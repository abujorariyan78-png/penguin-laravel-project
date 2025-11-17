<?php

namespace App\Http\Controllers;

use App\Models\Womanpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WomanPageController extends Controller
{
    public function index(){
        return view('pages.woman.woman_jacket_create');
    }

      public function store(Request $request){
            $this->validate($request, [
            'title' => 'required|string',
            'price' => 'required|string',
            'sub_title'=>'required|string',
            
             
        ]);

        $woman= new Womanpage();

        $woman->title=$request->title;
        $woman->price=$request->price;
        $woman->sub_title=$request->sub_title;

        $woman_file = $request->file('woman_image');
        Storage::putFile('public/img/', $woman_file);
        $woman->woman_image = "storage/img/".$woman_file->hashName();

          $woman->save();

          return redirect()->route('woman.page')->with('success'," woman page data hass been store successfuly");
    }

    public function list(){
        $woman=Womanpage::all();
        return view('pages.woman.list_woman',compact('woman'));
    }

    public function edit($id){
        $woman=Womanpage::find($id);
        return view('pages.woman.edit_woman',compact('woman'));
    }

    public function update(Request $request, $id){
         $this->validate($request, [
            'title' => 'required|string',
            'price' => 'required|string',
            'sub_title'=>'required|string',
            
             
        ]);

        $woman=  Womanpage::find($id);

        $woman->title=$request->title;
        $woman->price=$request->price;
        $woman->sub_title=$request->sub_title;
        if($request->file('woman_image')){
        $woman_file = $request->file('woman_image');
        Storage::putFile('public/img/', $woman_file);
        $woman->woman_image = "storage/img/".$woman_file->hashName();
        }
       

          $woman->save();

          return redirect()->route('list.woman')->with('success'," woman page data hass been store successfuly");

    }

public function delete($id){
    $woman=Womanpage::find($id);
    $woman->delete();
    return redirect()->route('list.woman')->with('success', " Woman list item delete successful");
}

}
