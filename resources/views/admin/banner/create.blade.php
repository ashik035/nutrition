@extends('admin.layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mt-4 text-center">
        <div class="pull-left">
            <h2>Add New Banner</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger col-xs-8 offset-md-2 offset-xs-2 offset-sm-2 col-sm-8 col-md-8">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.banner.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-8 offset-md-2 offset-xs-2 offset-sm-2 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Banner Header:</strong>
                <textarea class="form-control" style="height:150px" name="header" placeholder="Add header"></textarea>
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 offset-md-2 offset-xs-2 offset-sm-2">
            <div class="form-group">
                <strong>Sub Header:</strong>
                <textarea class="form-control" style="height:150px" name="sub_header" placeholder="Add sub header"></textarea>
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 offset-md-2 offset-xs-2 offset-sm-2 mb-3">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image">
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 text-center offset-md-2 offset-xs-2 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection