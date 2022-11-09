<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin_main_menu;

class MainMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = admin_main_menu::all();
        $sl=1;
        // return $data;
        return view('Backend.User.MainMenu.index',compact('data','sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.User.MainMenu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->sl;

        // return $request->sl;

        $insert = admin_main_menu::insert([
            'sl'=>$request->sl,
            'menu_name'=>$request->menu_name,
            'icon_name'=>$request->icon_name,
            'status'=>$request->status,
        ]);

        if($insert)
        {
            return 1;
        }
        else
        {
            return 0;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = admin_main_menu::find($id);
        return view('Backend.User.MainMenu.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'sl'=>'required',
            'menu_name'=>'required|min:3',
        ],[
            'sl.requried'=>'This Serial Number Is Required',
            'menu_name.required'=>'Please Give A Menu Name',
            'menu_name.min'=>'Menu Name Must Be At Least 3 Character',
        ]);

        $update = admin_main_menu::where('id',$id)
                  ->update($request->except('_token','_method'));

        if($update)
        {
            return redirect('/main_menu')->with('success','Menu Information Updated');
        }
        else
        {
            return redirect()->back()->with('error','Menu Informaiton Update Unsuccessfull');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        $delete = admin_main_menu::find($id)->delete();
        if($delete)
        {
            return redirect()->back()->with('success','Data Delete Successfully');
        }
        else
        {
            return redirect()->back()->with('error','Data Delete Unsuccessfull');
        }
    }
}
