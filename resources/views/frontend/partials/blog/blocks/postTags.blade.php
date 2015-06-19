@if (count($tags) > 0)
    <li>In
    @foreach($tags as $tag)
        <a href="#">{{ $tag->name }}</a>
    @endforeach
    </li>
@endif
