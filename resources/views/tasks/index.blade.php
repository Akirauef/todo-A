@extends('layouts.app_original')
@section('content')

  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card text-center">
            <div class="card-header">
                タスク一覧
            </div>

            @foreach($tasks as $task)
                
            <div class="card-body">
                <h5 class="card-title">タスク名 : {{ $task->title }}</h5>
                <p class="card-text">
                  コンテンツ : {{ $task->contents }}
                </p>
                <p class="card-text">作成者:{{ Auth::user()->name }}</p>
                <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-primary">詳細へ</a>
            </div>
            <div class="card-footer text-muted">
                作成日時 : {{ $task->created_at }}
            </div>
            @endforeach
        </div>
        </div>
        <div class="col-md-2">
          <a href="{{ route('tasks.create') }}" class="btn btn-primary">
            新規作成
          </a>
        </div>
    </div>
  </div>
@endsection