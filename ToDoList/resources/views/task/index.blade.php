<html>

<head>
    <title>TodoList</title>
</head>

<body>
    <h1>ToDoリスト</h1>
    <tr>
        <td><input type="radio" name="all"></td>
        <th>すべて</th>
        <td><input type="radio" name="progress"></td>
        <th>作業中</th>
        <td><input type="radio" name="done"></td>
        <th>完了</th>

    </tr>
    <table>
        <tr>
            <th>ID</th>
            <th>コメント</th>
            <th>状態</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->comment}}</td>
            <td><input type="button" name="state" value="{{$item->state}}"></td>
            <td><input type="button" name="delete" value="削除"></td>
        </tr>
        @endforeach
    </table>
    <h2>新規タスクの追加</h2>
    @if (count($errors) > 0)
    <div>
        <ul>
            <li>{{$errors}}</li>
        </ul>
    </div>
    @endif
    <form action="index" method="post">
        @csrf

        <input type="text" name="comment">
        <input type="hidden" name="state" value="作業中">
        <input type="submit" name="send" value="追加">
    </form>
</body>

</html>
