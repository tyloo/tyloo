@if(!empty($works))
    <div id="owl-carousel-thumb" class="owl-carousel">
    @foreach($works as $work)
        <div class="thumbnail">
            <div class="caption v-wrap">
                <div class="thumbnail-caption-holder v-box">
                    <h4 class="text-white">{{ $work->title }}</h4>
                    <a href="{{ URL::route('works.show', ['slug' => $work->slug]) }}" class="btn btn-rw btn-clear"><i class="fa fa-search"></i> View</a>
                </div>
            </div>
            <img src="{{ asset($work->image) }}" alt="...">
        </div>
    @endforeach
    </div>
@else
    <p>There is no Work in the database.</p>
@endif
