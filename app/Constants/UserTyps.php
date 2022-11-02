<?php

namespace App\Constants;

class UserTyps
{

    public const STATUS_LIST = [

        0 => UserTyps::ADMIN,
        1 => UserTyps::MODERATOR,
        2 => UserTyps::SAIES,
   ];

    public const ADMIN = [
        'code' => 0,
        'prefix' => "ADMIN",
        'name' => "Admin",
        'name_ar' => "ادمن"
    ];
    
    public const MODERATOR = [
        'code' => 1,
        'prefix' => "MODERATOR",
        'name' => "Moderator",
        'name_ar' => "مشرف"
    ];
    
    public const SAIES = [
        'code' => 2,
        'prefix' => "SAIES",
        'name' => "Saies",
        'name_ar' => "سايس"
    ];
}
