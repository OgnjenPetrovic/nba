

	 <h2 class="blog-post-title">{{ $player->first_name }}</h2>
	 <h2 class="blog-post-title">{{ $player->last_name }}</h2>
	 <h2 class="blog-post-title">{{ $player->email }}</h2>
	 <h2 class="blog-post-title"><a href="/teams/{{ $player->team->id }}">{{ $player->team->name }}</a></h2>
