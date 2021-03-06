<?php
class MageUnit_LayoutTest extends \PHPUnit\Framework\TestCase
{
    protected function tearDown()
    {
        Mage::app()->getLayout()->unregisterBlockMock('core/template');
    }

    public function testLayoutHasBeenMocked()
    {
        $this->assertInstanceOf('MageUnit_Mock_Core_Model_Layout', Mage::app()->getLayout());
    }
}
