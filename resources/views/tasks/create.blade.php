@extends('layouts.app_original')
@section('content')

    <div class="header-left">
            <img class="logo" src="./logo.png" alt="">
        </div>
        <div class="header-right">
            <ul class="nav">
                <li><a href="#">ユーザA</a></li>
            </ul>
        </div>
  </header>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
          {{-- エラー発生のためPOSTからGETに変更しました。 --}}
            <form action="#" method="GET">
              {{-- サニタイジングしました --}}
              @csrf
                <div class="form-group">
                    <label>タスク名</label>
                    <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>コンテンツ</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">作成日時</button>
            </form>
        </div>
    </div>
  </div>
@endsection