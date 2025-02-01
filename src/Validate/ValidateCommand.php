<?php

namespace Zerotoprod\ValidateEmailCli\Validate;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\ValidateEmail\ValidateEmail;

#[AsCommand(
    name: ValidateCommand::signature,
    description: 'Validates an email. Returns the email when valid, null otherwise.'
)]
class ValidateCommand extends Command
{
    public const signature = 'validate-email-cli:validate';
    public const email = 'email';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $email = $input->getArgument(self::email);
        $output->writeLn(
            ValidateEmail::isEmail($email)
                ? $email
                : ''
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument(self::email, InputArgument::REQUIRED, self::email);
    }
}