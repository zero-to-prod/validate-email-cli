<?php

namespace Zerotoprod\ValidateEmailCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\ValidateEmail\ValidateEmail;

#[AsCommand(
    name: 'validate-email-cli:validate',
    description: 'Validates an email. Returns `true` or `false`.'
)]
class ValidateCommand extends Command
{
    public const signature = 'validate-email-cli:validate';
    public const email = 'email';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeLn(
            ValidateEmail::isEmail($input->getArgument(self::email))
                ? 'true'
                : 'false'
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument(self::email, InputArgument::REQUIRED, 'email');
    }
}