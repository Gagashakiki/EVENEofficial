@extends('admin.layouts.admin-main')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0 text-dark">Create new / Edit blog
        </h1>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="submit" method="post" enctype="multipart/form-data" role="form">
              {{csrf_field()}}
              @foreach($blog as $detail)

              <input type="hidden" name="idb" value="{{$detail->id}}">
                <input type="hidden" name="thumbnail" value="{{$detail->thumbnail}}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title1">Title</label>
                        <input type="text" name="judul" value="{{$detail->judul}}" class="form-control" id="title1" placeholder="Enter title.." required>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Writer</label>
                            <div class="input-group">
                                <input type="text" name="penulis" value="{{$detail->penulis}}" maxlength="50" class="form-control" placeholder="Writer's Name"
                                  readonly>
                            </div>
                        </div>
                      <!--  <img src="xxx" id="image-preview" class="img-thumbnail text-center" style="max-height:150px; overflow:hidden;"> -->
                        <p class="text-danger" id="notif"></p>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="isi" class="ckeditor" id="ckeditor" rows="8" placeholder="Enter ..." required>{!!$detail->isi!!}</textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="img-source">Thumbnail</label>
                                <div class="input-group">
                                    <input type="file" name="thumbnailnew" id="img-source" class="form-control-file"
                                      >
                                </div>

                            </div>
                          <img src="{{url('img/blog/'.$detail->thumbnail)}}" id="image-preview" class="img-thumbnail text-center" style="max-height:150px; overflow:hidden;">
                            <p class="text-danger" id="notif"></p>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
                @endforeach
            </form>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
