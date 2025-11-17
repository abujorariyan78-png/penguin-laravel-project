<?php

namespace App\Http\Controllers;

use App\Models\heroPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class heroPageController extends Controller
{
    public function index(){
        return view('pages.hero.hero');
    }

    public function main(){
        return view('pages.dashboard_main');
    }

    public function store(Request $request){
            $this->validate($request, [
            'title' => 'required|string',
            'title2' => 'required|string',
            'sub_title'=>'required|string',
            
             
        ]);

        $hero= new heroPage();

        $hero->title=$request->title;
        $hero->title2=$request->title2;
        $hero->sub_title=$request->sub_title;

        $hero_file = $request->file('hero_image');
        Storage::putFile('public/img/', $hero_file);
        $hero->hero_image = "storage/img/".$hero_file->hashName();

          $hero->save();

          return redirect()->route('hero.page')->with('success',"Hero page data hass been store successfuly");
    }

    public function list(){
        $hero=heroPage::all();
        return view('pages.hero.list',compact('hero'));
    }

    public function edit($id){
        $hero=heroPage::find($id);
        return view('pages.hero.edit',compact('hero'));
        
    }

    public function update(Request $request,$id){
           $this->validate($request, [
            'title' => 'required|string',
            'title2' => 'required|string',
            'sub_title'=>'required|string',
            
             
        ]);

        $hero=  heroPage::find($id);

        $hero->title=$request->title;
        $hero->title2=$request->title2;
        $hero->sub_title=$request->sub_title;
         if($request->file('hero_image')){
           $hero_file = $request->file('hero_image');
        Storage::putFile('public/img/', $hero_file);
        $hero->hero_image = "storage/img/".$hero_file->hashName();
         }
       

          $hero->save();

          return redirect()->route('list.page')->with('success',"Hero page data hass been update successfuly");
    }

    public function delete($id){
        $hero=heroPage::find($id);
        $hero->delete();

        return redirect()->route('list.page')->with('success', " Hero page delete successfuly");




    }
}
