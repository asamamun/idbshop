<!--Extend welcome.blade-->
@extends('frontEnd.welcome')
<!--Start Dynamic Title From welcome.blade-->

<?php

?>

@section('title')
All Shops | IDB Shop
@endsection

<!--Start Dynamic Section From welcome.blade-->
@section('mainContent')
<!-- banner -->
    <div class="page-head">
        <div class="container">
            <h3>
            All Shops
           </h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- All Shops -->
    <div class="men-wear">
        <div class="container">

            <div class="col-md-12 products-right">

                <div class="row">
                    <div id="filter-panel" class=" filter-panel">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form-inline" role="form">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="filter-col" style="margin-right:0;" for="pref-perpage">Per Page:</label>
                                            <select id="pref-perpage" class="form-control">
                                                
                                                <option value="6">6</option>
                                                <option value="9">9</option>
                                                <option selected="selected" value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- form group [rows] -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="filter-col" style="margin-right:0;" for="pref-search">Search:</label>
                                            <input type="text" class="form-control input-sm" id="pref-search">
                                        </div>
                                    </div>
                                    <!-- form group [search] -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="filter-col" style="margin-right:0;" for="pref-orderby">Order by:</label>
                                            <select id="pref-orderby" class="form-control">
                                                <option>Ascendant</option>
                                                <option>Descendent</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="men-wear-bottom">
                    <div class="col-sm-12 men-wear-right">
                        <h4>All IDB shop list</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                   @foreach($all_shop as $singleShop)
                    <?php         
                    //$singleShop->coverimage;
                    //$singleShop->profileimage;
                    ?>
                    <?php
                        //profileImage
                        $publicImageLink = public_path().'/images/shop/'.$singleShop->profileimage;
                        $imageLink = asset('images/shop/').'/'.$singleShop->profileimage;
                        $noimageLink = asset('images/default.jpg'); 
                        //coverImage
                        $publicImageLinkC = public_path().'/images/shop/'.$singleShop->coverimage;
                        $imageLinkC = asset('images/shop/').'/'.$singleShop->coverimage;
                    ?>
                    <div class="col-md-4 col-custom">
                        <div class="shop-wrapper-sm">
                            <div class="shop-content-sm" style="background: url(<?php echo file_exists($publicImageLinkC)? $imageLinkC : $noimageLink; ?>); background-repeat: no-repeat; background-size: cover;">
                                <div class="shop-background-sm">
                                    <div class="shop-profile-text-sm">
                                        <h2>{{$singleShop->name}}</h2>
                                        <p class="shop-details"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$singleShop->address}}</p>
                                        <p class="shop-details"><i class="fa fa-phone" aria-hidden="true"></i> {{$singleShop->tel1}}</p>
                                        <p class="shop-details"><i class="fa fa-email" aria-hidden="true"></i> {{$singleShop->email}}</p>
                                        <p style="color:#FDA30E; font-size:18px"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-footer-sm">
                                    <img class="img-rounded shop-image-profile-sm thumbnail" src="<?php echo file_exists($publicImageLink)? $imageLink : $noimageLink; ?>" alt="Profile image example" />

                            </div>
                            <a href="{{url('/singleShop/'.$singleShop->user_id)}}" class="btn btn-default shop-btn">Visit Shop</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="clearfix"></div>
                <div class="pagination-grid text-right">
                    {{$all_shop->links()}}
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <!-- //all shops -->
<style>
.shop-image-profile-sm {
    height: 90px;
}
</style>



<script>

</script>

@endsection


