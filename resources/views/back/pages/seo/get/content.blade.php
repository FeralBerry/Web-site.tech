<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-4 col-xs-12 mt-15">
            <a href="{{ route('back-seo-post-index') }}" class="btn btn-warning btn-block btn-outline btn-anim"><i class="fa fa-plus-circle"></i><span class="btn-text">Add new seo settings</span></a>
        </div>
        <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap mt-40">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mb-0">
                                <thead>
                                <tr>
                                    <th>Url</th>
                                    <th>Title</th>
                                    <th>Keywords</th>
                                    <th>Description</th>
                                    <th>Img</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($seo as $s)
                                    <tr>
                                        <td>{{ $s->url }}</td>
                                        <td>{{ $s->title }}</td>
                                        <td>{{ $s->keywords }}</td>
                                        <td>{{ $s->description }}</td>
                                        <td>{{ $s->img }}</td>
                                        <td class="text-nowrap">
                                            <a href="{{ route('back-seo-update-index',$s->id) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="{{ route('back-seo-delete', $s->id) }}" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
