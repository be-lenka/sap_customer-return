<?php
/**
 * ReturnsOrderHeaderApiTest
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
 * ReturnsOrderHeaderApiTest Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\CustomerReturn
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnsOrderHeaderApiTest extends TestCase
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
     * Test case for aCustomerReturnCustomerReturnDelete
     *
     * Deletes a specific returns order..
     *
     */
    public function testACustomerReturnCustomerReturnDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnCustomerReturnGet
     *
     * Reads the header of a specific returns order..
     *
     */
    public function testACustomerReturnCustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnCustomerReturnPatch
     *
     * Updates the header of a specific returns order..
     *
     */
    public function testACustomerReturnCustomerReturnPatch()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnCustomerReturnToCustomerReturnOverviewStatusGet
     *
     * Reads the customer return overview statuses of a specific returns order..
     *
     */
    public function testACustomerReturnCustomerReturnToCustomerReturnOverviewStatusGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnCustomerReturnToItemGet
     *
     * Reads all items of a specific returns order..
     *
     */
    public function testACustomerReturnCustomerReturnToItemGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnCustomerReturnToItemPost
     *
     * Creates one or more items for a specific returns order..
     *
     */
    public function testACustomerReturnCustomerReturnToItemPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnCustomerReturnToPartnerGet
     *
     * Reads the header-level business partners of a specific returns order..
     *
     */
    public function testACustomerReturnCustomerReturnToPartnerGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnCustomerReturnToPartnerPost
     *
     * Creates a header partner for a returns order..
     *
     */
    public function testACustomerReturnCustomerReturnToPartnerPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnCustomerReturnToPricingElementGet
     *
     * Reads the header-level pricing elements of a specific returns order..
     *
     */
    public function testACustomerReturnCustomerReturnToPricingElementGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnCustomerReturnToRelatedObjectGet
     *
     * Reads the related objects from a returns order header..
     *
     */
    public function testACustomerReturnCustomerReturnToRelatedObjectGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnCustomerReturnToRelatedObjectPost
     *
     * Creates related objects for a returns order header..
     *
     */
    public function testACustomerReturnCustomerReturnToRelatedObjectPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnCustomerReturnToTextGet
     *
     * Reads the header-level texts of a specific returns order..
     *
     */
    public function testACustomerReturnCustomerReturnToTextGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnGet
     *
     * Reads all returns order headers..
     *
     */
    public function testACustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToCustomerReturnGet
     *
     * Reads the returns order header for a specific item..
     *
     */
    public function testACustomerReturnItemCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemToCustomerReturnGet()
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
     * Test case for aCustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet
     *
     * Reads the returns order header for a specific item-level pricing element..
     *
     */
    public function testACustomerReturnItemPrcgElmntCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet
     *
     * Reads the returns order header for a specific item-level related object..
     *
     */
    public function testACustomerReturnItemRelatedObjCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet
     *
     * Reads the returns order header for a specific piece of item-level text..
     *
     */
    public function testACustomerReturnItemTextCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnPartnerCustomerReturnCustomerReturnPartnerFunctionPartnerFunctionToCustomerReturnGet
     *
     * Reads the returns order header for a specific header-level business partner..
     *
     */
    public function testACustomerReturnPartnerCustomerReturnCustomerReturnPartnerFunctionPartnerFunctionToCustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnPost
     *
     * Creates one or more returns order headers..
     *
     */
    public function testACustomerReturnPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet
     *
     * Reads the returns order header for a specific header-level pricing element..
     *
     */
    public function testACustomerReturnPrcgElmntCustomerReturnCustomerReturnPricingProcedureStepPricingProcedureStepPricingProcedureCounterPricingProcedureCounterToCustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnGet
     *
     * Reads the returns order header for a specific advanced returns process step..
     *
     */
    public function testACustomerReturnProcessStepRetsMgmtProcessRetsMgmtProcessRetsMgmtProcessItemRetsMgmtProcessItemRetsMgmtProcItmQtySplitRetsMgmtProcItmQtySplitRetsMgmtProcessStepRetsMgmtProcessStepReturnsDocumentTypeReturnsDocumentTypeReturnsDocumentReturnsDocumentReturnsDocumentItemReturnsDocumentItemToCustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet
     *
     * Reads the returns order header for a specific related object..
     *
     */
    public function testACustomerReturnRelatedObjectCustomerReturnCustomerReturnSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToCustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnGet
     *
     * Reads the returns order header for a specific schedule line..
     *
     */
    public function testACustomerReturnScheduleLineCustomerReturnCustomerReturnCustomerReturnItemCustomerReturnItemScheduleLineScheduleLineToCustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aCustomerReturnTextCustomerReturnCustomerReturnLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet
     *
     * Reads the returns order header for a specific piece of header-level text..
     *
     */
    public function testACustomerReturnTextCustomerReturnCustomerReturnLanguageLanguageLongTextIDLongTextIDToCustomerReturnGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}