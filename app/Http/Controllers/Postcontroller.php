
   // $idはindex.blade.phpから送られたid
   functon show($id)
   {
      $post = Post::find($id);

      return view('posts.show',['post'=>$post]);
   }

    function edit($id)
    {
           //.  dd($id);
           $task = Task::find$（id);
           return view(‘tasks.show’ , [‘task’ =>$task]);
     }
}
