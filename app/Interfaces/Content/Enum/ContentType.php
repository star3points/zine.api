<?php

namespace App\Interfaces\Content\Enum;

use App\Enum\HasEnumNames;
use App\Enum\HasEnumValues;

enum ContentType: string
{
    use HasEnumNames, HasEnumValues;

    case List = 'List';
    case Tree = 'Tree';
}
