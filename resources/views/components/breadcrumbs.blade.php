@props(['links'])

<nav class="breadcrumbs">
	<div class="container">
		<ul class="breadcrumbs-list">
			@foreach ($links as $link => $label)
				@if ($loop->last)
					<li class="breadcrumb">
						{{ $label }}
					</li>
				@else
					<li class="breadcrumb">
						<a href="{{ $link }}">{{ $label }}</a>
					</li>
				@endif
			@endforeach
		</ul>
	</div>
</nav>
