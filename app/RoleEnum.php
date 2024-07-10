<?php

namespace App;

enum RoleEnum: int
{
    case ADMIN = 1;
    case PROFESSOR = 2;
    case STUDENT = 3;
    case SECRETARY = 4;
}
