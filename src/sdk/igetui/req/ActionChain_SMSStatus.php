<?php

namespace Fallbort\Getui\Sdk\IGetui\Req;

use Fallbort\Getui\Sdk\Protobuf\Type\PBEnum;

class ActionChain_SMSStatus extends PBEnum
{
    const unread = 0;
    const read = 1;
}