<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/style.css" >
</head>
<body>

  <div class="container">

    <div class="card">
      
      <p class="title mb-15">Todo List</p>
            <div class="todo">
              
        <form action="/todo-introduction/todo/create" method="post" class="flex between mb-30">
          @csrf
          <input type="hidden" name="_token" value="70iTjYPmypqyJVcjyvyeHsqbNLFFc19NpZj8BHFq">          <input type="text" class="input-add" name="content">
          <input class="button-add" type="submit" value="追加">
        </form>
        <table>
          <tbody><tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
                    <tr>
            <td>
              2023-01-02 08:52:14
            </td>
            <form action="http://54.65.181.123/todo-introduction/todo/update?id=143" method="post"></form>
              <input type="hidden" name="_token" value="70iTjYPmypqyJVcjyvyeHsqbNLFFc19NpZj8BHFq">              <td>
                <input type="text" class="input-update" value="プログラミング" name="content">
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            
            <td>
              <form action="http://54.65.181.123/todo-introduction/todo/delete?id=143" method="post">
                <input type="hidden" name="_token" value="70iTjYPmypqyJVcjyvyeHsqbNLFFc19NpZj8BHFq">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
              2023-01-04 05:17:11
            </td>
            <form action="http://54.65.181.123/todo-introduction/todo/update?id=146" method="post"></form>
              <input type="hidden" name="_token" value="70iTjYPmypqyJVcjyvyeHsqbNLFFc19NpZj8BHFq">              <td>
                <input type="text" class="input-update" value="筋トレ" name="content">
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            
            <td>
              <form action="http://54.65.181.123/todo-introduction/todo/delete?id=146" method="post">
                <input type="hidden" name="_token" value="70iTjYPmypqyJVcjyvyeHsqbNLFFc19NpZj8BHFq">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                  </tbody></table>

 @foreach ($todos as $todo)
  <p>{{$todo->content}}</p>
  @endforeach

      </div>
    </div>
  </div>

</body>
</html>

