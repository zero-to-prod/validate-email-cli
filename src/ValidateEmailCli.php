<?php

namespace Zerotoprod\ValidateEmailCli;

use Symfony\Component\Console\Application;
use Zerotoprod\ValidateEmailCli\Src\SrcCommand;

class ValidateEmailCli
{
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ValidateCommand());
    }
}