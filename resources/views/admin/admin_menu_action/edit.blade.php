@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.admin-menuAction.update', $action->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Update Admin Menu Action</h6>
                        <a href="{{ Route('admin.admin-menuAction.index', $action->admin_menu_id) }}" class="btn btn-primary btn-sm text-uppercase">Go Back</a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label require"><b>Action Label</b></label>
                            <input type="text" class="form-control custom-input" id="name" name="name" required value="{{ $action->name }}" placeholder="Action Label">
                        </div>
                        <div class="col-12">
                            <label for="route" class="form-label require"><b>Route</b></label>
                            <input type="text" class="form-control custom-input" id="route" name="route" required value="{{ $action->route }}" placeholder="Route">
                        </div>
                        <div class="col-12">
                            <label for="Status" class="form-label"><b>Status</b></label>
                            <div class="custom-select">
                                <select class="form-control select2 custom-select__element" name="status" id="status">
                                    <option value="1" {{ $action->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $action->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
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
