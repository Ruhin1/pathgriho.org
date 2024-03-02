 
@php
    $id = isset($data->id) ? $data->id : 0;
    $state = $id ? 'Update' : 'Create Now';
@endphp
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
                                        <label for="{{ $item['name'] }}" class="form-label require">
                                            <b>{{ $item['label'] }}</b> 
                                            @if (is_string($item['options']))
                                                <span class="text-danger">{{ $item['options'] }}</span>
                                            @endif
                                        </label>
                                        <textarea name="{{ $item['name'] }}" id="{{ $item['name'] }}" class="description" cols="30" rows="10" placeholder="{{ $item['placeholder'] }}">{!! $data->{$item['name']} !!}</textarea>
                                    </div>
                                    @break
                                @case('short_description')
                                    <div class="col-12">
                                        <label for="{{ $item['name'] }}" class="form-label require">
                                            <b>{{ $item['label'] }}</b> 
                                            @if (is_string($item['options']))
                                                <span class="text-danger">{{ $item['options'] }}</span>
                                            @endif
                                        </label>
                                        <textarea name="{{ $item['name'] }}" id="{{ $item['name'] }}" class="short_description" cols="30" rows="10" placeholder="{{ $item['placeholder'] }}">{!! $data->{$item['name']} !!}</textarea>
                                    </div>
                                    @break
                                @case('select')
                                    <div class="col-12">
                                        <label for="{{ $item['name'] }}" class="form-label require">
                                            <b>{{ $item['label'] }}</b> 
                                            @if (is_string($item['options']))
                                                <span class="text-danger">{{ $item['options'] }}</span>
                                            @endif
                                        </label>
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
                                        <label for="{{ $item['name'] }}" class="form-label require">
                                            <b>{{ $item['label'] }}</b> 
                                            @if (is_string($item['options']))
                                                <span class="text-danger">{{ $item['options'] }}</span>
                                            @endif
                                        </label>
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
                                @case('textarea')
                                    <div class="col-12">
                                        <label for="{{ $item['name'] }}" class="form-label require">
                                            <b>{{ $item['label'] }}</b> 
                                            @if (is_string($item['options']))
                                                <span class="text-danger">{{ $item['options'] }}</span>
                                            @endif
                                        </label>
                                        
                                        <textarea type="{{ $item['type'] }}" class="form-control custom-input" id="{{ $item['name'] }}" name="{{ $item['name'] }}" placeholder="{{ $item['placeholder'] }}" cols="10" rows="4">{{ $data->{$item['name']} }}</textarea>          
                                    </div>
                                    @break
                                @case('file')
                                    <div class="col-12">
                                        <label for="{{ $item['name'] }}" class="form-label require">
                                            <b>{{ $item['label'] }}</b> 
                                            @if (is_string($item['options']))
                                                <span class="text-danger">{{ $item['options'] }}</span>
                                            @endif
                                        </label>
                                        <input type="{{ $item['type'] }}" class="form-control custom-input input-number" id="{{ $item['name'] }}" name="{{ $item['name'] }}" placeholder="{{ $item['placeholder'] }}">

                                        <input type="hidden" name="{{ $item['name'] }}_old" value="{{ $item['value'] }}">

                                        <img src="{{ asset($data->{$item['name']}) }}" alt="Previous Image" height="120" class="m-3">
                                    </div>
                                    @break
                                @case('file_multiple')
                                    <div class="col-12">
                                        <label for="{{ $item['name'] }}" class="form-label require">
                                            <b>{{ $item['label'] }}</b> 
                                            @if (is_string($item['options']))
                                                <span class="text-danger">{{ $item['options'] }}</span>
                                            @endif
                                        </label>
                                        <input type="file" class="form-control custom-input input-number" id="{{ $item['name'] }}" name="{{ $item['name'] }}[]" multiple placeholder="{{ $item['placeholder'] }}">

                                        <div class="row">
                                            @foreach (json_decode($data->{$item['name']}) as $image)
                                                <img src="{{ asset($image) }}" alt="Previous Image" height="120" class="m-3 col-3">
                                            @endforeach
                                        </div>
                                    </div>
                                    @break
                                @default
                                    <div class="col-12">
                                        <label for="{{ $item['name'] }}" class="form-label require">
                                            <b>{{ $item['label'] }}</b> 
                                            @if (is_string($item['options']))
                                                <span class="text-danger">{{ $item['options'] }}</span>
                                            @endif
                                        </label>
                                        <input type="{{ $item['type'] }}" value="{{ $data->{$item['name']} }}" class="form-control custom-input input-number" id="{{ $item['name'] }}" name="{{ $item['name'] }}" placeholder="{{ $item['placeholder'] }}">
                                    </div>
                            @endswitch
                        @endforeach

                        @if(isset($resources['path']['include_inputs']))
                            @include($resources['path']['include_inputs'])
                         @endif
                    </div>
                </div>

                <div class="card-footer text-end px-3 py-2">
                    <button type="submit" class="btn btn-primary btn-sm">{{ $state }}</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
