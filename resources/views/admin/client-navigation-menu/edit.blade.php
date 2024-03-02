
@extends('layouts.admin.app')

@section('content')
<div class="row g-3">
    <div class="col-12">
        <form action="{{ Route("admin.{$resources['path']['route']}.update", $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 text-uppercase">Add {{ $resources['title'] }}</h6>
                        <a href="{{ Route("admin.{$resources['path']['route']}.index") }}" class="btn btn-primary btn-sm text-uppercase">
                            Go Back
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        @foreach ($resources['items'] as $item)
                            @switch($item['type'])
                                @case('description')
                                    <div class="col-12">
                                        <label for="{{ $item['name'] }}" class="form-label"><b>{{ $item['label'] }}</b></label>
                                        <textarea name="{{ $item['name'] }}" id="{{ $item['name'] }}" class="description" cols="30" rows="10" placeholder="{{ $item['placeholder'] }}">{!! $data->{$item['name']} !!}</textarea>
                                    </div>
                                    @break
                                @case('short_description')
                                    <div class="col-12">
                                        <label for="{{ $item['name'] }}" class="form-label"><b>{{ $item['label'] }}</b></label>
                                        <textarea name="{{ $item['name'] }}" id="{{ $item['name'] }}" class="short_description" cols="30" rows="10" placeholder="{{ $item['placeholder'] }}">{!! $data->{$item['name']} !!}</textarea>
                                    </div>
                                    @break
                                @case('select')
                                    <div class="col-12">
                                        <label for="{{ $item['name'] }}" class="form-label"><b>{{ $item['label'] }}</b></label>
                                        <select name="{{ $item['name'] }}" id="{{ $item['name'] }}" class="select form-control" data-placeholder="{{ $item['placeholder'] }}">
                                            @if (is_array($item['options']))
                                                <option value=""></option>
                                                @foreach ($item['options'] as $option)
                                                    <option value="{{ $option['value'] }}" {{ $data->{$item['name']} == $option['value'] ? 'selected' : '' }}>{{ $option['label'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>                
                                    </div>
                                    @break
                                @case('select_multiple')
                                    <div class="col-12">
                                        <label for="{{ $item['name'] }}" class="form-label"><b>{{ $item['label'] }}</b></label>
                                        <select name="{{ $item['name'] }}" id="{{ $item['name'] }}" class="select form-control" data-placeholder="{{ $item['placeholder'] }}" multiple>
                                            @if (is_array($item['options']))
                                            <option value=""></option>    
                                            @foreach ($item['options'] as $option)
                                                    <option value="{{ $option['value'] }}" {{ $data->{$item['name']} == $option['value'] ? 'selected' : '' }}>{{ $option['label'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>                
                                    </div>
                                    @break
                                @default
                                    <div class="col-12">
                                        <label for="{{ $item['name'] }}" class="form-label require"><b>{{ $item['label'] }}</b></label>
                                        <input type="{{ $item['type'] }}" value="{{ $data->{$item['name']} }}" class="form-control custom-input input-number" id="{{ $item['name'] }}" name="{{ $item['name'] }}" placeholder="{{ $item['placeholder'] }}">
                                    </div>
                            @endswitch
                        @endforeach

                    </div>
                </div>

                <div class="card-footer text-end px-3 py-2">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
    <script>
        $(document).ready(function(){
            $('#child_id').parent().addClass('d-none');

            $('#parent_id').change(function(event){

                $.ajax({
                    url: "{{ Route("admin.{$resources['path']['route']}.show", '0') }}",
                    method: "GET",
                    type: "GET",
                    data: { id: $(this).val() },

                    success: function(response){
                        $('#child_id').parent().removeClass('d-none');
                        
                        $('#child_id').html("<option value="">Select One!</option>");
                        if(response.length){
                            response.map(function(child_menu){
                                const option = $('<option></option>').attr('value', child_menu.id).text(child_menu.name);
                                $('#child_id').append(option); 
                            })
                        }else{
                            const option = $('<option></option>').attr('value', '0').text('No Child Menu Found!');
                            $('#child_id').append(option); 
                        }
                    },

                    error: function(error){
                        console.log({error})
                    }
                })
            })
        })
    </script>
@endpush