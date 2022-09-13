@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Employee</h2>
                </div>
                <div class="pull-right m-3">
                    @can('employee-create')
                        <a class="btn btn-success" href="{{ route('employee.create') }}"> Create New Employee</a>
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
                <th>F-Name</th>
                <th>L-Name</th>
                <th>Company_id</th>
                <th>Email</th>
                <th>Phone</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($employee as $emp)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $emp->first_name }}</td>
                    <td>{{ $emp->last_name }}</td>
                    <td>{{ $emp->company_id }}</td>
                    <td>{{ $emp->email }}</td>
                    <td>{{ $emp->phone }}</td>
                    <td>
                        <form action="{{ route('employee.destroy', $emp->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('employee.show', $emp->id) }}">Show</a>
                            @can('employee-edit')
                                <a class="btn btn-primary" href="{{ route('employee.edit', $emp->id) }}">Edit</a>
                            @endcan


                            @csrf
                            @method('DELETE')
                            @can('employee-delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    {!! $employee->links() !!}
@endsection
