@extends('admin.layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mb-5 mt-4 text-center">
            <div class="pull-left">
                <h2> Showing Blog Details</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <table class="table table-striped table-dark w-100 ">
                <thead>
                    <tr>
                        <th scope="col" class="text-white">Type</th>
                        <th scope="col" class="text-white">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col" class="text-white">Title</td>
                        <td>{{ $blog->title }}</td>
                    </tr>
                    <tr>
                        <td scope="col" class="text-white">Details</td>
                        <td>{{ $blog->details }}</td>
                    </tr>
                    <tr>
                        <td scope="col" class="text-white">Image</td>
                        <td scope="col" class="text-white"><img src={{ asset("storage/images/blog/$blog->image") }} height="200px" width="200px" alt="blog"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection