<h1>
    @foreach($items as $item)
    {{$item->id}}
    {{$item->comment}}
    @if($item->state == true)
    {{$item->state}}
    @else
    完了
    @endif
    @endforeach
</h1>
