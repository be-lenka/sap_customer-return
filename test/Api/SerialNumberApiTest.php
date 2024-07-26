<?php
/**
 * SerialNumberApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Customer Return (A2X)
 *
 * You can use this service to integrate external applications with customer return processing in SAP S/4HANA Cloud. In every API call, you can make use of the following operations:   - You can retrieve returns orders. Apply any of the filters provided or retrieve all existing data.   - You can create returns orders. Note that you must use “deep insert” requests (a header plus the following entities: header partner, header pricing element, item, item partner, and item pricing element). You cannot create headers without including any related entities.   - For existing returns orders, you can create new items. Note that you must use “deep insert” requests (with the following entities: item partner and item pricing element). You cannot create items without including any related entities.   - For existing returns orders, you can add additional business partners at header and item levels.   - For existing returns orders, you can update the header, header partner, header pricing element, item, item partner, and item pricing element.   - For existing returns orders, you can delete the header, header partner, header pricing element, item, item partner, and item pricing element.
 *
 * The version of the OpenAPI document: 1.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace BeLenka\SAP\CustomerReturn\Test\Api;

use \BeLenka\SAP\CustomerReturn\Configuration;
use \BeLenka\SAP\CustomerReturn\ApiException;
use \BeLenka\SAP\CustomerReturn\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * SerialNumberApiTest Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SerialNumberApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToSerialNumberGet
     *
     * Reads the serial numbers of a specific item..
     *
     */
    public function testACustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToSerialNumberGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnSerialNumberCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSerialNumberSerialNumberGet
     *
     * Reads a specific serial number..
     *
     */
    public function testACustomerReturnSerialNumberCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSerialNumberSerialNumberGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnSerialNumberGet
     *
     * Reads all serial numbers..
     *
     */
    public function testACustomerReturnSerialNumberGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
