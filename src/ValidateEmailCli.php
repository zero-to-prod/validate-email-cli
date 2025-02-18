<?php

namespace Zerotoprod\ValidateEmailCli;

use Symfony\Component\Console\Application;
use Zerotoprod\ValidateEmailCli\ShowRegex\ShowRegexCommand;
use Zerotoprod\ValidateEmailCli\Src\SrcCommand;
use Zerotoprod\ValidateEmailCli\Validate\ValidateCommand;

/**
 * A CLI for Validating an Email
 *
 * @link https://github.com/zero-to-prod/validate-email-cli
 */
class ValidateEmailCli
{
    /**
     * @link https://github.com/zero-to-prod/validate-email-cli
     */
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ShowRegexCommand());
        $Application->add(new ValidateCommand());
    }
}