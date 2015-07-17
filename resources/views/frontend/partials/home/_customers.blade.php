@if(!empty($customers))
    @foreach($customers as $customer)
        <div class="col-sm-2 col-xs-4 mb30-xs" data-sr="enter left">
            <a href="{{ $customer->link }}" target="_blank"><img src="{{ asset($customer->image) }}" class="img-responsive clients-img" alt="{{ $customer->name }}"></a>
        </div>
    @endforeach
@else
    <div class="col-md-12">
        <p>There is no Customer in the database.</p>
    </div>
@endif
