<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventoryImportExport\Test\Unit\Plugin\Import;

use Magento\Framework\TestFramework\Unit\Helper\ObjectManager as ObjectManagerHelper;
use Magento\ImportExport\Model\Import\EntityInterface;
use Magento\InventoryImportExport\Plugin\Import\AbstractEntityNeedToLogin;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Assigning products to default source
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class AbstractEntityNeedToLoginTest extends TestCase
{
    /**
     * @var AbstractEntityNeedToLogin
     */
    private $plugin;

    /**
     * @var ObjectManagerHelper
     */
    private $objectManagerHelper;

    /**
     * @var EntityInterface|MockObject
     */
    private $subjectMock;

    protected function setUp(): void
    {
        $this->subjectMock = $this->getMockBuilder(EntityInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->objectManagerHelper = new ObjectManagerHelper($this);
        $this->plugin = $this->objectManagerHelper->getObject(AbstractEntityNeedToLogin::class);
    }

    /**
     * Test for method afterIsNeedToLogInHistory()
     *
     * @covers \Magento\InventoryImportExport\Plugin\Import\AbstractEntityNeedToLogin::afterIsNeedToLogInHistory
     */
    public function testAfterIsNeedToLogInHistory()
    {
        $result = 'result';
        $this->assertTrue($this->plugin->afterIsNeedToLogInHistory($this->subjectMock, $result));
    }
}
