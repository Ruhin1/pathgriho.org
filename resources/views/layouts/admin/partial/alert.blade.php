@if(session()->has('errors'))
@foreach ( session('errors')->all() as $error )
@php
RealRashid\SweetAlert\Facades\Alert::toast($error, 'error');
@endphp
@endforeach
@endif
@if(session('success_message'))
@php
RealRashid\SweetAlert\Facades\Alert::toast(session('success_message'), 'success')
@endphp
@endif
