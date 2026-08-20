<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-4 col-xs-12 mt-15">
            <a href="{{ route('back-blog-post-index') }}" class="btn btn-warning btn-block btn-outline btn-anim"><i class="fa fa-plus-circle"></i><span class="btn-text">Add new blog</span></a>
        </div>
        <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap mt-40">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mb-0">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Text</th>
                                    <th>Img</th>
                                    <th>Icon</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blog as $b)
                                    <tr>
                                        <td>{{ $b->title }}</td>
                                        <td>{{ $b->text }}</td>
                                        <td>{{ $b->img }}</td>
                                        <td>
                                            Type img: {!! $b->type_img !!}<br>
                                            Author: {{ $b->author }}<br>
                                            Type string: {{ $b->type_string }}
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="{{ route('back-blog-update-index',$b->id) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="{{ route('back-blog-delete', $b->id) }}" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
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
