<?php

namespace Ymc\DemoConsoleApp\Cli;

use Symfony\Component\Console\Application,
    Ymc\DemoConsoleApp\Command as Command;

/**
* Calculator application.
*
* @author Saša Stamenković <umpirsky@gmail.com>
*/
class App extends Application {
    /**
     * Calculator constructor.
     */
    public function __construct() {
        parent::__construct('Welcome to YMC Demo Console App', '0.1');

        $this->addCommands(array(
            new Command\Add()
                // Add more commands if you want
        ));
    }
}