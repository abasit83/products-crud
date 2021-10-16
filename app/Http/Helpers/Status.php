<?php

namespace App\Http\Helpers;

class Status
{
    const Active = 1;
    const Inactive = 0;

    const GetByText = [
        1 => 'Active',
        0 => 'Inactive'
    ];
}