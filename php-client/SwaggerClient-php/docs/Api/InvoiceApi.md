# Swagger\Client\InvoiceApi

All URIs are relative to *http://beeusoft.mx/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**newInvoice**](InvoiceApi.md#newInvoice) | **POST** /invoices | Crea una nueva factura y es mandada a timbrar a Adminpaq


# **newInvoice**
> \Swagger\Client\Model\Invoice newInvoice($body)

Crea una nueva factura y es mandada a timbrar a Adminpaq

Recibe todos los datos necesarios para generar una factura y estos son enviados a Adminpaq para generarla y timbrarla.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InvoiceApi();
$body = new \Swagger\Client\Model\Invoice(); // \Swagger\Client\Model\Invoice | Objeto con información de la factura.

try {
    $result = $api_instance->newInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->newInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Invoice**](../Model/\Swagger\Client\Model\Invoice.md)| Objeto con información de la factura. |

### Return type

[**\Swagger\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

