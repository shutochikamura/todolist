@extends('layouts.app')

@section('title', 'TodoList')

@section('content')

<tr class="todo-radio">
    <td> <input class="radio" type="radio" name="stateList" value="" checked="checked"></td>
    すべて
    <td><input class="radio" type="radio" name="stateList" value="progress"></td>
    作業中
    <td><input class="radio" type="radio" name="stateList" value="done"></td>
    完了
</tr>

<table>
    <tr>
        <th>ID</th>
        <th>コメント</th>
        <th>状態</th>
    </tr>

    @foreach($items as $item)

    <tr class="task">
        <td class="h3"> {{$loop -> iteration}} </td>
        <td class="h3"> {{$item -> comment}} </td>
        <form action="/index/state/{{$item->id}}" method="post">
            @csrf
            @if($item -> state === 0)
            <div>
                <td><input class="btn progress" type="submit" name="state" value="作業中">
                </td>
            </div>
            @else
            <div>
                <td>
                    <input class="btn done" type="submit" name="state" value="完了">
                </td>
            </div>
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

<script src="{{mix('js/task.js')}}"></script>
@endsection
