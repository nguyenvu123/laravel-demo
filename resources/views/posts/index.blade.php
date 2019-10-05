

@if(count($posts) >0)

	@foreach($posts as $post)
		<div>
			<h2> <a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
			<br />
			<p><a href="/posts/{{ $post->id }}/edit/edit">eidit post</a></p>
		</div>
	@endforeach

	<div>
		<p>crate post <a href="/posts/create">create</a></p>
	</div>

	<div class="editpost">
		<div>
			
		</div>
	</div>


@endif
