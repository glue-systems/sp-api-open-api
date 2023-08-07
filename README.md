# sp-api-open-api

This package consists of a set of OpenAPI-generated PHP clients for making calls to Amazon Selling Partner API (SP-API). For more information on this use case, please visit [https://sellercentral.amazon.com/gp/mws/contactus.html](https://sellercentral.amazon.com/gp/mws/contactus.html).

The classes for each SP-API PHP client in [src/Clients](src/Clients) were auto-generated by the [OpenAPI Generator](https://openapi-generator.tech) project and organized into namespaces by the developers of Glue Systems, LLC.

The version of OpenAPI Generator Java JAR tool used for code generation was `3.3.4`, which at the time of this writing was the last stable version of OpenAPI Generator CLI that was compatible with PHP 5.

## Requirements

PHP 5 and later.

## How to Maintain or Contribute to this Repo

As new versions are released for each of the SP-API domains, it will be necessary to upgrade this repo in a systematic fashion. If you are contibuting to or maintaining this repo, please read the sections below carefully.

### Installing Legacy Versions of OpenAPI Generator

The official docs for version 3.3.4 can be found here: https://github.com/OpenAPITools/openapi-generator/tree/2353d71d4b02be6dbabe25aac1a9e56eb3b812a2

One caveat is that the URL provided for downloading the Java JAR file is invalid -- particularly, the `central.maven.org` subdomain and the `http` protocol no longer work. However, if you change the subdomain with protocol to `https://repo1.maven.org` and leave the rest of the URL the same, it should download properly.

You may find it helpful in your environment to download multiple versions of the JAR file into a dedicated `bin` folder, preserving the version number in the file name itself. This would allow you to use a Bash alias to associate `openapi-generator-cli` with the desired JAR file version depending on your needs.

Example download script for Linux & Mac for version 3.3.4 of the Java JAR file:

```BASH
wget https://repo1.maven.org/maven2/org/openapitools/openapi-generator-cli/3.3.4/openapi-generator-cli-3.3.4.jar -O openapi-generator-cli-3.3.4.jar
```

Example Bash alias declaration (e.g. in `~/.bash_profile`):

```
alias openapi-generator-cli='java -jar /path/to/your/bin/openapi-generator-cli-3.3.4.jar'
```

### Steps for Making Changes via OpenAPI Generator CLI

1. Install [the OpenAPI Generator CLI tool](https://openapi-generator.tech/docs/installation).
   - For instructions on installing a legacy version, see section [Installing Legacy Versions of OpenAPI Generator](#installing-legacy-versions-of-openapi-generator).
2. `cd` to the root of your cloned instance of this repository.
3. Clear out any existing code in your git-ignored `output` sub-directory.
4. Using your OpenAPI Generator CLI tool, generate the API client package follwing the template below:

```BASH
openapi-generator-cli generate -i models/[OPENAPI_SCHEMA_NAME.json] -g php -o output/[DOMAIN_SUB_NAMESPACE] --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\[DOMAIN_SUB_NAMESPACE]"
```

5. Delete the source-controlled version of the API client that is to be replaced by the new output -- if it exists, it will be at `src/Clients/[DOMAIN_SUB_NAMESPACE]`.
6. Replace the deleted API client with the newly-generated code in `output/[DOMAIN_SUB_NAMESPACE]/lib`.
7. Check the git diff carefully. Create a new git release according to the nature of the changes (bug fixes, new features, breaking changes). Document any significant changes so that subscribers to this repository can upgrade their downstream code accordingly.

Note that following the steps above will have the same end result whether you are adding a new SP-API client or modifying an existing one.

### Example Bash Scripts

Example Bash scripts are provided below for each of the included SP-API domains. These are for reference only, as they may vary depending on your environment.

#### A+ Content Management API v2020-11-01

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/AplusContentV20201101
openapi-generator-cli generate -i models/aplusContent_2020-11-01.json -g php -o output/AplusContentV20201101 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\AplusContentV20201101" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/AplusContentV20201101
mv output/AplusContentV20201101/lib src/Clients/AplusContentV20201101
```

#### Authorization API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/AuthorizationV1
openapi-generator-cli generate -i models/authorizationV1.json -g php -o output/AuthorizationV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\AuthorizationV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/AuthorizationV1
mv output/AuthorizationV1/lib src/Clients/AuthorizationV1
```

#### Catalog Items API v0

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/CatalogItemsV0
openapi-generator-cli generate -i models/catalogItemsV0.json -g php -o output/CatalogItemsV0 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\CatalogItemsV0" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/CatalogItemsV0
mv output/CatalogItemsV0/lib src/Clients/CatalogItemsV0
```

#### Catalog Items API v2020-12-01

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/CatalogItemsV20201201
openapi-generator-cli generate -i models/catalogItems_2020-12-01.json -g php -o output/CatalogItemsV20201201 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/CatalogItemsV20201201
mv output/CatalogItemsV20201201/lib src/Clients/CatalogItemsV20201201
```

#### Catalog Items API v2022-04-01

_(Not included; latest JSON schema incompatible with this version of OpenAPI Generator CLI)_

#### Definitions Product Types API v2020-09-01 (AKA Product Type Definitions API v2020-09-01)

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/DefinitionsProductTypesV20200901
openapi-generator-cli generate -i models/definitionsProductTypes_2020-09-01.json -g php -o output/DefinitionsProductTypesV20200901 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/DefinitionsProductTypesV20200901
mv output/DefinitionsProductTypesV20200901/lib src/Clients/DefinitionsProductTypesV20200901
```

#### Easy Ship API v2022-03-23

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/EasyShipV20220323
openapi-generator-cli generate -i models/easyShip_2022-03-23.json -g php -o output/EasyShipV20220323 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\EasyShipV20220323" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/EasyShipV20220323
mv output/EasyShipV20220323/lib src/Clients/EasyShipV20220323
```

#### FBA Inbound Eligibility API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/FbaInboundEligibilityV1
openapi-generator-cli generate -i models/fbaInboundV1.json -g php -o output/FbaInboundEligibilityV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/FbaInboundEligibilityV1
mv output/FbaInboundEligibilityV1/lib src/Clients/FbaInboundEligibilityV1
```

#### FBA Inventory API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/FbaInventoryV1
openapi-generator-cli generate -i models/fbaInventoryV1.json -g php -o output/FbaInventoryV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\FbaInventoryV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/FbaInventoryV1
mv output/FbaInventoryV1/lib src/Clients/FbaInventoryV1
```

#### FBA Small and Light API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/FbaSmallAndLightV1
openapi-generator-cli generate -i models/fbaSmallandLightV1.json -g php -o output/FbaSmallAndLightV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/FbaSmallAndLightV1
mv output/FbaSmallAndLightV1/lib src/Clients/FbaSmallAndLightV1
```

#### Feeds API v2020-09-04

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/FeedsV20200904
openapi-generator-cli generate -i models/feeds_2020-09-04.json -g php -o output/FeedsV20200904 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\FeedsV20200904" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/FeedsV20200904
mv output/FeedsV20200904/lib src/Clients/FeedsV20200904
```

#### Feeds API v2021-06-30

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/FeedsV20210630
openapi-generator-cli generate -i models/feeds_2021-06-30.json -g php -o output/FeedsV20210630 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\FeedsV20210630" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/FeedsV20210630
mv output/FeedsV20210630/lib src/Clients/FeedsV20210630
```

#### Finances API v0

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/FinancesV0
openapi-generator-cli generate -i models/financesV0.json -g php -o output/FinancesV0 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\FinancesV0" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/FinancesV0
mv output/FinancesV0/lib src/Clients/FinancesV0
```

#### Fulfillment Inbound API v0

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/FulfillmentInboundV0
openapi-generator-cli generate -i models/fulfillmentInboundV0.json -g php -o output/FulfillmentInboundV0 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/FulfillmentInboundV0
mv output/FulfillmentInboundV0/lib src/Clients/FulfillmentInboundV0
```

#### Listings Items API v2020-09-01

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/ListingsItemsV20200901
openapi-generator-cli generate -i models/listingsItems_2020-09-01.json -g php -o output/ListingsItemsV20200901 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/ListingsItemsV20200901
mv output/ListingsItemsV20200901/lib src/Clients/ListingsItemsV20200901
```

#### Orders API v0

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/OrdersV0
openapi-generator-cli generate -i models/ordersV0.json -g php -o output/OrdersV0 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\OrdersV0" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/OrdersV0
mv output/OrdersV0/lib src/Clients/OrdersV0
```

#### Product Pricing API v2022-05-01

_(Not included; latest JSON schema incompatible with this version of OpenAPI Generator CLI)_

#### Replenishment API v2022-11-07

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/ReplenishmentV20221107
openapi-generator-cli generate -i models/replenishment-2022-11-07.json -g php -o output/ReplenishmentV20221107 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/ReplenishmentV20221107
mv output/ReplenishmentV20221107/lib src/Clients/ReplenishmentV20221107
```

#### Reports API v2020-09-04

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/ReportsV20200904
openapi-generator-cli generate -i models/reports_2020-09-04.json -g php -o output/ReportsV20200904 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\ReportsV20200904" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/ReportsV20200904
mv output/ReportsV20200904/lib src/Clients/ReportsV20200904
```

#### Reports API v2021-06-30

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/ReportsV20210630
openapi-generator-cli generate -i models/reports_2021-06-30.json -g php -o output/ReportsV20210630 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\ReportsV20210630" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/ReportsV20210630
mv output/ReportsV20210630/lib src/Clients/ReportsV20210630
```

#### Sales API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/SalesV1
openapi-generator-cli generate -i models/salesV1.json -g php -o output/SalesV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\SalesV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/SalesV1
mv output/SalesV1/lib src/Clients/SalesV1
```

#### Sellers API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/SellersV1
openapi-generator-cli generate -i models/sellersV1.json -g php -o output/SellersV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\SellersV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/SellersV1
mv output/SellersV1/lib src/Clients/SellersV1
```

#### Services API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/ServicesV1
openapi-generator-cli generate -i models/servicesV1.json -g php -o output/ServicesV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\ServicesV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/ServicesV1
mv output/ServicesV1/lib src/Clients/ServicesV1
```

#### Shipment Invoicing API v0

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/ShipmentInvoicingV0
openapi-generator-cli generate -i models/shipmentInvoicingV0.json -g php -o output/ShipmentInvoicingV0 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/ShipmentInvoicingV0
mv output/ShipmentInvoicingV0/lib src/Clients/ShipmentInvoicingV0
```

#### Shipping API v1

_(Not included; latest JSON schema incompatible with this version of OpenAPI Generator CLI)_

#### Solicitations API v1

_(Not included; latest JSON schema incompatible with this version of OpenAPI Generator CLI)_

#### Supply Sources API v2020-07-01

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/SupplySourcesV20200701
openapi-generator-cli generate -i models/supplySources_2020-07-01.json -g php -o output/SupplySourcesV20200701 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/SupplySourcesV20200701
mv output/SupplySourcesV20200701/lib src/Clients/SupplySourcesV20200701
```

#### Tokens API v2021-03-01

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/TokensV20210301
openapi-generator-cli generate -i models/tokens_2021-03-01.json -g php -o output/TokensV20210301 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\TokensV20210301" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/TokensV20210301
mv output/TokensV20210301/lib src/Clients/TokensV20210301
```

#### Uploads API v2020-11-01

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/UploadsV20201101
openapi-generator-cli generate -i models/uploads_2020-11-01.json -g php -o output/UploadsV20201101 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\UploadsV20201101" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/UploadsV20201101
mv output/UploadsV20201101/lib src/Clients/UploadsV20201101
```

#### Vendor Direct Fulfillment Inventory API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/VendorDirectFulfillmentInventoryV1
openapi-generator-cli generate -i models/vendorDirectFulfillmentInventoryV1.json -g php -o output/VendorDirectFulfillmentInventoryV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/VendorDirectFulfillmentInventoryV1
mv output/VendorDirectFulfillmentInventoryV1/lib src/Clients/VendorDirectFulfillmentInventoryV1
```

#### Vendor Direct Fulfillment Orders API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/VendorDirectFulfillmentOrdersV1
openapi-generator-cli generate -i models/vendorDirectFulfillmentOrdersV1.json -g php -o output/VendorDirectFulfillmentOrdersV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/VendorDirectFulfillmentOrdersV1
mv output/VendorDirectFulfillmentOrdersV1/lib src/Clients/VendorDirectFulfillmentOrdersV1
```

#### Vendor Direct Fulfillment Orders API v2021-12-28

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/VendorDirectFulfillmentOrdersV20211228
openapi-generator-cli generate -i models/vendorDirectFulfillmentOrders_2021-12-28.json -g php -o output/VendorDirectFulfillmentOrdersV20211228 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/VendorDirectFulfillmentOrdersV20211228
mv output/VendorDirectFulfillmentOrdersV20211228/lib src/Clients/VendorDirectFulfillmentOrdersV20211228
```

#### Vendor Direct Fulfillment Payments API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/VendorDirectFulfillmentPaymentsV1
openapi-generator-cli generate -i models/vendorDirectFulfillmentPaymentsV1.json -g php -o output/VendorDirectFulfillmentPaymentsV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/VendorDirectFulfillmentPaymentsV1
mv output/VendorDirectFulfillmentPaymentsV1/lib src/Clients/VendorDirectFulfillmentPaymentsV1
```

#### Vendor Direct Fulfillment Sandbox Test Data API v2021-12-28

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/VendorDirectFulfillmentSandboxDataV20211228
openapi-generator-cli generate -i models/vendorDirectFulfillmentSandboxData_2021-10-28.json -g php -o output/VendorDirectFulfillmentSandboxDataV20211228 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/VendorDirectFulfillmentSandboxDataV20211228
mv output/VendorDirectFulfillmentSandboxDataV20211228/lib src/Clients/VendorDirectFulfillmentSandboxDataV20211228
```

#### Vendor Direct Fulfillment Shipping API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/VendorDirectFulfillmentShippingV1
openapi-generator-cli generate -i models/vendorDirectFulfillmentShippingV1.json -g php -o output/VendorDirectFulfillmentShippingV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/VendorDirectFulfillmentShippingV1
mv output/VendorDirectFulfillmentShippingV1/lib src/Clients/VendorDirectFulfillmentShippingV1
```

#### Vendor Direct Fulfillment Shipping API v2021-12-28

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/VendorDirectFulfillmentShippingV20211228
openapi-generator-cli generate -i models/vendorDirectFulfillmentShipping_2021-12-28.json -g php -o output/VendorDirectFulfillmentShippingV20211228 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/VendorDirectFulfillmentShippingV20211228
mv output/VendorDirectFulfillmentShippingV20211228/lib src/Clients/VendorDirectFulfillmentShippingV20211228
```

#### Vendor Direct Fulfillment Transactions API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/VendorDirectFulfillmentTransactionsV1
openapi-generator-cli generate -i models/vendorDirectFulfillmentTransactionsV1.json -g php -o output/VendorDirectFulfillmentTransactionsV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/VendorDirectFulfillmentTransactionsV1
mv output/VendorDirectFulfillmentTransactionsV1/lib src/Clients/VendorDirectFulfillmentTransactionsV1
```

#### Vendor Direct Fulfillment Transactions API v2021-12-28

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/VendorDirectFulfillmentTransactionsV20211228
openapi-generator-cli generate -i models/vendorDirectFulfillmentTransactions_2021-12-28.json -g php -o output/VendorDirectFulfillmentTransactionsV20211228 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/VendorDirectFulfillmentTransactionsV20211228
mv output/VendorDirectFulfillmentTransactionsV20211228/lib src/Clients/VendorDirectFulfillmentTransactionsV20211228
```

#### Vendor Retail Procurement Invoices API v1

_(Not included; latest JSON schema incompatible with this version of OpenAPI Generator CLI)_

#### Vendor Retail Procurement Orders API v1

_(Not included; latest JSON schema incompatible with this version of OpenAPI Generator CLI)_

#### Vendor Retail Procurement Shipments API v1

_(Not included; latest JSON schema incompatible with this version of OpenAPI Generator CLI)_

#### Vendor Retail Procurement Transaction Status API v1

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/VendorTransactionStatusV1
openapi-generator-cli generate -i models/vendorTransactionStatusV1.json -g php -o output/VendorTransactionStatusV1 --additional-properties=invokerPackage="Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1" --additional-properties=variableNamingConvention=camelCase
rm -rf src/Clients/VendorTransactionStatusV1
mv output/VendorTransactionStatusV1/lib src/Clients/VendorTransactionStatusV1
```
