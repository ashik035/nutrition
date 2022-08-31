@extends('admin.layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mt-4 text-center">
        <div class="pull-left">
            <h2>Add New Post</h2>
        </div>
    </div>
</div>

<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-8 offset-md-2 offset-xs-2 offset-sm-2 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Post Title:</strong>
                <input type="text" class="form-control" name="title"/>
                @if ($errors->has('title'))
                    <span role="alert">
                        <strong class="text-danger">{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 offset-md-2 offset-xs-2 offset-sm-2">
            <div class="form-group">
                <strong>Post Details:</strong>
                <textarea class="form-control" style="height:150px" name="details">{{ old('details') }}</textarea>
                @if ($errors->has('details'))
                    <span role="alert">
                        <strong class="text-danger">{{ $errors->first('details') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xs-8 offset-md-2 offset-xs-2 offset-sm-2 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Post Type:</strong>
                <select class="form-control" name="type" id="type">
                    <option value="">Select a Type</option>
                    <option value="image">Image</option>
                    <option value="video">Video</option>
                    <option value="youtube">Yutube</option>
                </select>
                @if ($errors->has('type'))
                    <span role="alert">
                        <strong class="text-danger">{{ $errors->first('type') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 offset-md-2 offset-xs-2 offset-sm-2">
            <div class="form-group" id="media_part1">
                <strong>Image:</strong>
                <input type="file" name="media">
                @if ($errors->has('media'))
                    <span role="alert">
                        <strong class="text-danger">{{ $errors->first('media') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group" id="media_part2">
                <strong>Video:</strong>
                <input type="file" name="media">
                @if ($errors->has('media'))
                    <span role="alert">
                        <strong class="text-danger">{{ $errors->first('media') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group" id="media_part3">
                <strong>Youtube URL:</strong>
                <input type="text" class="form-control"  name="media"/>
                @if ($errors->has('media'))
                    <span role="alert">
                        <strong class="text-danger">{{ $errors->first('media') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 text-center offset-md-2 offset-xs-2 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $( document ).ready(function() {
        $('#media_part1').hide()
        $('#media_part2').hide()
        $('#media_part3').hide()
        $('#type').on('change', function() {
            var val =  $(this).find(":selected").val()
            if (val == 'image') {
                $('#media_part2').hide()
                $('#media_part3').hide()
                $('#media_part1').show()
            } else if (val == 'video') {
                $('#media_part1').hide()
                $('#media_part3').hide()
                $('#media_part2').show()
            } else if (val == 'youtube') {
                $('#media_part1').hide()
                $('#media_part2').hide()
                $('#media_part3').show()
            } else {
                $('#media_part1').hide()
                $('#media_part2').hide()
                $('#media_part3').hide()
            }
    });
    });
</script>
@endsection