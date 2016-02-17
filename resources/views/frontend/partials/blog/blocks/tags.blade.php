@if(isset($tags) && $tags->count() > 0)
    <div class="blog-heading">
        <h3>{{ trans('app.blocks.blog.tags.title') }}</h3>
    </div>
    <p class="mb30">
        @foreach($tags as $tag)
            <a href="{{ route('blog.tag', ['slug' => $tag->slug]) }}"><span class="label label-info">{{ $tag->name }}</span></a>
        @endforeach
    </p>
@endif
