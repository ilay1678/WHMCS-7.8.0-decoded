<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Composer\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
/**
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class AboutCommand extends BaseCommand
{
    protected function configure()
    {
        $this->setName('about')->setDescription('Short information about Composer')->setHelp(<<<EOT
<info>php composer.phar about</info>
EOT
);
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getIO()->write(<<<EOT
<info>Composer - Package Management for PHP</info>
<comment>Composer is a dependency manager tracking local dependencies of your projects and libraries.
See https://getcomposer.org/ for more information.</comment>
EOT
);
    }
}

?>