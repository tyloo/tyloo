<div class="col-sm-3 hidden-xs">
    <div class="heading-footer"><h4>From the Blog</h4></div>
    <ul class="list-arrow">
        @forelse($lastPosts as $post)
            <li><a href="{{ URL::route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></li>
        @empty
            <li><p>No Post found in the database.</p></li>
        @endforelse
    </ul>
</div>
