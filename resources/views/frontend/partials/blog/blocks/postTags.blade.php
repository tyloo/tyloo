@if (count($tags) > 0)
    <li>In
    @foreach($tags as $tag)
        <a href="{{ URL::route('blog.tag', ['slug' => $tag->slug]) }}">{{ $tag->name }}</a>
    @endforeach
    </li>
@endif
