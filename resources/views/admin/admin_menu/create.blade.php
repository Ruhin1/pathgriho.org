@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.admin-menu.store') }}" method="POST" id="store_form">
            @csrf
            <div class="card">
                <div class="card-header p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Add Admin Menu</h6>
                        <a href="{{ Route('admin.admin-menu.index') }}" class="btn btn-primary btn-sm text-uppercase">Go Back</a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="parent_id_first" class="form-label"><b>Root menu</b></label>
                            <div class="custom-select">
                                <select class="form-control select2 custom-select__element" name="parent_id" id="parent_id_first">
                                    <option value="" selected>Select Root</option>
                                    @foreach ($parent_menus as $key=>$parent_menu)
                                    <option value="{{ $parent_menu->id }}">{{ $parent_menu->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12" id="append_wrapper" style="display: none;">

                        </div>
                        <div class="col-12">
                            <label for="name" class="form-label require"><b>Menu Label</b></label>
                            <input type="text" class="form-control custom-input" id="name" name="name" required value="{{ old('name') }}" placeholder="Menu Label">
                        </div>
                        <div class="col-12">
                            <label for="icon" class="form-label"><b>Menu Icon</b></label>
                            <input type="text" class="form-control custom-input" id="icon" name="icon" value="{{ old('icon') }}" placeholder="Menu Icon (Fontawesom 5.0)">
                        </div>
                        <div class="col-12">
                            <label for="route" class="form-label require"><b>Route</b></label>
                            <input type="text" class="form-control custom-input" id="route" name="route" value="{{ old('route') }}" placeholder="Route">
                        </div>
                        <div class="col-12">
                            <label for="order" class="form-label require"><b>Serial</b></label>
                            <input type="number" class="form-control custom-input" id="order" name="order" value="{{ old('order') }}" placeholder="Serial">
                        </div>
                        <div class="col-12">
                            <label for="Status" class="form-label"><b>Status</b></label>
                            <div class="custom-select">
                                <select class="form-control select2 custom-select__element" name="status" id="status">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
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

@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change', '#parent_id_first', function(e){
            e.preventDefault();
            let root_id = $(this).val();
            if(root_id != ''){
                let url = "{{ Route('admin.admin-menu.create') }}";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _method : 'GET',
                        root_id: root_id,
                    },
                    success: function (response) {
                        if(response.status == 'success'){
                            $('#append_wrapper > div').remove();
                            var html =  '<div><label for="parent_id" class="form-label"><b>Parent menu</b></label>'
                                        +'<div class="custom-select">'
                                            +'<select class="form-control select2 custom-select__element" name="parent_id" id="parent_id">'
                                                +'<option value="" selected>Select Parent</option>';
                                                $.each(response.parent_menus, function (key, value) {
                                                    html +='<option value="' + value.id + '">' + value.name + '</option>';
                                                });
                                            html +='</select>'
                                        +'</div></div>';
                            $('#append_wrapper').append(html);
                            $('#append_wrapper').show();
                        }
                    }
                });
            } else {
                $('#append_wrapper > div').remove();
                $('#append_wrapper').hide();
            }
        });

        $(document).on('submit', '#store_form', function(e){
            if($('#parent_id').val() == ''){
                $('#parent_id').val($('#parent_id_first').val());
            }
        });
    });
</script>
@endpush
