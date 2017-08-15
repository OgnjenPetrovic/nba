

<h1 class="blog-post-title">{{ $team->name }}</h1>
<h3 class="blog-post-title">{{ $team->email }}</h3>
<h3 class="blog-post-title">{{ $team->address }}</h3>
<h3 class="blog-post-title">{{ $team->city }}</h3>

@foreach($team->players as $player)
        <li>
            <strong><a href="/players/{{ $player->id }}">{{ $player->first_name }}</a></strong>
            <strong><a href="/players/{{ $player->id }}">{{ $player->last_name }}</a></strong>
        </li>
 
@endforeach

