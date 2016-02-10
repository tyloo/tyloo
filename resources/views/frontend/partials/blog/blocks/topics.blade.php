@if(isset($topics) && $topics->count() > 0)
    <div class="blog-heading">
        <h3>{{ trans('app.blocks.blog.topics.title') }}</h3>
    </div>
    <p class="mb30">
        @foreach($topics as $topic)
            <a href="{{ route('blog.topic', ['slug' => $topic->slug]) }}"><span class="label label-info">{{ $topic->name }}</span></a>
        @endforeach
    </p>
@endif
