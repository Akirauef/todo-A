@extends('layouts.app_original')
@section('contents')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card mt-3">
                  <div class="card-header">
                      <h5>タスク名：{{ $task->title }}</h5>
                  </div>
                  <div class="card-body">
                  <p class="card-text">コンテンツ：{{ $task->contents }}</p>
                  <p>作成日時：{{ $task->created_at }}</p>
                  <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">編集する</a>
                  <form action='{{ route('tasks.destroy',$task->id) }}' method='post'>
                    @csrf
                    @method('delete')
                      <input type='submit' value='削除' class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>
                  </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
                <button type="button" class="btn btn-primary">コメントする</button>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
          コメント一覧
            <div class="card mt-3">
                <h5 class="card-header">作成者:{{ Auth::user()->name }}</h5>
                <div class="card-body">
                    <h5 class="card-title">作成日時:{{ $task->created_at }}</h5>
                    <p class="card-text">内容：{{ $task->contents }}</p>
                </div>
            </div>
        </div>
      </div>
  </div>
  @endsection
