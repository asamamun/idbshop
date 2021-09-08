@extends('layout.shopblank')
@section('content')

<h3>Product Management</h3>
            <div class="panel panel-info" id="shopform">
                <div class="panel-heading">New {{$attributes->name}} Form</div>

                <div class="panel-body">
                   <form action="{{URL('shop/product')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                       {{csrf_field()}}
                       <input type="hidden" name="attsetid" id="attsetid" value="{{$attributes->id}}">
                    @foreach($attributes->attributes as $att)
				@include('shop.user.partial.product-form',$att)
                    @endforeach
                    <!-- -->
                     
                     <div class="row">
                       <div class="col-md-4 form-group">
                           <label for="" class="control-label col-md-offset-1">Image</label>
                        </div>   

                           <div class="col-md-7" style="padding-left:0;">
                               <input type="file" name="image" id="image" class="" multiple>
                               <br>
                               <!--button type="button" id="uploadbtn" name="uploadbtn" class="btn btn-xs btn-success">upload</button-->
                           <div id="imagecontainer">

                           </div>
                           </div>
                                                  
                      </div>
                      
                      <br>
                      
                      <div class="row">
                       <div class="col-md-4 form-group">
                           <label for="categories" class="control-label col-md-offset-1">Select Categories</label>
                        </div>   

                           <div class="col-md-7" style="padding-left:0;">
                               <select size=5 multiple class="form-control" id="categories" name="categories[]" required>
                                   <!--option value="0">Root</option-->
                                   @forelse ($lists as $k=>$v)
                                       <option value="{{substr($k,1)}}">{{$v}}</option>
                                   @empty
                                   @endforelse
                               </select>
                           </div>                       
                      </div>
                      
                      <br>
                      
                    <!-- -->
                    <div class="col-md-offset-9 col-md-3">
                    <button type="submit" id="savebtn" name="savebtn" class="btn btn-primary">Save</button>
                    </div>
                    </form>
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
$(document).ready(function(){
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
	var url = "{{URL::to('/')}}";
	//image upload start
		var files;
		$('input[type=file]').on('change', prepareUpload);
		function prepareUpload(event)
		{
            var uploadUrl = url+'/shop/imageupload';
            var data = new FormData();
            //console.log(uploadUrl);
		files = event.target.files;
		//console.log(files);
            for (var x = 0; x < files.length; x++) {
                data.append("fileToUpload[]", files[x]);
            }
            //ajax start
            $.ajax({
                url: uploadUrl,
                type: 'POST',
                data: data,
                cache: false,
                processData: false, // Don't process the files
                contentType: false
            }).done(function(data) {
                $("#imagecontainer").append(data);
            });
            //ajax end
		}
		//image upload end

    //image delete start
$("#imagecontainer").on("click",".cancel",function(){
    var current_image = $(this);
    var imageee = $(this).attr("data-id");
    //alert(imageee);
    var deleteUrl = url+'/shop/imagedelete';
    //ajax start
    $.ajax({
        url: deleteUrl,
        type: 'POST',
        data: {imageid:imageee,},
       /* cache: false,
        processData: false, // Don't process the files
        contentType: false*/
    }).done(function(data) {
        alert(data.success);
        if(data.success=="true"){
            current_image.parent().parent().remove();
            //alert(55);
        }
        else{
            alert(data.message);
        }
        //alert(data);
        //$("#imagecontainer").append(data);
    });
    //ajax end
});
    //image delete end
})
</script>

@endsection


