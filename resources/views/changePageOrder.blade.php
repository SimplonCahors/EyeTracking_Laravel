@extends('layout.app')

@section('title')
    Page Order
@endsection
@section('extrajs')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script src="http://rubaxa.github.io/Sortable/Sortable.js"></script>
@endsection


@section('content')
<ul id="order_pages">
@foreach($pages as $page)
<li><span>{{$page -> pag_number}}</span></li>
@endforeach
</ul>
@endsection