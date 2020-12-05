<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article_data;
use App\Models\Comment_data;

class ArticleController extends Controller
{
    //
    //記事一覧を表示する
    //@return view
    public function showList()
    {
       $articles=Article_data::all();
       
       //デバック（配列の中身確認）
       //dd($articles);

       return view('article.list',['articles' => $articles]);
    }

    
    /** 
     *記事を登録する
     *@param int $id
     *@return view
    */
    public function exePost(Request $request)
    {
       //データを受け取る
        $inputs = $request->all();
  
        Article_data::create($inputs);
  
        return redirect(route('articles'));
        //return view('article.list',['articles' => $articles]);
        //これではダメだった
    }


    /** 
     *記事詳細を表示する
     *@param int $id
     *@return view
    */

    public function showDetail($id)
    {
       $article=Article_data::find($id);
       
       $comments=Comment_data::all();
       //デバック（配列の中身確認）
       //dd($articles);
      
       //もしidが見つからない場合はエラーメッセージを最初のページにリダイレクトし表示する(Sesionを使うと簡単にできる)
       //if(is_null($article)){
       //   \Session::flash('err_msg','データがありません。');
       //   return redirect(route('articles'));
       //}

       return view('article.detail',['article' => $article],['comments' => $comments]);
    }


    /** 
     *commentを登録する
     *@param int $id
     *@return view
    */
    public function exePostComment(Request $request_comment)
    {
       //データを受け取る
        $input = $request_comment->all();
  
        Comment_data::create($input);
  
        return redirect(route('show'));
        //return redirect(route('postComment'));
        //return view('article.detail',['articles' => $articles]);
        //これではダメだった
    }

    
}
