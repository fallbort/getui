<?php

namespace Fallbort\Getui\Sdk\IGetui\Req;

use Fallbort\Getui\Sdk\Protobuf\Type\PBEnum;

class ServerNotify_NotifyType extends PBEnum
{
    const normal = 0;
    const serverListChanged = 1;
    const exception = 2;
}