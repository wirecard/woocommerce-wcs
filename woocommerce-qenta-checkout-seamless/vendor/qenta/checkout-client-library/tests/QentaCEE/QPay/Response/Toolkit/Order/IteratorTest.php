<?php

/**
 * Shop System Plugins - Terms of Use
 *
 * The plugins offered are provided free of charge by Qenta Payment CEE GmbH
 * (abbreviated to Qenta CEE) and are explicitly not part of the Qenta CEE range of
 * products and services.
 *
 * They have been tested and approved for full functionality in the standard configuration
 * (status on delivery) of the corresponding shop system. They are under General Public
 * License Version 2 (GPLv2) and can be used, developed and passed on to third parties under
 * the same terms.
 *
 * However, Qenta CEE does not provide any guarantee or accept any liability for any errors
 * occurring when used in an enhanced, customized shop system configuration.
 *
 * Operation in an enhanced, customized configuration is at your own risk and requires a
 * comprehensive test phase by the user of the plugin.
 *
 * Customers use the plugins at their own risk. Qenta CEE does not guarantee their full
 * functionality neither does Qenta CEE assume liability for any disadvantages related to
 * the use of the plugins. Additionally, Qenta CEE does not guarantee the full functionality
 * for customized shop systems or installed plugins of other vendors of plugins within the same
 * shop system.
 *
 * Customers are responsible for testing the plugin's functionality before starting productive
 * operation.
 *
 * By installing the plugin into the shop system the customer agrees to these terms of use.
 * Please do not use the plugin if you do not agree to these terms of use!
 */
use PHPUnit\Framework\TestCase;

class QentaCEE_QPay_Response_Toolkit_Order_OrderIteratorTestObject extends QentaCEE_QPay_Response_Toolkit_Order_OrderIterator
{
}

/**
 * Test class for QentaCEE_QPay_Response_Toolkit_Order_IteratorTest.
 * Generated by PHPUnit on 2011-06-24 at 13:26:18.
 */
class QentaCEE_QPay_Response_Toolkit_Order_IteratorTest extends TestCase
{


    /**
     * @var QentaCEE_QPay_Response_Toolkit_Order_OrderIteratorTestObject
     */
    protected $object;

    public function setUp(): void
    {
        $data         = Array('a', 'b', 'c', 'd');
        $this->object = new QentaCEE_QPay_Response_Toolkit_Order_OrderIteratorTestObject($data);
    }

    public function testCurrent()
    {
        $this->assertEquals('a', $this->object->current());
    }

    public function testNext()
    {
        $this->object->next();
        $this->assertEquals('b', $this->object->current());
    }

    public function testRewind()
    {
        $this->object->next();
        $this->object->next();
        $this->object->rewind();
        $this->assertEquals('a', $this->object->current());
    }

    public function testValid()
    {
        $this->assertTrue($this->object->valid());
        $this->object->next();
        $this->assertTrue($this->object->valid());
        $this->object->next();
        $this->assertTrue($this->object->valid());
        $this->object->next();
        $this->assertTrue($this->object->valid());
    }

    public function testNotValid()
    {
        $this->object->next();
        $this->object->next();
        $this->object->next();
        $this->object->next();
        $this->object->next();
        $this->assertFalse($this->object->valid());
    }

    public function testKey()
    {
        $this->object->next();
        $this->assertEquals('1', $this->object->key());
    }
}