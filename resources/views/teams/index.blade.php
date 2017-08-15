@foreach($teams as $team)

	 <h2 class="blog-post-title"><a href="/teams/{{ $team->id }}">{{ $team->name }}</a></h2>

 @endforeach


 			@if (Auth::check())
            	<a class="nav-link ml-auto" href="#"> {{ Auth()->user()->name }} </a>
            	<a class="nav-link" href="/logout">Logout</a>
            @else
                <a class="nav-link ml-auto" href="/login">Login</a>
                <a class="nav-link" href="/register">Register</a>
            @endif