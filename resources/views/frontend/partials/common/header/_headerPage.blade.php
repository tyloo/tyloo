<!-- Page Header -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h1>{{ $pageName }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb text-white link-white">
                    <li><i class="fa fa-home breadcrumb-home"></i><a href="{{ route('home') }}">{{ trans('app.menu.home') }}</a></li>
                    <li><strong>{{ $pageNameBreadcrumb }}</strong></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /Page Header -->
