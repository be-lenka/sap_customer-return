<?php
/**
 * APICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreateTest
 *
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
 * Please update the test case below to test the model.
 */

namespace BeLenka\SAP\CustomerReturn\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * APICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreateTest Class Doc Comment
 *
 * @category    Class
 * @description APICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreate
 * @package     BeLenka\SAP\CustomerReturn
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class APICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreateTest extends TestCase
{

    /**
     * Setup before running any test case
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
     * Test "APICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreate"
     */
    public function testAPICUSTOMERRETURNSRVACustomerReturnRelatedObjectTypeCreate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sd_document_related_object_type"
     */
    public function testPropertySdDocumentRelatedObjectType()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sd_doc_related_object_system"
     */
    public function testPropertySdDocRelatedObjectSystem()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sd_doc_related_object_reference1"
     */
    public function testPropertySdDocRelatedObjectReference1()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sd_doc_related_object_reference2"
     */
    public function testPropertySdDocRelatedObjectReference2()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "to_customer_return"
     */
    public function testPropertyToCustomerReturn()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
