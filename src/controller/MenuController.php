<?php

namespace Thangbeo\Menu;
use App\Http\Controllers\Controller;
use Thangbeo\Menu\menu;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function index()
    {
        $data= menu::where('parent_id', 0)->orderBy('position', 'asc')->get();
        return view('menu::list',compact('data'));
    }

    public function show($id){
        $data = menu::find($id);
        echo($data);
    }

    public function edit($id){
        $data = menu::find($id);
        return view('menu::edit',compact('data'));
    }

    // hàm xử lý trong add
    public function store(Request $request){ 

        $menu = new menu;
        $menu->title = $request->title;
        $menu->link = $request->link;
        $menu->image = $request->image_file->getClientOriginalName();
        $menu->parent_id = $request->parent_id;
        $menu->position = $request->position;
        $menu->color = $request->color;
        if(isset($request->bold)){
            $menu->bold = $request->bold;
        }else{
            $menu->bold = 0;
        }
        $menu->status = $request->status;

        if (isset($request->image_file)) {
            $file = $request->image_file;
            $name=$file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $tmp=$file->getRealPath();
            $file->move('uploads/images', $file->getClientOriginalName());
            $menu->image=  "/uploads/images/".$name; 
        }
        
        $menu->save();
        return redirect('index');
    }

    // hàm xử lý trong update
    public function update(Request $request,$id){

        $menu= menu::find($request->id);
        $old_image = $menu -> image;
        $menu->title = $request->title;
        $menu->link = $request->link;
        $menu->image = $request->image_file;
        
        $menu->parent_id = $request->parent_id;
        $menu->position = $request->position;
        $menu->color = $request->color;

        if(isset($request->bold)){
            $menu->bold = $request->bold;
        }else{
        $menu->bold = 0;
        }
        $menu->status = $request->status;
        if (isset($request->image_file)) {
            $file = $request->image_file;
            $name=$file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $tmp=$file->getRealPath();
            $file->move('uploads/images', $file->getClientOriginalName());
            $menu->image=  "/uploads/images/".$name; 
        }
        $menu->save();
        return redirect('index');
    
    }

    public function delete($id){
        $data = menu::destroy($id);
        return redirect('index');
    }


    public function recursive($data = array(), $current = 0, $parent = 0, $string = "") {
        foreach ($data as $val) {
            if ($val->parent_id == $parent) {
                $this->list .= "<option value=" . $val->id;
                if ($val->id == $current) {
                    $this->list .= " selected";
                }
                $this->list .= ">" . $string . $val->name . "</option>";
                $this->recursive($data, $current, $val->id, $string . "|--");
            }
        }
    }

    public function updatePosition($data, $parent) {
        foreach ($data as $key => $val) {
            $menu = menu::find($val['id']);
            if ($menu) {
                $menu->update(['parent_id' => $parent, 'position' => $key + 1]);
                $menu->save();
                if (isset($val['children']) && count($val['children'])) {
                    $this->updatePosition($val['children'], $val['id']);
                }
            }
        }
    }

    public function updateMenu(Request $request) {
        if (count($request->data)) {
            $this->updatePosition($request->data, 0);
        }
        return 1;
    }
}
