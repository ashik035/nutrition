@extends('admin.layouts.admin')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">About Me</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About Me</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid mt-5">
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('admin.about.update') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        @if (session()->has('success'))
                            <div class="alert alert-success" id="successMessage">
                                @if(is_array(session('success')))
                                    <ul>
                                        @foreach (session('success') as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    {{ session('success') }}
                                @endif
                            </div>
                        @endif
                        <textarea class="form-control admin-about-textarea" name="about_me" id="about-me" rows="3">{{ old('about_me', $about_me) }} </textarea>
                    </div>
                    @if (count($errors) > 0)
                        <div class = "alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-admin">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            setTimeout(function() {
                $('#successMessage').fadeOut();
            }, 3000);
        });
    </script>
@endsection