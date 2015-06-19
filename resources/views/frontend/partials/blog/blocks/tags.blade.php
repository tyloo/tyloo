<div class="blog-heading">
    <h3>Tags</h3>
</div>
<ul class="list-unstyled latest-posts">
    @foreach($postTags as $tag)
    <li>
        <h3 class="no-margin"><a href="#">{{ $tag->name }} ({{ $tag->posts->count() }})</a></h3>
        <p>
            {{ $tag->content }}
        </p>
    </li>
    @endforeach
</ul>
