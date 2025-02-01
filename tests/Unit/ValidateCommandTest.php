<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\ValidateEmailCli\Validate\ValidateCommand;

class ValidateCommandTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new ValidateCommand());

        $Command = $Application->find(ValidateCommand::signature);
        $CommandTester = new CommandTester($Command);
        $CommandTester->execute([
            ValidateCommand::email => 'user@domain.com'
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}