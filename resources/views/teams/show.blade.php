

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




@foreach($team->comments as $comment)
        <li>
            <strong>{{ $comment->created_at->diffForHumans() }}</strong>
            {{ $comment->content }}
        </li>
@endforeach


<h4>Comments</h4>

    <form method="POST" action="/teams/{{ $team->id }}/comment">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>