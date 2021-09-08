@extends('layout.adminblank')
@section('content')
<h3>Registered Users</h3>
<button class="btn btn-primary pull-right" id="createuser">Create User</button><br><br>       

            <div class="panel panel-info" id="userform">
                <div class="panel-heading">User</div>

                <div class="panel-body">
                    <form id="form" class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <input type="hidden" id="userid" value=""/>
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

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('usergroup') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">User Group</label>

                            <div class="col-md-6">
                                <label><input type="radio" class="" name="usergroup" value="0">Customer</label>
								<label><input type="radio" class="" name="usergroup" value="1">Shop Owner</label>

                                @if ($errors->has('usergroup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usergroup') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-warning btn-xs" id="adduser">
                                    ADD
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" id="updateuser">
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
<table class="table table-hover" style="border:1px solid #ccc">
        <thead>
            <tr style="background-color:#ffcc99;color:#cc6600;">
                <th style="">Name</th>
                <th style="">Email</th>
                <th style="">User Group</th>
                <th style="">Action</th>
            </tr>
        </thead>
@foreach ($users as $user)
<tbody>  
            <tr>
                <td class="namecontainer" style="">{{ $user->name }}</td>
                <td class="emailcontainer" style="">{{ $user->email }}</td>
                <td class="groupcontainer" style="">{{ config('constants.user_group')[$user->user_group] }}</td>
                <td class="actioncontainer">
                    <button class="btn btn-warning btn-xs btn-detail editbtn" value="{{$user->id}}">Edit</button>
                    <button class="btn btn-danger btn-xs btn-detail deletebtn" value="{{$user->id}}">Delete</button>
                </td>
            </tr>
@endforeach
</tbody>
</table>
{{$users->links()}}
@endsection
@section('scripts')
<script>
$(document).ready(function(){
	$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
	var url = "{{URL::to('/')}}";
    
    // userForm
    $("#userform").hide();
    //closeformbtn
    $("#closeformbtn").click(function(){
        $("#userform").hide(400);
        clearform();
    });
    
    $("#createuser").click(function(){
        $("#userform").toggle(400);
         $("#updateuser").hide(); 
        $("#adduser").show();
        $("#password").prop("disabled",false);
        clearform();
    });
    // userForm
    
    
	//delete start
	$(".actioncontainer").on("click",".deletebtn",function(){
		//alert(url + '/admin/user/' + $(this).val());
		$.ajax({

            type: "DELETE",
            url: url + '/admin/user/' + $(this).val(),
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
	$("#adduser").click(function(){
				//var rand = "{{rand(1000,5000)}}";
        alert($("input[name='usergroup']:checked"). val());
				$.ajax({

            type: "POST",
            url: url + '/admin/user',
			data:{
				name:$("#name").val(),
				email:$("#email").val(),
				password:$("#password").val(),
				user_group:$("input[name='usergroup']:checked"). val()
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
        
        $("#userform").show(400);
        $("#adduser").hide();
        $("#updateuser").show();
        $("#password").prop("disabled",true);
        //
        				$.ajax({

            type: "GET",
            url: url + '/admin/user/'+$(this).val()+'/edit',
			success: function (data) {
                $("#userid").val(data.id);
                $("#name").val(data.name);
                $("#email").val(data.email);               $("input[name=usergroup]").val([data.user_group]);
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
    $("#updateuser").click(function(){
            $.ajax({

            type: "PUT",
            url: url + '/admin/user/'+$("#userid").val(),
            data:{
				name:$("#name").val(),
				email:$("#email").val(),
				user_group:$("input[name='usergroup']:checked").val()
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

