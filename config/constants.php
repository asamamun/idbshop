<?php
return [
    'user_group' => [
        '0' => 'user',
        '1' => 'shop',
		'2' => 'admin',        
    ],
    'items_per_page' =>'10',
    
];
//$categories = Category::orderBy('created_at', 'desc')->paginate(config('constants.items_per_page'));