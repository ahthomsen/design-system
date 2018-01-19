<div class="fixed pin-y pin-l mt-8 hidden md:block">
	<div class="mt-8"></div>
	<ul class="p-8 ml-4">
		<h3 class="p-1">Topics covered</h3>
		@foreach ($views as $link)
			<li class="p-1 list-reset">
				<a href="#{{ $link }}">{{ $link }}</a>
			</li>
		@endforeach
	</ul>
</div>