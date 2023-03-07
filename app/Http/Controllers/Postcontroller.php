
   // $idはindex.blade.phpから送られたid
   functon show($id)
   {
      $post = Post::find($id);

      return view('posts.show',['post'=>$post]);
   }
}