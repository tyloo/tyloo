<div class="blog-heading">
    <h3>Last Posts</h3>
</div>
<ul class="list-unstyled latest-posts">
    @forelse($lastPosts as $post)
    <li>
        <h3 class="no-margin"><a href="{{ route('blog.show', ['slug', $post->slug]) }}">{{ $post->title }}</a></h3>
        <small>
            <ul class="list-inline posted-info">
                <li>{{ $post->created_at->diffForHumans() }}</li>
            </ul>
        </small>
        {!! $post->excerpt !!}
    </li>
    @empty
        <li>No post were found.</li>
    @endforelse
</ul>
