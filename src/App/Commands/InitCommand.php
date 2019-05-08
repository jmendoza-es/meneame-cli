<?php

namespace Console\App\Commands;
 
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Process\Process;

 
class InitCommand extends Command
{
    protected function configure()
    {
        $this->setName('init')
            ->setDescription('Inicializa el proceso de lectura de base de datos');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $app = new Process(['php','./src/App/Data/GetData.php']);
        $app->run(function ($type, $buffer) {
            if (Process::ERR === $type) {
                echo 'Error: '.$buffer;
            } else {
                echo $buffer;
            }
        });

    }
}