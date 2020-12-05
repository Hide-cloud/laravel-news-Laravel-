<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">
  <meta http-equiv="content-type" charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--<link rel='stylesheet' href='./css/article.css' type="text/css"> この書き方ではダメ-->
  <link rel='stylesheet' href="{{ asset('css/article.css') }}" type="text/css">
  <title>Laravel news</title>
</head>

<body>
  <h1 class='title'>Laravel News</h1>

    <!-- content -->
    <div class='Container'>
            <div class="content">
              <p class="articleTitle">
                {{ $article -> title }}
              </p>
              <p class="articleText">
                {{ $article -> content }}
              </p>
            </div>
    
        </div>
    
        <div class='commentContainer'>
          <!-- コメント表示部分 -->
          <form method="post" class="commentForm" action="">
          @csrf
            <textarea name="comment" class="inputFlex commentInput"></textarea>
            <input type="hidden" name="article_id"  value="{{ $article -> id }}">
            <input type="submit" value="コメントを書く"  class="commnetSubmitStyle">
          </form>
          
        </div>
        <p> <?php echo $comments ?></p>

        @foreach ( $comments as $comment )
             <div class="commentContent">
               <p>
                 {{ $comment -> comment }}
               </p> 
               <div>
                 <form method="POST">
                   <input type="hidden" name="del" value="{{ $comment -> id }}">
                   <input type="submit" value="コメントを消す" class="deleteComment">
                 </form>
               </div>
             </div>
        @endforeach
        
        <?php
         foreach ( $comments as $comment ){ 
           if( $comment -> article_id  ===  $article -> id ){?>
             <div class="commentContent">
               <p>
                 {{ $comment -> comment }}
               </p> 
               <div>
                 <form method="POST">
                   <input type="hidden" name="del" value="{{ $comment -> id }}">
                   <input type="submit" value="コメントを消す" class="deleteComment">
                 </form>
               </div>
             </div>
           <?php
            }
          } ?>


         @yield('comment')
    <script type="text/javascript" src="./js/index.js"></script>
</body>

</html>