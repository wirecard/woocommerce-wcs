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
 * Test class for QentaCEE_Client_QPay_Return_Cancel.
 * Generated by PHPUnit on 2011-06-24 at 13:25:58.
 */
use PHPUnit\Framework\TestCase;

class QentaCEE_QPay_Return_SuccessTest extends TestCase
{

    /**
     * @var QentaCEE_QPay_Return_Success
     */
    protected $object;
    protected $_returnData = Array(
        'amount'                   => '1',
        'currency'                 => 'EUR',
        'paymentType'              => 'QUICK',
        'financialInstitution'     => 'QUICK',
        'language'                 => 'de',
        'orderNumber'              => '16280512',
        'paymentState'             => 'SUCCESS',
        'gatewayReferenceNumber'   => 'DGW_16280512_RN',
        'gatewayContractNumber'    => 'DemoContractNumber123',
        'avsResponseCode'          => 'X',
        'avsResponseMessage'       => 'Demo AVS ResultMessage',
        'responseFingerprintOrder' => 'amount,currency,paymentType,financialInstitution,language,orderNumber,paymentState,gatewayReferenceNumber,gatewayContractNumber,avsResponseCode,avsResponseMessage,secret,responseFingerprintOrder',
        'responseFingerprint'      => '0ec59bd2d811d5018f2df9865fc2fb6cd46c45ee9abc2026b78ccbf70f4d3be626722f797127c34db7fa8147acdc218d7042915fc0b8ee3c3de9d236318a36f5'
    );

    protected $_secret = 'B8AKTPWBRMNBV455FG6M2DANE99WU2';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        QentaCEE_Stdlib_Fingerprint::setHashAlgorithm(QentaCEE_Stdlib_Fingerprint::HASH_ALGORITHM_MD5);
        $this->object = new QentaCEE_QPay_Return_Success($this->_returnData, $this->_secret);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {

    }

    public function testGetAmount()
    {
        $this->assertEquals('1', $this->object->getAmount());
    }

    public function testGetCurrency()
    {
        $this->assertEquals('EUR', $this->object->getCurrency());
    }

    public function testGetPaymentType()
    {
        $this->assertEquals('QUICK', $this->object->getPaymentType());
    }

    public function testGetFinancialInstitution()
    {
        $this->assertEquals('QUICK', $this->object->getFinancialInstitution());
    }

    public function testGetLanguage()
    {
        $this->assertEquals('de', $this->object->getLanguage());
    }

    public function testGetOrderNumber()
    {
        $this->assertEquals('16280512', $this->object->getOrderNumber());
    }

    public function testGetGatewayReferenceNumber()
    {
        $this->assertEquals('DGW_16280512_RN', $this->object->getGatewayReferenceNumber());
    }

    public function testGetGatewayContractNumber()
    {
        $this->assertEquals('DemoContractNumber123', $this->object->getGatewayContractNumber());
    }

    public function testGetAvsResponseCode()
    {
        $this->assertEquals('X', $this->object->getAvsResponseCode());
    }

    public function testGetAvsResponseMessage()
    {
        $this->assertEquals('Demo AVS ResultMessage', $this->object->getAVSResponseMessage());
    }

    public function testValidate()
    {
        $this->assertTrue($this->object->validate());
    }

    public function testValidateFalse()
    {
        $this -> expectException(QentaCEE_Stdlib_Exception_UnexpectedValueException::class);
        $object = new QentaCEE_QPay_Return_Success($this->_returnData, '');
        try {
            $returned = $object->validate();
            $this->assertFalse($returned);
        } catch (QentaCEE_Stdlib_Exception_InvalidArgumentException $e) {
            $this->assertContains('Secret is empty', $e->getMessage());
        }
    }

    public function testValidateNoFingerprintOrder()
    {
        $returnData = $this->_returnData;
        unset( $returnData['responseFingerprintOrder'] );
        $object = new QentaCEE_QPay_Return_Success($returnData, $this->_secret);
        try {
            $returned = $object->validate();
            $this->assertFalse($returned);
        } catch (QentaCEE_Stdlib_Exception_InvalidArgumentException $e) {
            $this->assertContains('Parameter responseFingerprintOrder has not been returned', $e->getMessage());
        }
    }

    public function testValidateMagicQuotes()
    {
        $this->assertTrue($this->object->validate());
    }

    public function testGetPaymentState()
    {
        $this->assertEquals('SUCCESS', $this->object->getPaymentState());
    }

    public function testGetReturned()
    {
        $returned = $this->object->getReturned();
        $this->assertArrayHasKey('amount', $returned);
        $this->assertArrayHasKey('currency', $returned);
        $this->assertArrayHasKey('paymentType', $returned);
        $this->assertArrayHasKey('financialInstitution', $returned);
        $this->assertArrayHasKey('language', $returned);
        $this->assertArrayHasKey('orderNumber', $returned);
        $this->assertArrayHasKey('paymentState', $returned);
        $this->assertArrayHasKey('gatewayReferenceNumber', $returned);
        $this->assertArrayHasKey('gatewayContractNumber', $returned);
        $this->assertArrayHasKey('avsResponseCode', $returned);
        $this->assertArrayHasKey('avsResponseMessage', $returned);
        $this->assertArrayNotHasKey('responseFingerprintOrder', $returned);
        $this->assertArrayNotHasKey('responseFingerprint', $returned);
    }
}
