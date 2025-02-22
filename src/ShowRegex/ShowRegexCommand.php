<?php

namespace Zerotoprod\ValidateEmailCli\ShowRegex;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\RegexEmail\RegexEmail;

/**
 * @link https://github.com/zero-to-prod/validate-email-cli
 */
#[AsCommand(
    name: ShowRegexCommand::signature,
    description: 'Shows the regex used to validate an email.'
)]
class ShowRegexCommand extends Command
{
    /**
     * @link https://github.com/zero-to-prod/validate-email-cli
     */
    public const signature = 'validate-email-cli:show-regex';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeLn(RegexEmail::pattern);

        return Command::SUCCESS;
    }
}