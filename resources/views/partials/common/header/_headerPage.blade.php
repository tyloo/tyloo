<!-- Page Header -->
<div class="header" style="background: #ff7454 url('{{ asset('assets/img/backgrounds/bg1.png') }}');">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h1 class="text-white">{{ $pageName }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb text-white link-white">
                    <li><span class="ion-home breadcrumb-home"></span><a href="{{ URL::route('home') }}">Home</a></li>
                    <li><strong>{{ $pageNameBreadcrumb }}</strong></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /Page Header -->
