@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        <p><strong>Whoops!</strong> Houston, we have a problem!</p>
        <p>Please fix those mistakes:</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
