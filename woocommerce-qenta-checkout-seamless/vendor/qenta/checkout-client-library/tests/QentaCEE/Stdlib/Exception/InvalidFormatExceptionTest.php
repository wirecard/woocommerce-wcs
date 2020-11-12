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

/**
 * Test class for QentaCEE_Client_Stdlib_Exception.
 * Generated by PHPUnit on 2011-06-24 at 13:25:52.
 */
use PHPUnit\Framework\TestCase;

class QentaCEE_Stdlib_Exception_InvalidFormatExceptionTest extends TestCase
{

    /**
     * @var QentaCEE_Stdlib_Exception_InvalidFormatException
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new QentaCEE_Stdlib_Exception_InvalidFormatException('objectMessage', 666);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {

    }

    public function testThrowExceptionWithoutData()
    {
        try {
            throw new QentaCEE_Stdlib_Exception_InvalidFormatException();
        } catch (QentaCEE_Stdlib_Exception_InvalidFormatException $e) {
            $this->assertEquals('', $e->getMessage());
            $this->assertEquals(0, $e->getCode());
            $this->assertEquals('', $e->getPrevious());
        }
    }

    public function testThrowExceptionWithData()
    {
        try {
            throw new QentaCEE_Stdlib_Exception_InvalidFormatException('message', 1234);
        } catch (QentaCEE_Stdlib_Exception_InvalidFormatException $e) {
            $this->assertEquals('message', $e->getMessage());
            $this->assertEquals(1234, $e->getCode());
            $this->assertEquals('', $e->getPrevious());
        }
    }

    public function getThrowExceptionWithPrevious()
    {
        try {
            throw new QentaCEE_Stdlib_Exception_InvalidFormatException('message', 111, $this->object);
        } catch (QentaCEE_Stdlib_Exception_InvalidFormatException $e) {
            $this->assertEquals('message', $e->getMessage());
            $this->assertEquals(1234, $e->getCode());
            $this->assertEquals($this->object, $e->getPrevious());
        }
    }
}

?>
