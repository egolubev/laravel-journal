<?php
/**
 * Created by PhpStorm.
 * User: egolubev
 * Date: 04.10.2021
 * Time: 23:13
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Показываем главную страницу со статьями
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('mainpage', [
            'articles' => DB::table('articles')->paginate(6)
        ]);
    }
}
