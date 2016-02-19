@if($customers->count() > 0)
    <div id="owl-carousel-thumb-customers" class="owl-carousel">
        @foreach($customers as $customer)
            <div class="thumbnail">
                <a href="{{ $customer->link }}" target="_blank"><img src="{{ asset($customer->image) }}" class="img-responsive clients-img" alt="{{ $customer->name }}"></a>
            </div>
        @endforeach
    </div>
@else
    <p>{{ trans('app.frontend.home.customers.no-customer-found') }}</p>
@endif
