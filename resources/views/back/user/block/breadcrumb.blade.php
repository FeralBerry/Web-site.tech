<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        @if(isset($breadcrumb))
            @foreach($breadcrumb as $item)
                @php
                    $count_breadcrumb = count($item->breadcrumbMenuPage);
                    $i = 0;
                @endphp
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">
                        @if($lang == 0)
                            {{ $item->title_ru ?? '' }}
                        @endif
                        @if($lang == 1)
                            {{ $item->title_eng ?? '' }}
                        @endif
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        @foreach($item->breadcrumbMenuPage as $b)
                            @php $i++; @endphp
                            @if($lang == 0)
                                @if($i == $count_breadcrumb)
                                    <li class="breadcrumb-item active">{{ $b->name_ru }}</li>
                                @else
                                    <li class="breadcrumb-item active"><a href="{{ Request::root().$b->link }}">{{ $b->name_ru }}</a></li>
                                @endif
                            @endif
                            @if($lang == 1)
                                @if($i == $count_breadcrumb)
                                    <li class="breadcrumb-item active">{{ $b->name_eng }}</li>
                                @else
                                    <li class="breadcrumb-item active"><a href="{{ Request::root().$b->link }}">{{ $b->name_eng }}</a></li>
                                @endif
                            @endif
                        @endforeach
                    </ol>
                </div>
            </div>
            @endforeach
        @endif
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
