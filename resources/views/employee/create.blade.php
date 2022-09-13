@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="pull-left ">
                    <h2 class="m-3">Add New Employee</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
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


        <form action="{{ route('employee.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>First_name:</strong>
                        <input type="text" name="first_name" class="form-control" placeholder="first_name">
                    </div>
                    <div class="form-group">
                        <strong>Last_name:</strong>
                        <input type="text" name="last_name" class="form-control" placeholder="last_name">
                    </div>
                    <div class="form-group">
                        <label> select company </label>
                        <select class="form-control leads_show" id="batch-dropdown" name="company_id" style="padding: 1%">

                            @foreach ($com as $data)
                                <option value="{{ $data->id }}"> {{ $data->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" name="email" class="form-control" placeholder="email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Phone:</strong>
                        <input type="text" name="phone" class="form-control" placeholder="phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center m-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>


        </form>

    </div>

@endsection
