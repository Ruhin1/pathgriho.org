@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route('admin.admin-menu.update', $menu->id) }}" method="POST" id="update_form">
            @csrf
            @method('PUT')
            <input type="hidden" id="menu_id" value="{{ $menu->id }}">
            <div class="card">
                <div class="card-header p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Update Menu</h6>
                        <a href="{{ Route('admin.admin-menu.index') }}" class="btn btn-primary btn-sm text-uppercase">Go Back</a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        @if(count($root_menus) > 0)
                        <div class="col-12">
                            <label for="parent_id_first" class="form-label"><b>Root menu</b></label>
                            <div class="custom-select">
                                <select class="form-control select2 custom-select__element" name="parent_id" id="parent_id_first">
                                    <option value="" selected>Select Root</option>
                                    @foreach ($root_menus as $key=>$root_menu)
                                    <option value="{{ $root_menu->id }}" {{ $menu->parent_id == $root_menu->id || $selected_root_menu_id == $root_menu->id ? 'selected' : '' }}>{{ $root_menu->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif
                        <div class="col-12" id="append_wrapper" @if($parent_menus == 0) style="display: none;" @endif>
                            @if($parent_menus == 1)
                            <label for="parent_id" class="form-label"><b>Parent menu</b></label>
                            <div class="custom-select">
                                <select class="form-control select2 custom-select__element" name="parent_id" id="parent_id">
                                    <option value="" selected>Select Root</option>
                                    @foreach ($root_menus as $key=>$root_menu)
                                        @foreach ($root_menu->children as $key=>$parent_menu)
                                        <option value="{{ $parent_menu->id }}" {{ $menu->parent_id == $parent_menu->id ? 'selected' : '' }}>{{ $parent_menu->name }}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                            @endif
                        </div>
                        <div class="col-12">
                            <label for="name" class="form-label require"><b>Menu Label</b></label>
                            <input type="text" class="form-control custom-input" id="name" name="name" required value="{{ $menu->name }}" placeholder="Menu Label">
                        </div>
                        <div class="col-12">
                            <label for="icon" class="form-label"><b>Menu Icon</b></label>
                            <input type="text" class="form-control custom-input" id="icon" name="icon" value="{{ $menu->icon }}" placeholder="Menu Icon (Fontawesom 5.0)">
                        </div>
                        <div class="col-12">
                            <label for="route" class="form-label require"><b>Route</b></label>
                            <input type="text" class="form-control custom-input" id="route" name="route" value="{{ $menu->route }}" placeholder="Route">
                        </div>
                        <div class="col-12">
                            <label for="order" class="form-label require"><b>Serial</b></label>
                            <input type="number" class="form-control custom-input" id="order" name="order" required value="{{ $menu->order }}" placeholder="Serial">
                        </div>
                        <div class="col-12">
                            <label for="Status" class="form-label"><b>Status</b></label>
                            <div class="custom-select">
                                <select class="form-control select2 custom-select__element" name="status" id="status">
                                    <option value="1" {{ $menu->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $menu->status == 0 ? 'selected' : '' }}>Inactive</option>
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

@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change', '#parent_id_first', function(e){
            e.preventDefault();
            let menu_id = $('#menu_id').val();
            let root_id = $(this).val();
            if(root_id != ''){
                let url = "{{ Route('admin.admin-menu.edit', $menu->id) }}";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _method: 'GET',
                        root_id: root_id,
                        menu_id: menu_id,
                    },
                    success: function (res) {
                        if(res.status == 'success'){
                            $('#append_wrapper > *').remove();
                            if(res.parent_menus.length > 0){
                                var html =  '<div><label for="parent_id" class="form-label"><b>Parent menu</b></label>'
                                            +'<div class="custom-select">'
                                                +'<select class="form-control select2 custom-select__element" name="parent_id" id="parent_id">'
                                                    +'<option value="" selected>Select Parent</option>';
                                                    $.each(res.parent_menus, function (key, value) {
                                                        html +='<option value="' + value.id + '">' + value.name + '</option>';
                                                    });
                                                html +='</select>'
                                            +'</div></div>';
                                $('#append_wrapper').append(html);
                                $('#append_wrapper').show();
                            } else {
                                $('#append_wrapper').hide();
                            }
                        }
                    }
                });
            } else {
                $('#append_wrapper > *').remove();
                $('#append_wrapper').hide();
            }
        });

        $(document).on('submit', '#update_form', function(e){
            if($('#parent_id').val() == ''){
                $('#parent_id').val($('#parent_id_first').val());
            }
        });
    });
</script>
@endpush
