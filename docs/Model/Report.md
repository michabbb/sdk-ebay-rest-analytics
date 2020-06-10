# # Report

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dimensionMetadata** | [**\macropage\SDKs\ebay\rest\analytics\Model\Metadata[]**](Metadata.md) | A complex type containing the header of the report and the type of data containted in the rows of the report. | [optional] 
**endDate** | **string** | The time stamp is formatted as an ISO 8601 string, which is based on the 24-hour Universal Coordinated Time (UTC) clock. If you specify an end date that is beyond the lastUpdatedDate value, eBay returns a report that contains data only up to the lastUpdateDate date. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2018-08-20T07:09:00.000Z | [optional] 
**header** | [**\macropage\SDKs\ebay\rest\analytics\Model\Header**](Header.md) |  | [optional] 
**lastUpdatedDate** | **string** | The date and time, in ISO 8601 format, that indicates the last time the data returned in the report was updated. | [optional] 
**records** | [**\macropage\SDKs\ebay\rest\analytics\Model\Record[]**](Record.md) | A complex type containing the individual data records for the traffic report. | [optional] 
**startDate** | **string** | The start date of the date range used to calculate the report, in ISO 8601 format. | [optional] 
**warnings** | [**\macropage\SDKs\ebay\rest\analytics\Model\Error[]**](Error.md) | An array of any process errors or warnings that were generated during the processing of the call processing. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


