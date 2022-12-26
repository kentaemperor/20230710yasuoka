<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  
  <h1>Todo List</h1>

  <form action="/todos/create" method="post">
  @csrf
  <input type="text" name="content" >

  <button type="button" name="name">追加</button>

</form>

<table>
<th>作成日</th>
<th>タスク名</th>
<th>更新</th>
<th>削除</th>

</table>

@foreach ($todos as $todo)
  <p>{{$todo->content}}</p>
  @endforeach


</body>
</html>

