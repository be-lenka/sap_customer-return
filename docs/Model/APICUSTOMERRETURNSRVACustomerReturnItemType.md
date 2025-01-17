# # APICUSTOMERRETURNSRVACustomerReturnItemType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_return** | **string** |  | [optional]
**customer_return_item** | **string** |  | [optional]
**higher_level_item** | **string** | Higher-Level Item in Bill of Material Structures | [optional]
**customer_return_item_category** | **string** | Sales Document Item Category | [optional]
**customer_return_item_text** | **string** | Short Text for Sales Order Item | [optional]
**purchase_order_by_customer** | **string** |  | [optional]
**material** | **string** | Material Number | [optional]
**material_by_customer** | **string** | Material Number Used by Customer | [optional]
**requested_quantity** | **float** |  | [optional]
**requested_quantity_unit** | **string** | Unit of the Requested Quantity | [optional]
**item_gross_weight** | **float** | Gross Weight of the Item | [optional]
**item_net_weight** | **float** | Net Weight of the Item | [optional]
**item_weight_unit** | **string** |  | [optional]
**item_volume** | **float** | Volume of the item | [optional]
**item_volume_unit** | **string** |  | [optional]
**transaction_currency** | **string** | SD Document Currency | [optional]
**net_amount** | **float** | Net Value of the Document Item in Document Currency | [optional]
**subtotal1_amount** | **float** | Subtotal 1 from Pricing Procedure for Price Element | [optional]
**subtotal2_amount** | **float** | Subtotal 2 from Pricing Procedure for Price Element | [optional]
**subtotal3_amount** | **float** | Subtotal 3 from Pricing Procedure for Price Element | [optional]
**subtotal4_amount** | **float** | Subtotal 4 from Pricing Procedure for Price Element | [optional]
**subtotal5_amount** | **float** | Subtotal 5 from Pricing Procedure for Price Element | [optional]
**subtotal6_amount** | **float** | Subtotal 6 from Pricing Procedure for Price Element | [optional]
**material_group** | **string** |  | [optional]
**batch** | **string** | Batch Number | [optional]
**production_plant** | **string** | Plant (Own or External) | [optional]
**storage_location** | **string** |  | [optional]
**shipping_point** | **string** | Shipping Point / Receiving Point | [optional]
**shipping_type** | **string** |  | [optional]
**delivery_priority** | **string** |  | [optional]
**incoterms_classification** | **string** | Incoterms (Part 1) | [optional]
**incoterms_transfer_location** | **string** |  | [optional]
**incoterms_location1** | **string** |  | [optional]
**incoterms_location2** | **string** |  | [optional]
**customer_payment_terms** | **string** | Key for Terms of Payment | [optional]
**product_tax_classification1** | **string** | Tax Classification for Material | [optional]
**product_tax_classification2** | **string** | Tax Classification for Material | [optional]
**product_tax_classification3** | **string** | Tax Classification for Material | [optional]
**product_tax_classification4** | **string** | Tax Classification for Material | [optional]
**product_tax_classification5** | **string** | Tax Classification for Material | [optional]
**product_tax_classification6** | **string** | Tax Classification for Material | [optional]
**product_tax_classification7** | **string** | Tax Classification for Material | [optional]
**product_tax_classification8** | **string** | Tax Classification for Material | [optional]
**product_tax_classification9** | **string** | Tax Classification for Material | [optional]
**sales_document_rjcn_reason** | **string** | Reason for Rejection of Sales Documents | [optional]
**item_billing_block_reason** | **string** | Billing Block for Item | [optional]
**profit_center** | **string** |  | [optional]
**rets_mgmt_process** | **string** | Process Identification Number | [optional]
**rets_mgmt_process_item** | **string** | Item Number | [optional]
**return_reason** | **string** |  | [optional]
**rets_mgmt_processing_block** | **string** | Approval Block | [optional]
**cust_ret_itm_follow_up_activity** | **string** | Follow-Up Activity Code | [optional]
**returns_material_has_been_received** | **string** |  | [optional]
**returns_refund_type** | **string** |  | [optional]
**returns_refund_procg_mode** | **string** | Refund Processing Mode for a Return | [optional]
**rets_prod_valn_is_suspended** | **string** |  | [optional]
**returns_refund_extent** | **string** | Returns Refund Code | [optional]
**prelim_refund_is_determined** | **string** |  | [optional]
**returns_refund_rjcn_reason** | **string** | Rejection Reason for Credit Memo Request | [optional]
**replacement_material** | **string** |  | [optional]
**replacement_material_quantity** | **float** | Replacement Material Quantity | [optional]
**replacement_material_qty_unit** | **string** | Replacement Material Unit of Measure | [optional]
**replacement_material_is_requested** | **string** |  | [optional]
**replacement_matl_supplying_plant** | **string** | Supplying Plant for Replacement Material | [optional]
**next_plant_for_follow_up_activity** | **string** |  | [optional]
**returns_transshipment_plant** | **string** |  | [optional]
**supplier** | **string** | Account Number of Supplier | [optional]
**supplier_ret_matl_authzn** | **string** |  | [optional]
**suplr_ret_matl_authzn_is_required** | **string** |  | [optional]
**customer_ret_matl_insp_result_code** | **string** | Customer Inspection Code | [optional]
**next_fllw_up_activity_for_matl_insp** | **string** | Default for Next Follow-Up Activity in Material Inspection | [optional]
**ret_matl_insp_result_code** | **string** |  | [optional]
**product_is_inspected_at_cust_site** | **string** |  | [optional]
**cust_ret_matl_authzn** | **string** |  | [optional]
**crm_logical_system** | **string** |  | [optional]
**crm_object_uuid** | **string** |  | [optional]
**crm_object_id** | **string** |  | [optional]
**crm_object_type** | **string** |  | [optional]
**rets_mgmt_itm_log_procg_status** | **string** | Logistical Processing Status of a Return | [optional]
**rets_mgmt_itm_compn_procg_status** | **string** | Status of Returns Refund Determination | [optional]
**rets_mgmt_itm_procg_status** | **string** |  | [optional]
**returns_document_status** | **string** | Status of Document Item | [optional]
**returns_document_approval_status** | **string** | Approval Status of Returns Process | [optional]
**sd_process_status** | **string** | Overall Processing Status (Item) | [optional]
**reference_sd_document** | **string** | Document Number of Reference Document | [optional]
**reference_sd_document_item** | **string** | Item Number of the Reference Item | [optional]
**reference_sd_document_category** | **string** |  | [optional]
**sd_document_rejection_status** | **string** | Rejection Status (Item) | [optional]
**to_customer_return** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnType**](APICUSTOMERRETURNSRVACustomerReturnType.md) |  | [optional]
**to_partner** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeToPartner**](APICUSTOMERRETURNSRVACustomerReturnItemTypeToPartner.md) |  | [optional]
**to_pricing_element** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeToPricingElement**](APICUSTOMERRETURNSRVACustomerReturnItemTypeToPricingElement.md) |  | [optional]
**to_process_step** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeToProcessStep**](APICUSTOMERRETURNSRVACustomerReturnItemTypeToProcessStep.md) |  | [optional]
**to_related_object** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeToRelatedObject**](APICUSTOMERRETURNSRVACustomerReturnItemTypeToRelatedObject.md) |  | [optional]
**to_schedule_line** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeToScheduleLine**](APICUSTOMERRETURNSRVACustomerReturnItemTypeToScheduleLine.md) |  | [optional]
**to_serial_number** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeToSerialNumber**](APICUSTOMERRETURNSRVACustomerReturnItemTypeToSerialNumber.md) |  | [optional]
**to_text** | [**\BeLenka\SAP\CustomerReturn\Model\APICUSTOMERRETURNSRVACustomerReturnItemTypeToText**](APICUSTOMERRETURNSRVACustomerReturnItemTypeToText.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
