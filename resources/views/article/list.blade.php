
@extends('layout')

@section('content')
  <section class="main">
    <h2 class="subTitle">さぁ、最新のニュースをシェアしましょう</h2>


    <!--投稿-->
    <form method="post" class="form" action="{{ route('articles') }}" onsubmit="return submitCheckFunction()">
    @csrf
      <div class='titleContainer'>
        <p class='nameFlex'>title: </p>
        <input type='text' name='title' class="inputFlex">
      </div>
      <div class='articleContainer'>
        <p class='nameFlex'>記事: </p>
        <textarea rows="10" cols="60" name="content" class="inputFlex articleInput"></textarea>
      </div>
      <div class="submitContainer">
        <input type="submit" value="投稿" class="submitStyle">
      </div>
    </form>

    <hr>

    <!-- content -->
    <div class='Container'>
          @foreach ( $articles as $article )
            <div class="content">
              <p class="articleTitle">
                {{ $article -> title }}
              </p>
              <p class="articleText">
                {{ $article -> content }}
              </p>
              <p class='routingStyle'><a href="/article/{{ $article -> id }}">記事全文・コメントを見る</a></p>
            </div>
    
          @endforeach
        </div>
  </section>
@endsection