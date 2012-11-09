<?php
namespace Ymc\DemoConsoleApp\Command;

use Symfony\Component\Console\Input\InputArgument,
    Symfony\Component\Console\Input\InputOption,
    Symfony\Component\Console,
    Symfony\Component\Console\Input\InputInterface,
    Symfony\Component\Console\Output\OutputInterface;

/**
 * Add command.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class Add extends Console\Command\Command
{
    /**
     * Configure command, set parameters definition and help.
     */
    protected function configure()
    {
        $this
            ->setName('php:info')
            ->setDescription('Prints some PHP Information')
            ->setDefinition(
            array(
                new InputArgument('query', InputArgument::REQUIRED, 'Hashtag to search for'),
                new InputArgument('rpp', InputArgument::REQUIRED, 'Number of tweets to display'),
                new InputOption('include-user-id', null, InputOption::VALUE_NONE, 'Include twitter us id')
            )
        )
            ->setHelp(
            sprintf(
                '%sCalculates the sum of two numbers.%s',
                PHP_EOL,
                PHP_EOL
            )
        );
    }

    /**
     * Calculates the sum of two numbers.
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $query = htmlentities($input->getArgument('query'));
        $rpp = intval($input->getArgument('rpp'), 10);
        $includeUserId = ($input->getOption('include-user-id') === true) ? "true" : "false";
        $twitterApiUrl = "http://search.twitter.com/search.json?q={$query}&rpp={$rpp}&include_entities=true&with_twitter_user_id={$includeUserId}";



        $output->write($result);
    }
}