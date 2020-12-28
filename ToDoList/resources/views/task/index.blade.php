@extends('layouts.app')

@section('title', 'TodoList')

@section('content')






<tr class="todo-radio">
    <td class="all"><input class="radio" type="radio" name="stateList" value="all" checked></td>
    すべて
    <td class="progress"><input class="radio" type="radio" name="stateList" value="progress"></td>
    作業中
    <td class="done"><input class="radio" type="radio" name="stateList" value="done"></td>
    完了
</tr>

<table>
    <tr>
        <th>ID</th>
        <th>コメント</th>
        <th>状態</th>
    </tr>

    @foreach($items as $item) <tr>
        <td class="h3"> {{$loop -> iteration}} </td>
        <td class="h3"> {{$item -> comment}} </td>
        <form action="/index/state/{{$item->id}}" method="post">
            @csrf
            @if($item -> state === 0)
            <td><input class="btn" type="submit" name="state" value="作業中">
            </td>
            @else
            <td>
                <input class="btn" type="submit" name="state" value="完了">
            </td>
            @endif
        </form>
        <form action="/index/delete/{{$item->id}}" method="post">
            @csrf
            <td>
                <input class="btn" type="submit" name="delete" value="削除">
            </td>
        </form>
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
