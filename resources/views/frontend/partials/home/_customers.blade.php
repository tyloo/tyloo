@if($customers->count() > 0)
    <div id="owl-carousel-thumb-customers" class="owl-carousel">
        @foreach($customers as $customer)
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div class="thumbnail-caption-holder">
                            <a href="{{ $customer->link }}" target="_blank"><h4 class="text-white">{{ $customer->name }}</h4></a>
                        </div>
                    </div>
                    <img src="{{ asset($customer->image) }}" class="img-responsive clients-img" alt="{{ $customer->name }}">
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>There is no Customer in the database.</p>
@endif
