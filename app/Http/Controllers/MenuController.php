<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::get();
        return response()->json($menu);
    }

    public function saveMenu(Request $request){

        $result = [
            'status'  => false,
            'message' => ''
        ];

        try {
            $menu = new Menu();
            $menu->menu_code    = $request->menuCode;
            $menu->menu_name    = $request->menuName;
            $menu->price        = $request->price;
            $menu->is_available = $request->available;
            $menu->save();

            $result['status'] = true;
            $result['message'] = $menu;
            return response()->json($result);
        } catch (\Exception $e) {
            $result['message'] = 'error saveMenu() => ' . $e;
            return response()->json($result);
        }
        
    }

    public function show($id){
        $menu = Menu::find($id);
        return response()->json($menu);
    }

    public function updateMenu(Request $request, $id){
        $result = [
            'status'  => false,
            'message' => ''
        ];
        try {
            $menu = Menu::find($id);
            $menu->menu_code    = $request->menu_code;
            $menu->menu_name    = $request->menu_name;
            $menu->price        = $request->price;
            $menu->is_available = $request->is_available;
            $menu->save();

            $result['status'] = true;
            $result['message'] = $menu;
            return response()->json($result);
        } catch (\Exception $e) {
            $result['message'] = 'error updateMenu() => ' . $e;
            return response()->json($result);
        }
    }

    public function deleteMenu($id){
        $result = [
            'status'  => false,
            'message' => ''
        ];
        $menu = Menu::find($id);
        $menu->delete();
        $result['status'] = true;
        $result['message'] = 'delete succefully';
        return response()->json($result);
    }

}
