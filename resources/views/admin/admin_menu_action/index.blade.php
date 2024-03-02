@extends('layouts.admin.app')

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Admin Menu Actions Setup</h6>
                        <div>
                            <a href="{{ Route('admin.admin-menu.index') }}" class="btn btn-primary btn-sm text-uppercase">Go
                                Back</a>
                            <a href="{{ Route('admin.admin-menuAction.create', $id) }}"
                                class="btn btn-primary btn-sm text-uppercase">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="dataTable table align-middle" style="width:100%">
                        <thead>
                            <tr class="text-nowrap">
                                <th>SL</th>
                                <th>Name</th>
                                <th>Parent Menu</th>
                                <th>Route</th>
                                <th>Status</th>
                                <th width="110" class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            var url = "{{ route('admin.admin-menuAction.index', ':id') }}";
            url = url.replace(':id', "{{ $id }}");

            var table = $('.dataTable').dataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: {
                    url: url,
                    type: "GET",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        className: "text-center",
                        width: '60',
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'parent.name',
                        name: 'parent.name'
                    },
                    {
                        data: 'route',
                        name: 'route'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        className: "text-center",
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        className: "text-end",
                    },
                ]
            });
        });
    </script>
@endpush
