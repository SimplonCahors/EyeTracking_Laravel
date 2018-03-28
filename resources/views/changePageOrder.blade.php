@extends('layout.app')

@section('title')
    Page Order
@endsection


@section('content')
<ul>
@foreach($pages as $page)
<li><span>{{$page -> pag_number}}</span><a href="{{route('deletePage',[$page->pag_oid,$idBD])}}"><button>X</button></a></li>
@endforeach
</ul>
@endsection