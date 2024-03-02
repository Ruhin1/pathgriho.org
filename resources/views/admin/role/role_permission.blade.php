@extends('layouts.admin.app')

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <form action="{{ Route('admin.rolePermission.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="h6 mb-0 text-uppercase">Setup Permissions</h6>
                            <a href="{{ Route('admin.role.index') }}" class="btn btn-primary btn-sm text-uppercase">Go
                                Back</a>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox d-flex gap-2">
                                    <input type="checkbox" id="checkAll" class="custom-control-input">
                                    <label class="form-label custom-control-label c-pointer" for="checkAll"><b>Check
                                            All</b></label>
                                </div>
                            </div>
                            <div class="col-12 custom-accordion">
                                <div class="accordion" id="roleAccordionParentGroup">
                                    @foreach ($root_menus as $key => $root_menu)
                                        @if (auth()->user()->can($root_menu->permission->name))
                                            <div class="accordion-item">
                                                <div class="bg-success d-flex align-items-center">
                                                    <div
                                                        class="flex-shrink-0 ms-2 custom-control custom-checkbox d-flex gap-2">
                                                        <input type="checkbox" class="custom-control-input check_group"
                                                            name="permission_id[]" id="{{ $root_menu->id }}"
                                                            value="{{ $root_menu->permission_id }}"
                                                            {{ in_array($root_menu->permission_id, $permission_id) ? 'checked' : '' }}>
                                                        <label class="form-label custom-control-label c-pointer"
                                                            for="{{ $root_menu->id }}"></label>
                                                    </div>
                                                    <div class="accordion-header flex-grow-1"
                                                        id="parentGroup{{ $root_menu->id }}">
                                                        <button class="accordion-button collapsed text-white bg-success"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#parentGroupcollapse{{ $root_menu->id }}"
                                                            aria-expanded="false"
                                                            aria-controls="parentGroupcollapse{{ $root_menu->id }}">
                                                            {{ $root_menu->name }}
                                                        </button>
                                                    </div>
                                                </div>
                                                @if (count($root_menu->children) > 0)
                                                    <div id="parentGroupcollapse{{ $root_menu->id }}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="parentGroup{{ $root_menu->id }}"
                                                        data-bs-parent="#roleAccordionParentGroup">
                                                        <div class="accordion-body">
                                                            <div class="accordion"
                                                                id="roleAccordionChildGroup{{ $root_menu->id }}">
                                                                @foreach ($root_menu->children as $child_key => $child_menu)
                                                                    @if (auth()->user()->can($child_menu->permission->name))
                                                                        <div class="accordion-item">
                                                                            <div class="bg-info d-flex align-items-center">
                                                                                <div
                                                                                    class="flex-shrink-0 ms-2 custom-control custom-checkbox d-flex gap-2">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input check_group"
                                                                                        name="permission_id[]"
                                                                                        id="{{ $child_menu->id }}"
                                                                                        value="{{ $child_menu->permission_id }}"
                                                                                        {{ in_array($child_menu->permission_id, $permission_id) ? 'checked' : '' }}>
                                                                                    <label
                                                                                        class="form-label custom-control-label c-pointer"
                                                                                        for="{{ $child_menu->id }}"></label>
                                                                                </div>
                                                                                <h2 class="accordion-header flex-grow-1"
                                                                                    id="ChildGroup{{ $child_menu->id }}">
                                                                                    <button
                                                                                        class="accordion-button collapsed text-white bg-info"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#childGroupcollapse{{ $child_menu->id }}"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="childGroupcollapse{{ $child_menu->id }}">
                                                                                        {{ $child_menu->name }}
                                                                                    </button>
                                                                                </h2>
                                                                            </div>
                                                                            @if (count($child_menu->children) > 0)
                                                                                <div id="childGroupcollapse{{ $child_menu->id }}"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="childGroupcollapse{{ $child_menu->id }}"
                                                                                    data-bs-parent="#roleAccordionChildGroup{{ $root_menu->id }}">
                                                                                    <div class="accordion-body">
                                                                                        <div class="accordion"
                                                                                            id="roleAccordionSubChildGroup{{ $child_menu->id }}">
                                                                                            @foreach ($child_menu->children as $key => $subchild)
                                                                                                @if (auth()->user()->can($subchild->permission->name))
                                                                                                    <div
                                                                                                        class="accordion-item">
                                                                                                        <div
                                                                                                            class="bg-dark d-flex align-items-center">
                                                                                                            <div
                                                                                                                class="flex-shrink-0 ms-2 custom-control custom-checkbox d-flex gap-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    class="custom-control-input check_group"
                                                                                                                    name="permission_id[]"
                                                                                                                    id="{{ $subchild->id }}"
                                                                                                                    value="{{ $subchild->permission_id }}"
                                                                                                                    {{ in_array($subchild->permission_id, $permission_id) ? 'checked' : '' }}>
                                                                                                                <label
                                                                                                                    class="form-label custom-control-label c-pointer"
                                                                                                                    for="{{ $subchild->id }}"></label>
                                                                                                            </div>
                                                                                                            <h2 class="accordion-header flex-grow-1"
                                                                                                                id="subChildGroup{{ $subchild->id }}">
                                                                                                                <button
                                                                                                                    class="accordion-button collapsed text-white bg-dark"
                                                                                                                    type="button"
                                                                                                                    data-bs-toggle="collapse"
                                                                                                                    data-bs-target="#subchildGroupcollapse{{ $subchild->id }}"
                                                                                                                    aria-expanded="false"
                                                                                                                    aria-controls="subchildGroupcollapse{{ $subchild->id }}">
                                                                                                                    {{ $subchild->name }}
                                                                                                                </button>
                                                                                                            </h2>
                                                                                                        </div>
                                                                                                        @if (count($subchild->actions) > 0)
                                                                                                            <div id="subchildGroupcollapse{{ $subchild->id }}"
                                                                                                                class="accordion-collapse collapse"
                                                                                                                aria-labelledby="subchildGroupcollapse{{ $subchild->id }}"
                                                                                                                data-bs-parent="#roleAccordionSubChildGroup{{ $child_menu->id }}">
                                                                                                                <div
                                                                                                                    class="accordion-body">
                                                                                                                    <div
                                                                                                                        class="d-flex gap-3 flex-wrap">
                                                                                                                        @foreach ($subchild->actions as $key => $action)
                                                                                                                            @if (auth()->user()->can($action->permission->name))
                                                                                                                                <div
                                                                                                                                    class="w-fit">
                                                                                                                                    <div
                                                                                                                                        class="custom-control custom-checkbox d-flex gap-2">
                                                                                                                                        <input
                                                                                                                                            class="custom-control-input"
                                                                                                                                            type="checkbox"
                                                                                                                                            name="permission_id[]"
                                                                                                                                            id="permission{{ $action->id }}"
                                                                                                                                            value="{{ $action->permission_id }}"
                                                                                                                                            {{ in_array($action->permission_id, $permission_id) ? 'checked' : '' }}>
                                                                                                                                        <label
                                                                                                                                            for="permission{{ $action->id }}"
                                                                                                                                            class="custom-control-label c-pointer">{{ $action->name }}</label>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            @endif
                                                                                                                        @endforeach
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                    </div>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @elseif (count($child_menu->actions) > 0)
                                                                                <div id="childGroupcollapse{{ $child_menu->id }}"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="childGroupcollapse{{ $child_menu->id }}"
                                                                                    data-bs-parent="#roleAccordionChildGroup{{ $root_menu->id }}">
                                                                                    <div class="accordion-body">
                                                                                        <div
                                                                                            class="d-flex gap-3 flex-wrap">
                                                                                            @foreach ($child_menu->actions as $key => $action)
                                                                                                @if (auth()->user()->can($action->permission->name))
                                                                                                    <div
                                                                                                        class="w-fit">
                                                                                                        <div
                                                                                                            class="custom-control custom-checkbox d-flex gap-2">
                                                                                                            <input
                                                                                                                class="custom-control-input"
                                                                                                                type="checkbox"
                                                                                                                name="permission_id[]"
                                                                                                                id="permission{{ $action->id }}"
                                                                                                                value="{{ $action->permission_id }}"
                                                                                                                {{ in_array($action->permission_id, $permission_id) ? 'checked' : '' }}>
                                                                                                            <label
                                                                                                                for="permission{{ $action->id }}"
                                                                                                                class="custom-control-label c-pointer">{{ $action->name }}</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif (count($root_menu->actions) > 0)
                                                    <div id="parentGroupcollapse{{ $root_menu->id }}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="ChildGroup{{ $root_menu->id }}"
                                                        data-bs-parent="#roleAccordionParentGroup">
                                                        <div class="accordion-body">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                                @foreach ($root_menu->actions as $key => $action)
                                                                    @if (auth()->user()->can($action->permission->name))
                                                                        <div class="w-fit">
                                                                            <div
                                                                                class="custom-control custom-checkbox d-flex gap-2">
                                                                                <input class="custom-control-input"
                                                                                    type="checkbox" name="permission_id[]"
                                                                                    id="permission{{ $action->id }}"
                                                                                    value="{{ $action->permission_id }}"
                                                                                    {{ in_array($action->permission_id, $permission_id) ? 'checked' : '' }}>
                                                                                <label for="permission{{ $action->id }}"
                                                                                    class="custom-control-label c-pointer">{{ $action->name }}</label>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
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
        $(document).ready(function() {
            $(document).on('click', '#checkAll', function(e) {
                if ($(this).is(":checked")) {
                    $("input[type=checkbox]").prop("checked", true);
                } else {
                    $("input[type=checkbox]").prop("checked", false);
                }
            });
            $(document).on('change', '.check_group', function(e) {
                if ($(this).is(":checked")) {
                    $(this).closest('.accordion-item').find("input[type=checkbox]").prop("checked", true);
                } else {
                    $(this).closest('.accordion-item').find("input[type=checkbox]").prop("checked", false);
                }
            });
        });
    </script>
@endpush
