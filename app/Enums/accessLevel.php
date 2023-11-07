<?php

namespace App\Enums;

enum accessLevel: string
{
    case ADMIN = '1';
    case MEMBER = '0';
    

    public function title(): string
    {
        return ucfirst($this->value);
    }
}