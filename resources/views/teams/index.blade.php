@foreach($teams as $team)

	 <h2 class="blog-post-title"><a href="/teams/{{ $team->id }}">{{ $team->name }}</a></h2>

 @endforeach