@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Student Details</h4>
                        <a href="{{ route('doctor.index') }}" class="btn btn-primary">Back to List</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th style="width: 150px;">Name:</th>
                                <td>{{ $doctor->Name }}</td>
                            </tr>
                            <tr>
                                <th>Age:</th>
                                <td>{{ $doctor->Age }}</td>
                            </tr>
                            <tr>
                                <th>Region:</th>
                                <td>{{ $doctor->Region }}</td>
                            </tr>
                            <tr>
                                <th>Country:</th>
                                <td>{{ $doctor->Country }}</td>
                            </tr>
                        </table>
                        <div class="mt-3 d-flex justify-content-between">
                            <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Student?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
