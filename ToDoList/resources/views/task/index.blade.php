@extends('layouts.app')

@section('title', 'TodoList')

@section('content')

<tr class="todo-radio">
    <td><input class="radio" type="radio" name="all" value="すべて" checked></td>
    すべて
    <td><input class="radio" type="radio" name="progress" value="作業中"></td>
    作業中
    <td><input class="radio" type="radio" name="done" value="完了"></td>
    完了
</tr>
<table>
    <tr>
        <th>ID</th>
        <th>コメント</th>
        <th>状態</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td class="h3">{{$item->id}}</td>
        <td class="h3">{{$item->comment}}</td>
        @if ($item->state == 0)
        <td>
            <input class="btn" type="button" name="state" value="作業中">
        </td>
        @else
        <td>
            <input class="btn" type="button" name="state" value="完了">
        </td>
        @endif

        <td><input class="btn" type="button" name="delete" value="削除"></td>
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
<form action="/index/create" method="post">
    @csrf
    <input class="text" type="text" name="comment">
    <input class="btn" type="submit" name="send" value="追加">
</form>

@endsection
