<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Symfony\Component\Translation\Tests\Dumper;

use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Translation\Dumper\JsonFileDumper;
class JsonFileDumperTest extends \PHPUnit_Framework_TestCase
{
    public function testFormatCatalogue()
    {
        if (PHP_VERSION_ID < 50400) {
            $this->markTestIncomplete('PHP below 5.4 doesn\'t support JSON pretty printing');
        }
        $catalogue = new MessageCatalogue('en');
        $catalogue->add(array('foo' => 'bar'));
        $dumper = new JsonFileDumper();
        $this->assertStringEqualsFile(__DIR__ . '/../fixtures/resources.json', $dumper->formatCatalogue($catalogue, 'messages'));
    }
    public function testDumpWithCustomEncoding()
    {
        $catalogue = new MessageCatalogue('en');
        $catalogue->add(array('foo' => '"bar"'));
        $dumper = new JsonFileDumper();
        $this->assertStringEqualsFile(__DIR__ . '/../fixtures/resources.dump.json', $dumper->formatCatalogue($catalogue, 'messages', array('json_encoding' => JSON_HEX_QUOT)));
    }
}

?>