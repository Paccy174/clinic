@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Student</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('doctor.update', $doctor->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="Name" name="Name" value="{{ $doctor->Name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="Age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="Age" name="Age" value="{{ $doctor->Age }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="Region" class="form-label">Region</label>
                                <input type="text" class="form-control" id="Region" name="Region" value="{{ $doctor->Region }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="Country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="Country" name="Country" value="{{ $doctor->Country }}" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('doctor.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection