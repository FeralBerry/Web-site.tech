<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="form-wrap">
                        @foreach($seo as $s)
                            <form action="{{ route('back-seo-update',$s->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $s->title }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">URL</label>
                                    <input type="text" name="url" class="form-control" placeholder="URL" value="{{ $s->url }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Keywords</label>
                                    <textarea class="form-control" name="keywords" rows="5" placeholder="keywords">{{ $s->keywords }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Description</label>
                                    <textarea class="form-control" name="description" rows="5" placeholder="description">{{ $s->description }}</textarea>
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
