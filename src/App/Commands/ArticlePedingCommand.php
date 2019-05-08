<?php
namespace Console\App\Commands;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

 /* 

    Comando obtención de artículos de pendientes

*/

class ArticlePedingCommand extends Command
{
    protected function configure()
    {
        $this->setName('pendientes')
            ->setDescription('Obtiene todos los articulos de la cola de pendientes. Para especificar numero usar: pendientes [num]')
            ->addArgument('num', InputArgument::OPTIONAL, 'Especifica el numero de articulos.');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {

    global $config;

    $num = $input->getArgument('num');

    require('./src/App/Data/ProcessData.php');
        
    $result = getArticles($config['db_pendientes'], $num);
   
    return $output->writeln("<info>$result</info>"); 
    
    }
}