@if (count($tags) > 0)
    <li>In
    @foreach($tags as $tag)
        <span class="label label-primary">{{ $tag->name }}</span>
    @endforeach
    </li>
@endif
