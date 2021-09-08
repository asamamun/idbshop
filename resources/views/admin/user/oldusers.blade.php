@extends('layout.adminblank')
@section('content')
<h1>Registered Users</h1>
<button id="adduser">Add</button>
<!-- flash message -->
@if(Session::has('message'))
<div class="alert alert-info">
{{ Session::get('message') }}
</div>
@endif
<!-- flash message -->
<ul class="usercontainer">
@forelse ($users as $user)
<li>{{ $user->name }} 
({{ $user->email }}) 
({{ config('constants.user_group')[$user->user_group] }})
<button class="btn btn-warning btn-xs btn-detail editbtn" value="{{$user->id}}">Edit</button>

<button class="btn btn-info btn-xs btn-detail deletebtn" value="{{$user->id}}">Delete</button>
<hr>
</li>
@empty
<li>No registered users</li>
@endforelse
</ul>

@endsection
@section('scripts')
<script>
$(document).ready(function(){
	$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
	var url = "{{URL::to('/')}}";
	//delete start
	$(".usercontainer").on("click",".deletebtn",function(){
		//alert(url + '/admin/user/' + $(this).val());
		$.ajax({

            type: "DELETE",
            url: url + '/admin/user/' + $(this).val(),
            success: function (data) {
                console.log(data);

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
				var rand = "{{rand(1000,5000)}}";
				$.ajax({

            type: "POST",
            url: url + '/admin/user',
			data:{
				name:"somename"+rand,
				email:"email"+rand+"@gmail.com",
				password:"pass"+rand,
				user_group:1
			},
            success: function (data) {
                console.log(data);

                //$("#task" + task_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
		//
		
	});
	//add end
});
</script>

@endsection

