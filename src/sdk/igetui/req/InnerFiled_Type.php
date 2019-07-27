<?php

namespace Fallbort\Getui\Sdk\IGetui\Req;

use Fallbort\Getui\Sdk\Protobuf\Type\PBEnum;

class InnerFiled_Type extends PBEnum
{
    const str = 0;
    const int32 = 1;
    const int64 = 2;
    const floa = 3;
    const doub = 4;
    const bool = 5;
}