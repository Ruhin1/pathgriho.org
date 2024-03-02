@extends('layouts.admin.app')

@section('content')

<style>
    .large-description {
        position: relative;
        height: 2rem;
        width: 6rem;
        overflow: hidden;
        white-space: normal;
        text-align: center;
        line-break: auto;
    }

    @media (min-width:900px) {
        .large-description {
            width: 18rem;
        }
    }

    .dataTable thead tr th,
    .dataTable tbody tr td {
        text-align: center !important;
    }

    .show {
        display: block !important;
    }

    .modal-body p {
        padding-top: 4px;
        white-space: normal;
        text-align: justify;
        font-size: 16px;
        font-weight: 400;
    }

    .hidden {
        display: none !important;
    }

    .font-bold{
        font-weight: 600;
    }

    @media (min-width: 576px){
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto;
        }
    }
    @media (min-width: 1180px){
        .modal-dialog {
            max-width: 900px;
            margin: 1.75rem auto;
        }
    }

    h5{
        font-weight: 900;
    }
</style>
<div class="row g-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header px-3 py-2">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="h6 mb-0 text-uppercase">Contact User Message</h5>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Contact Message Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="dataTable table align-middle" style="width:100%">
                    <thead>
                        <tr class="text-nowrap">
                            <th>Date</th>
                            <th>Name</th>
                            <th>Contact No.</th>
                            <th>E-mail</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($data)
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->address, 50) }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success border-0 px-10px fs-15 details-btn"
                                                data="{{ $item }}">
                                                <i class="fas fa-info-square"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        @else
                            <p>No data available here.</p>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $(".details-btn").click(function(event){
            const data = JSON.parse($(this).attr("data"));

            $('.modal-body').html(`
                <h6><span class="font-bold text-success">Name:</span> ${data.name} </h6>
                <h6><span class="font-bold text-success">E-mail:</span> ${data.email} </h6>
                <h6><span class="font-bold text-success">Phone:</span> ${data.phone} </h6>
                <h6><span class="font-bold text-success">Address:</span> ${data.address} </h6>
                <hr />
                <p><span class="font-bold text-success">Message:</span> <br/> <br/> ${data.message} </p>
            `);

            $('.modal').addClass('show');
        });

        $('.modal-footer button').click(function(){
            $('.modal').removeClass('show');
        });

        $('.close').click(function(){
            $('.modal').removeClass('show');
        })
    });
</script>
@endpush