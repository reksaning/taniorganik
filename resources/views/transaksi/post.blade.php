<h2>{{$post->title}}</h2>
		<p>{{$post->created_at->toFormattedDateString()}} </p>
          <p>{{$post->body}} </p>
          <p><a class="btn btn-primary" href="/posts/{{$post->id}}" " role="button">View details &raquo;</a></p>