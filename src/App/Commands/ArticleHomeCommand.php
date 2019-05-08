<?php
namespace Console\App\Commands;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Console\App\Data\ProcessData;
 
class ArticleHomeCommand extends Command
{
    protected function configure()
    {
        $this->setName('portada')
            ->setDescription('Obtiene todos los articulos de portada. Para especificar numero usar: portada [num]')
            ->addArgument('num', InputArgument::OPTIONAL, 'Especifica el numero de articulos.');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {

    global $config;

    $num = $input->getArgument('num');

    require('./src/App/Data/ProcessData.php');
        
    $result = getArticles($config['db_portada'], $num);
   
    return $output->writeln("<info>$result</info>"); 
    
    }
    
}