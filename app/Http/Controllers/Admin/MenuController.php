<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Menu;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Session;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('file', ['only' => 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//        $menus = Menu::paginate(15);

        return view('admin.menu.drop');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(MenuRequest $request)
    {
//        dd($request->all());
        $this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
        Menu::create($request->all());

        Session::flash('flash_message', 'Menu successfully added!');

        return redirect('menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $menu = Menu::findOrFail($id);

        return view('admin.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);

        return view('admin.menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());

        Session::flash('flash_message', 'Menu successfully updated!');

        return redirect('menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Menu::destroy($id);

        Session::flash('flash_message', 'Menu successfully deleted!');

        return redirect('menu');
    }

}
