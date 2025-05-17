@extends('layouts.app')

@section('title', 'Students List')

@section('content')
    <div class="row mb-4">
        <div class="col-md-8">
            <h2><b>School Management</b></h2>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('doctor.create') }}" class="btn btn-primary">Add New Student</a>
        </div>
    </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Region</th>
                    <th>Country</th>
                    <th width="180px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->Name }}</td>
                    <td>{{ $doctor->Age }}</td>
                    <td>{{ $doctor->Region }}</td>
                    <td>{{ $doctor->Country }}</td>
                    <td class="d-flex justify-content-between">
                        <a href="{{ route('doctor.show', $doctor->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Student?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection