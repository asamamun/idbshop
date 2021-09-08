@extends('layout.shopblank')
@section('content')

<h3>Product Management</h3>
            <div class="panel panel-info" id="shopform">
                <div class="panel-heading">Product</div>

                <div class="panel-body">
                   <ul>
                    @foreach($attributeset as $a)
				<li><a href="{{url('shop/product/add/'.$a->id)}}">{{$a->name}}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
<!-- flash message -->
@if(Session::has('message'))
<div class="alert alert-info">
{{ Session::get('message') }}
</div>
@endif
<!-- flash message -->
@endsection
@section('scripts')
<script>

</script>

@endsection

