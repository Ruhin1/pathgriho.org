@php 
	$app_info = App\Models\AdminSetting::latest('id')->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ $app_info->title }}</title>
    <link rel="shortcut icon"
        href="{{ asset($app_info->favicon) }}"
        type="image/x-icon">
    @include('layouts.admin.partial.styles')
    @include('layouts.admin.partial.alert')
    <style>
        :root {
            --bs-primary: {{ $app_info && $app_info->primary_color ? $app_info->primary_color : '#3753e9'}};
            --bs-secondary: {{$app_info && $app_info->secondary_color ? $app_info->secondary_color : '#415FFF'}};
        }
    </style>
</head>

<body class="bg-light">
    <div class="overflow-hidden site-wrapper @if (Session::has('sidebar-collapse')) session-sidebar @endif">
        @include('layouts.admin.partial.sidebar', ['logo'=> asset($app_info->logo)])

        <div class="content-wrapper">
            @include('layouts.admin.partial.header')
            <div class="content">
                <div class="p-sm-4 p-3">
                    @yield('content')
                </div>
            </div>
            @include('layouts.admin.partial.footer')
        </div>
    </div>
    <!-- End Site Wrapper -->

    @include('sweetalert::alert')
    @include('layouts.admin.partial.scripts')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('change', '.change-status', function(e) {
            e.preventDefault();
            let url = $(this).data('url');
            $.ajax({
                url: url,
                data: {
                    _method: 'GET',
                    status: 'true',
                },
                success: (response) => {
                    if (response.status == 'success') {
                        Swal.fire({
                            width: "22rem",
                            title: "Changed!",
                            text: 'Status Changed Successfully!',
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                    if (response.status == 'error') {
                        Swal.fire({
                            width: "22rem",
                            title: "Failed!",
                            text: "You don't have any Authority to do this action",
                            icon: "error",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $('.dataTable').DataTable().ajax.reload();
                    }
                }
            });
        });

        $(document).on('click', '#cancelBtn', function(e) {
            e.preventDefault();
            $('#editForm').hide();
            $('#addForm').show();
        });

        $(document).on('click', '.link-delete', function(e) {
            e.preventDefault();
            let url = $(this).data('url');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                Swal.fire({
                                    width: "22rem",
                                    title: "Deleted!",
                                    text: response.status,
                                    icon: "success",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                $('.dataTable').DataTable().ajax.reload();
                            }
                            if (response.status == 'error') {
                                Swal.fire({
                                    width: "22rem",
                                    title: "Failed!",
                                    text: "You don't have any Authority to do this action",
                                    icon: "error",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        }
                    });
                } else(
                    result.dismiss === Swal.DismissReason.cancel
                )
            });
        });

        $("#selectAll").on("click", function(e) {
            if ($(this).is(":checked")) {
                $(".multi_checkbox").prop("checked", true);
            } else {
                $(".multi_checkbox").prop("checked", false);
            }
        });

        // multi delete row table
        function multiDelCheckbox(url, selectClass) {
            Swal.fire({
                width: "25rem",
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.value) {
                    let id = [];
                    $("." + selectClass + ":checked").each(function() {
                        id.push($(this).val());
                    });
                    if (id.length > 0) {
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: {
                                _method: 'DELETE',
                                id: id,
                            },
                            success: function(response) {
                                if (response.status == 'success') {
                                    Swal.fire({
                                        width: "22rem",
                                        title: "Deleted!",
                                        text: response.val,
                                        icon: "success",
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                }
                                if (response.status == 'error') {
                                    Swal.fire({
                                        width: "22rem",
                                        title: "Failed!",
                                        text: "You don't have any Authority to do this action",
                                        icon: "error",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                }
                                $("#selectAll").prop("checked", false);
                                $("input[type=checkbox]").prop("checked", false);
                                $('.dataTable').DataTable().ajax.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            width: "22rem",
                            title: "Error!",
                            text: "Please select atleast one checkbox",
                            icon: "error",
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                }
            })
        }

        $("#bulk_delete").on("click", function() {
            let url = $(this).data("url");
            let selectClass = "multi_checkbox";
            multiDelCheckbox(url, selectClass);
        });
    </script>
    @stack('js')
</body>

</html>