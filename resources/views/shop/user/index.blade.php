@extends('layout.shopmaster')
@section('content')
<h1>Registered Users</h1>
<!-- flash message -->
@if(Session::has('message'))
<div class="alert alert-info">
{{ Session::get('message') }}
</div>
@endif
<!-- flash message -->
@endsection

