@extends('layout.app')

@section('title')
BD - {{ $comic->comic_title }}
@endsection

@section('content')


<section class="page-titles">
	<h2>{{ $comic->comic_title }}</h2>
	<p>/</p>
</section>
<section class="boards-index">
<div class="gallery-boards">

	@foreach($boards as $board)
	<div class="small-card">
		<a href="{{ route('board-show',[$comic->comic_id, $board->board_id]) }}">
			<img src="{{ $board->board_image }}">
			<p>p - {{ $board->board_number }}</p>
		</a>
	</div>
	@endforeach
</div>
</section>


@endsection