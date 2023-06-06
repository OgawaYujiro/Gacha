<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gacha;

class GachaController extends Controller
{
    public function index()
    {
        // レコードをランダムに1つ取得する
        $Wrap = DB::table('gacha')->inRandomOrder()->first('name');
        return view('gacha.index', compact('Wrap'));
    }
}
