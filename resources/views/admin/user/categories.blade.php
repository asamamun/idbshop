@extends('layout.adminblank')
@section('content')
<h3>Category management</h3>
<button class="btn btn-primary pull-right" id="createcategory">Create Category</button><br><br>       

            <div class="panel panel-info" id="categoryform">
                <div class="panel-heading">Category</div>

                <div class="panel-body">
                    <form id="form" class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <input type="hidden" id="catid" value=""/>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" value="{{ old('description') }}" required></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('parentid') ? ' has-error' : '' }}">
                            <label for="parentid" class="col-md-4 control-label">Parent ID</label>

                            <div class="col-md-6">
                               <select size=10 class="form-control" id="parentid" name="parentid" required>
								<option value="0">Root</option>
								@forelse ($lists as $k=>$v)
								<option value="{{substr($k,1)}}">{{$v}}</option>
							    @empty								
								@endforelse
								</select>
                               @if ($errors->has('parentid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parentid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-warning btn-xs" id="addcat">
                                    ADD
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" id="updatecat">
                                    Update
                                </button>
                                <button type="button" class="btn btn-danger btn-xs" id="closeformbtn">
                                    Close
                                </button>                                
                            </div>
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
<!--
<ul class="categorycontainer">
@forelse ($categories as $cat)
<li>
<span class="namecontainer">{{ $cat->catname }}</span> 
(<span class="descriptioncontainer">{{ $cat->description }}</span>) 
(<span class="parentidcontainer">{{ $cat->parent_id }}</span>)

<button class="btn btn-warning btn-xs btn-detail editbtn" value="{{$cat->id}}">Edit</button>

<button class="btn btn-info btn-xs btn-detail deletebtn" value="{{$cat->id}}">Delete</button>
<hr>
</li>
@empty
<li>No available categories</li>
@endforelse
</ul>
-->
<table class="table table-hover" style="border:1px solid #ccc">
        <thead>
            <tr style="background-color:#ffcc99;color:#cc6600;">
                <th style="">Category Name</th>
                <th style="">Description</th>
                <th style="">Parent ID</th>
                <th style="">Action</th>
            </tr>
        </thead>
@foreach($categories as $cat) 
        <tbody>  
            <tr>
                <td class="namecontainer" style="">{{ $cat["catname"] }}</td>
                <td class="descriptioncontainer" style="">{{ $cat["description"] }}</td>
                <td class="parentidcontainer" style="">{{ $cat["parent_id"] }}</td>
                <td class="actioncontainer"><button class="btn btn-warning btn-xs btn-detail editbtn" value="{{$cat->id}}">Edit</button>
                    <button class="btn btn-danger btn-xs btn-detail deletebtn" value="{{$cat->id}}">Delete</button>
                </td>
            </tr>
@endforeach
</tbody>
</table>
{{$categories->links()}}
@endsection

@section('scripts')
<script>
$(document).ready(function(){
	$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
	var url = "{{URL::to('/')}}";
    
    // categoryForm start
    $("#categoryform").hide();
    //closeformbtn
    $("#closeformbtn").click(function(){
        $("#categoryform").hide(400);
        clearform();
    });
    
    $("#createcategory").click(function(){
        $("#categoryform").toggle(400);
         $("#updatecat").hide(); 
        $("#addcat").show();
        $("#password").prop("disabled",false);
        clearform();
    });
    // categoryForm end
    
    
	//delete start
	$(".actioncontainer").on("click",".deletebtn",function(){
		//alert(url + '/admin/user/' + $(this).val());
		$.ajax({

            type: "DELETE",
            url: url + '/admin/Category/' + $(this).val(),
            success: function (data) {
                alert(data.message);
                location.reload();

                //$("#task" + task_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
		//
	});
	//delete end
	
	//add start
	$("#addcat").click(function(){
        $.ajax({
            type: "POST",
            url: url + '/admin/Category',
			data:{
				catname:$("#name").val(),
				description:$("#description").val(),
				parent_id:$("#parentid").val(),
			},
            success: function (data) {
                
                alert(data);
                location.reload();

                //$("#task" + task_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
		//
		
	});
	//add end
    
    //edit start
	$(".actioncontainer").on("click",".editbtn",function(){
        
        $("#categoryform").show(400);
        $("#addcat").hide();
        $("#updatecat").show();
        //
        $.ajax({
            type: "GET",
            url: url + '/admin/Category/'+$(this).val()+'/edit',
			success: function (data) {
                $("#catid").val(data.id);
                $("#name").val(data.catname);
                $("#description").val(data.description);               
                $("#parentid").val(data.parent_id);
               // console.log(data.name);
                
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
		//
        //

	});
	//edit end
    
    
    //update start
    $("#updatecat").click(function(){
            $.ajax({
            type: "PUT",
            url: url + '/admin/Category/'+$("#catid").val(),
            data:{
				catname:$("#name").val(),
				description:$("#description").val(),
				parent_id:$("#parentid").val(),
			},    
			success: function (data) {
                alert(data.message);
                location.reload();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    //update end
    
    //clearform
    
    function clearform(){
        $("#form")[0].reset();
    }
    
    //clearform
});
</script>

@endsection

