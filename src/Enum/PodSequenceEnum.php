<?php

namespace BBLDN\AdCOMLaravel\Enum;

enum PodSequenceEnum: int
{
    case LAST_POD = -1;

    case ANY_POD = 0;

    case FIRST_POD = 1;
}
