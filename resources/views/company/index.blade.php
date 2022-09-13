@extends('layouts.app')


@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Company</h2>
                </div>
                <div class="pull-right m-3">
                    @can('company-create')
                        <a class="btn btn-success" href="{{ route('company.create') }}"> Create New Company</a>
                    @endcan
                </div>
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>

                <th>Website</th>
                <th>Logo</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($company as $com)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $com->name }}</td>
                    <td>{{ $com->email }}</td>
                    <td>{{ $com->website }}</td>
                    <td><img src="{{ asset('image/' . $com->logo) }}" width="50%" alt=""></td>
                    <td>
                        <form action="{{ route('company.destroy', $com->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('company.show', $com->id) }}">Show</a>
                            @can('company-edit')
                                <a class="btn btn-primary" href="{{ route('company.edit', $com->id) }}">Edit</a>
                            @endcan


                            @csrf
                            @method('DELETE')
                            @can('company-delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>

        {!! $company->links() !!}
    </div>
@endsection
