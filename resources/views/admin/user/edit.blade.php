@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">User Information</h6>
                        <a href="{{ Route('admin.user.index') }}" class="btn btn-primary btn-sm text-uppercase">Go Back</a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label require"><b>Name</b></label>
                            <input type="text" placeholder="Name" class="form-control custom-input" id="name" name="name" required value="{{ $user->name }}" minlength="3">
                        </div>
                        <div class="col-12">
                            <label for="user_name" class="form-label require"><b>User ID</b></label>
                            <input type="text" class="form-control custom-input" id="user_name" name="user_name" placeholder="User ID" required value="{{ $user->user_name }}">
                        </div>
                        <div class="col-12">
                            <label for="role_id" class="form-label require"><b>Role</b></label>
                            <div class="custom-select">
                                <select class="form-control select2 custom-select__element" name="role_id" id="role_id">
                                    @foreach ($roles as $role)
                                    @if (!Auth::user()->hasRole('System Admin') && $role->name == 'System Admin')
                                        @continue
                                    @endif
                                    <option value="{{ $role->id }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="status" class="form-label"><b>Status</b></label>
                            <div class="custom-select">
                                <select class="form-control select2 custom-select__element" name="status" id="status">
                                    <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="image"><b>Picture <span class="text-danger">(300px X 300px)</span></b></label>
                            <input class="custom-input form-control" name="image" id="image" type="file" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end p-3">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
