
   // $idはindex.blade.phpから送られたid
   functon show($id)
   {
      $post = Post::find($id);

      return view('posts.show',['post'=>$post]);
   }

     function update(Request $request, $id)
  {
           $task = Task::find($id);

           $task -> title = $request -> title;
           $task -> body = $request -> body;
           $task -> save();

           return view(‘tasks.show’ ,compact(‘task’));
  }
}

