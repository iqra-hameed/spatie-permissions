@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="pull-left ">
                    <h2 class="m-3">Add New Company</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a>
                </div>
            </div>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('company.store') }}" method="POST">
            @csrf


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <strong>Logo:</strong>
                        <input type="file" name="logo" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Website:</strong>
                        <input type="text" name="website" class="form-control" placeholder="Website">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center m-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>


        </form>

    </div>

@endsection
