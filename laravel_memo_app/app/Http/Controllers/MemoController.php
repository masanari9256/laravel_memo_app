<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
  /**
   * 初期表示
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function index() {
    return view('memo');
  }

  public function add() {
    Memo::create([
      'user_id' => \Auth::id(),
      'title' => '新規メモ',
      'content' => '',
    ]);

    return redirect()->route('memo.index');
  }
}
