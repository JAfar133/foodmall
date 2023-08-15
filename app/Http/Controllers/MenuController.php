<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class MenuController extends Controller
{
    public function menu() {
        $menus = Menu::query()->get();

        return view('menu', ['menus' => $menus]);
    }
}
