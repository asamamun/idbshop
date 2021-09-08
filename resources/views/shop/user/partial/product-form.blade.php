<?php
if($att->type=="string"){
    ?>
<div class="row">
    <div class="col-md-4 form-group">
        <label for="{{$att->name}}" class="control-lebel col-md-offset-1">{{$att->screenname}}</label>
    </div>
    <div class="col-md-7 form-group">
        <input id="{{$att->name}}" type="text" class="form-control" name="{{$att->name}}-{{$att->id}}" value="" required>
    </div>
</div>
    <?php 
}else if($att->type=="text"){
    ?>
<div class="row">
    <div class="col-md-4 form-group">
        <label for="{{$att->name}}" class="control-lebel col-md-offset-1">{{$att->screenname}}</label>
    </div>
    <div class="col-md-7 form-group">
        <textarea id="{{$att->name}}" class="form-control" name="{{$att->name}}-{{$att->id}}" value="" required></textarea>
    </div>
</div>
    <?php 
    }else if($att->type=="dropdown"){
    ?>
<div class="row">
    <div class="col-md-4 form-group">
        <label for="{{$att->name}}" class="control-lebel col-md-offset-1">{{$att->screenname}}</label>
    </div>
    <div class="col-md-7 form-group">
        <select class="form-control" id="{{$att->name}}" name="{{$att->name}}-{{$att->id}}" required>
            <?php
                $attval =  explode(",",$att->values);
    foreach($attval as $k=>$v){
        echo "<option value='$v'>$v</option>";
    }
            ?>
				
        </select>
    </div>
</div>
    <?php 
}else if($att->type=="date"){
    ?>
<div class="row">
    <div class="col-md-4 form-group">
        <label for="{{$att->name}}" class="control-lebel col-md-offset-1">{{$att->screenname}}</label>
    </div>
    <div class="col-md-7 form-group">
        <input id="{{$att->name}}" type="date" class="form-control" name="{{$att->name}}-{{$att->id}}" value="" required>
    </div>
</div>
    <?php 
}else if($att->type=="number"){
    ?>
<div class="row">
    <div class="col-md-4 form-group">
        <label for="{{$att->name}}" class="control-lebel col-md-offset-1">{{$att->screenname}}</label>
    </div>
    <div class="col-md-7 form-group">
        <input id="{{$att->name}}" type="number" class="form-control" name="{{$att->name}}-{{$att->id}}" value="" required>
    </div>
</div>
    <?php 
}else if($att->type=="yesno"){
    ?>
<div class="row">
    <div class="col-md-4 form-group">
        <label for="{{$att->name}}" class="control-lebel col-md-offset-1">{{$att->screenname}}</label>
    </div>
    <div class="col-md-7 form-group">
        <input id="{{$att->name}}" type="radio" class="" name="{{$att->name}}-{{$att->id}}" value="yes">yes
        <input id="{{$att->name}}" type="radio" class="" name="{{$att->name}}-{{$att->id}}" value="no">no
    </div>
</div>
    <?php 
}else if($att->type=="checkbox"){
    ?>
<div class="row">
    <div class="col-md-4 form-group">
        <label for="{{$att->name}}" class="control-lebel col-md-offset-1">{{$att->screenname}}</label>
    </div>
    <div class="col-md-7 form-group">
       <?php
                $attval =  explode(",",$att->values);
    foreach($attval as $k=>$v){
        echo '<label><input id="'.$att->name.'" type="checkbox" class="" name="'.$att->name.'-'.$att->id.'[]" value="'.$v.'">'.$v.'</label> ';
    }
            ?>
    </div>
</div>
    <?php 
}