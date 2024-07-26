<?php
/**
 * ItemPartnerApiTest
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
 * ItemPartnerApiTest Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemPartnerApiTest extends TestCase
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
     * Test case for aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerGet
     *
     * Reads the item-level business partners of a specific item..
     *
     */
    public function testACustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerPost
     *
     * Creates a header partner for a returns order..
     *
     */
    public function testACustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToPartnerPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionDelete
     *
     * Deletes a specific item-level business partner..
     *
     */
    public function testACustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionGet
     *
     * Reads a specific item-level business partner..
     *
     */
    public function testACustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionPatch
     *
     * Updates a specific item-level business partner..
     *
     */
    public function testACustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionPatch()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnGet
     *
     * Reads the returns order header for a specific item-level business partner..
     *
     */
    public function testACustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnItemGet
     *
     * Reads the returns order item for a specific item-level business partner..
     *
     */
    public function testACustomerReturnItemPartnerCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPartnerFunctionPartnerFunctionToCustomerReturnItemGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnItemPartnerGet
     *
     * Reads all item-level business partners..
     *
     */
    public function testACustomerReturnItemPartnerGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnItemPartnerPost
     *
     * Creates a partner for a returns order item with a specific partner function..
     *
     */
    public function testACustomerReturnItemPartnerPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
