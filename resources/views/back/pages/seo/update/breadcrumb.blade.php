<div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark">{{ $title }}</h5>
    </div>

    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('back-seo-get') }}">SEO</a></li>
            <li class="active"><span>{{ $name }}</span></li>
        </ol>
    </div>

</div>
