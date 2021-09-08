@extends('layout.shopblank')
@section('content')
    <h3>Your Products</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info" id="shopform">
                <div class="panel-heading">Total Products: <span class="label label-danger" style="vertical-align: middle;">{{count($products)}}</span></div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <th>ID</th>
                                <th>Name</th>
                                <th>Sku</th>

                                <th>Published</th>
                                <th style="width: 190px;">Action</th>
                            </thead>
                            
                            <tbody>

                                @foreach($products as $product)
                                  @include('shop.user.partial.productatt',$product)
                                @endforeach

                            </tbody>
                            
                        </table>
                    </div>
                    {{$products->links()}}
                </div>
            </div>
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