@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.role.store') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Role Information</h6>
                        <a href="{{ Route('admin.role.index') }}" class="btn btn-primary btn-sm text-uppercase">Go Back</a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label require"><b>Name</b></label>
                            <input type="text" placeholder="Name" class="form-control custom-input" id="name" name="name" required value="{{ old('name') }}" minlength="3">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end p-3">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
