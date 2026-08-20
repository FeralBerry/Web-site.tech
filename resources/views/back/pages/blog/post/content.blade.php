<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="form-wrap">
                        <form action="{{ route('back-seo-post') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">URL</label>
                                <input type="text" name="url" class="form-control" placeholder="URL">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Keywords</label>
                                <textarea class="form-control" name="keywords" rows="5" placeholder="keywords"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Description</label>
                                <textarea class="form-control" name="description" rows="5" placeholder="description"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
