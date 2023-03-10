@extends('layouts.app_original')
@section('content')

  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
          {{-- POST methodにするときはroutingもPOST送信に変える --}}
            <form action="{{ route('tasks.store') }}" method="POST">
              @csrf
                <div class="form-group">
                    <label>タスク名</label>
                    <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>コンテンツ</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="contents">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">作成</button>
            </form>
        </div>
    </div>
  </div>
@endsection
