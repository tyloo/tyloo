@if($works->count() > 0)
    <div id="owl-carousel-thumb" class="owl-carousel">
        @forelse($works as $work)
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div class="thumbnail-caption-holder">
                            <h4 class="text-white">{{ $work->title }}</h4>
                            <a href="{{ route('works.show', ['slug' => $work->slug]) }}" class="btn btn-rw btn-clear"><span class="ion-android-search"></span> View</a>
                        </div>
                    </div>
                    <img src="{{ asset($work->image) }}" alt="...">
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>{{ trans('app.frontend.home.recent-work.no-work-found') }}</p>
@endif
