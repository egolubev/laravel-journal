<?php
/**
 * Created by PhpStorm.
 * User: egolubev
 * Date: 04.10.2021
 * Time: 23:13
 */

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Tags;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Показываем главную страницу со статьями
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('articles/index', [
            'articles' => DB::table('articles')->paginate(6)
        ]);
    }

    /**
     * Каталог статей
     * @return \Illuminate\View\View
     */
    public function catalog()
    {
        return view('articles/catalog', [
            'articles' => DB::table('articles')->paginate(5),
            'tags' => Tags::all(),
        ]);
    }

    /**
     * Детализированный просмотр статьи
     * @param $id - ид статьи
     * @return \Illuminate\View\View
     */
    public function view($id = 0)
    {
        return view('articles/view', [
            'article' => Articles::with('tags')->where('id', $id)->first()
        ]);
    }
}
