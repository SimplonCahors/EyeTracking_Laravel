@php

foreach ($medias as $media) {

	@endphp
	<li>
		<p>{{ $media->med_type }}</p>
		<p>{{ $media->med_filename }}</p>
		<img src="{{ $media->med_path }}">
	</li>
	@php

}

@endphp