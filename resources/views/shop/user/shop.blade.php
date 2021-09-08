@extends('layout.shopblank')
@section('content')

<h3>Shop Management</h3>
@if (session('shopDetails'))
    <div class="alert alert-danger" style="width:50%;">
        <p class="text-center" style="font-size:18px;"><i class="glyphicon glyphicon-info-sign"></i> If you want to add your product, <br>
        then please fill your SHOP information first !! 
        </p>
    </div>
@endif           
            <div class="panel panel-info" id="shopform">
                <div class="panel-heading">Shop</div>

                <div class="panel-body">
                    <form id="form" class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" id="shopid" value=""/>
                        
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
                        
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <textarea id="address" class="form-control" name="address" value="{{ old('address') }}" required></textarea>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('tel1') ? ' has-error' : '' }}">
                            <label for="tel1" class="col-md-4 control-label">Phone 1</label>

                            <div class="col-md-6">
                                <input id="tel1" type="text" class="form-control" name="tel1" value="{{ old('tel1') }}" required autofocus>

                                @if ($errors->has('tel1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('tel2') ? ' has-error' : '' }}">
                            <label for="tel1" class="col-md-4 control-label">Phone 2</label>

                            <div class="col-md-6">
                                <input id="tel2" type="text" class="form-control" name="tel2" value="{{ old('tel2') }}" required autofocus>

                                @if ($errors->has('tel2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('branch') ? ' has-error' : '' }}">
                            <label for="tel1" class="col-md-4 control-label">Branch</label>

                            <div class="col-md-6">
                                <input id="branch" type="text" class="form-control" name="branch" value="{{ old('branch') }}" required autofocus>

                                @if ($errors->has('branch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('branch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('fb_pageid') ? ' has-error' : '' }}">
                            <label for="fb_pageid" class="col-md-4 control-label">Facebook Page ID</label>

                            <div class="col-md-6">
                                <input id="fb_pageid" type="text" class="form-control" name="fb_pageid" value="{{ old('fb_pageid') }}" required autofocus>

                                @if ($errors->has('fb_pageid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fb_pageid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group{{ $errors->has('contact_person') ? ' has-error' : '' }}">
                            <label for="contact_person" class="col-md-4 control-label">Contact Person</label>

                            <div class="col-md-6">
                                <input id="contact_person" type="text" class="form-control" name="contact_person" value="{{ old('contact_person') }}" required autofocus>

                                @if ($errors->has('contact_person'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_person') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('cover_image') ? ' has-error' : '' }}">
                            <label for="cover_image" class="col-md-4 control-label">Cover Image</label>

                            <div class="col-md-6">
                                <input  type="file" name="cover_image" id="cover_image" class="form-control" value="{{ old('cover_image') }}" required>

                                @if ($errors->has('cover_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cover_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('profile_image') ? ' has-error' : '' }}">
                            <label for="profile_image" class="col-md-4 control-label">Profile Image</label>

                            <div class="col-md-6">
                                <input  type="file" name="profile_image" id="profile_image" class="form-control" value="{{ old('profile_image') }}" required>

                                @if ($errors->has('profile_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                        <div class="col-md-4"></div>
                        <div id="imagecontainer" class="col-md-6"></div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-warning btn-xs" id="savebtn">
                                    Save
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
@endsection
@section('scripts')

@endsection

