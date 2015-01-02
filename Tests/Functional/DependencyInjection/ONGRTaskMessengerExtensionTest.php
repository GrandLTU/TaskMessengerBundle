<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\TaskMessengerBundle\Tests\Functional\DependencyInjection;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ONGRTaskMessengerExtensionTest extends WebTestCase
{
    /**
     * Test if TaskPublisher service was created.
     */
    public function testTaggedServices()
    {
        $container = self::createClient()->getContainer();
        $this->assertTrue($container->has('ongr_task_messenger.task_publisher'));
    }
}
