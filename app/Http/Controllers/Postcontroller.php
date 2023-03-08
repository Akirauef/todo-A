
   // $idはindex.blade.phpから送られたid
   functon show($id)
   {
      $task = Task::find($id);

      return view('tasks.show',['task'=>$task]);
   }

     function update(Request $request, $id)
  {
           $task = Task::find($id);

           $task -> title = $request -> title;
           $task -> contents = $request -> contents;
           $task -> save();

           return view(‘tasks.show’ ,compact(‘task’));
  }
}

