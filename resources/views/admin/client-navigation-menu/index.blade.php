@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header px-3 py-2">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="h6 mb-0 text-uppercase">Manage {{ $resources['title'] }}</h6>
                    <a href="{{ Route("admin.{$resources['path']['route']}.create") }}" class="btn btn-primary btn-sm text-uppercase">Add New</a>
                </div>
            </div>
            <div class="card-body">
                <table class="dataTable table align-middle" style="width:100%">
                    <thead>
                        <tr class="text-nowrap">
                            <th width="3"></th>

                            @foreach ($resources['items']['labels'] as $label)
                                <th>{{ $label }}</th>
                            @endforeach
                            
                            <th width="110" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center" colspan="1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="selectAll">
                                    <label class="custom-control-label" for="selectAll"></label>
                                </div>
                            </th>
                            <th colspan="4">
                                <button type="button" name="bulk_delete"
                                    data-url="{{ Route("admin.{$resources['path']['route']}.destroy", '0') }}" id="bulk_delete"
                                    class="btn btn btn-xs btn-danger">Delete</button>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <script> const resources = @ json($resources); console.table(resources); console.table([...resources.items.columns]); </script> --}}

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.dataTable').dataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: {
                    url: `{{ Route("admin.{$resources['path']['route']}.index") }}`,
                    type: "GET",
                },
                columns: @json($resources['items']['columns']),
            });
            
        });
    </script>
@endpush
