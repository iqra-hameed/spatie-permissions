@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Company</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a>
                </div>
            </div>
        </div>


        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $company->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>email:</strong>
                    {{ $company->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>logo:</strong>
                    {{ $company->logo }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>website:</strong>
                    {{ $company->website }}
                </div>
            </div>
        </div>
    </div>
@endsection
