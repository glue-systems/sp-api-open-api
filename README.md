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
openapi-generator-cli generate -i models/[OPENAPI_SCHEMA_NAME.json] -g php -o output/[DOMAIN_SUB_NAMESPACE] --additional-properties=invokerPackage="Glue\SPAPI\OpenAPI\Clients\[DOMAIN_SUB_NAMESPACE]"
```

5. Delete the source-controlled version of the API client that is to be replaced by the new output -- if it exists, it will be at `src/Clients/[DOMAIN_SUB_NAMESPACE]`.
6. Replace the deleted API client with the newly-generated code in `output/[DOMAIN_SUB_NAMESPACE]/lib`.
7. Check the git diff carefully. Create a new git release according to the nature of the changes (bug fixes, new features, breaking changes). Document any significant changes so that subscribers to this repository can upgrade their downstream code accordingly.

Note that following the steps above will have the same end result whether you are adding a new SP-API client or modifying an existing one.

### Example Bash Scripts

Example Bash scripts are provided below for each of the included SP-API domains. These are for reference only, as they may vary depending on your environment.

#### Listings Items API v2020-09-01

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/ListingsItemsV20200901
openapi-generator-cli generate -i models/listingsItems_2020-09-01.json -g php -o output/ListingsItemsV20200901 --additional-properties=invokerPackage="Glue\SPAPI\OpenAPI\Clients\ListingsItemsV20200901"
rm -rf src/Clients/ListingsItemsV20200901
mv output/ListingsItemsV20200901/lib src/Clients/ListingsItemsV20200901
```

#### Supply Sources API v2020-07-01

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/SupplySourcesV20200701
openapi-generator-cli generate -i models/supplySources_2020-07-01.json -g php -o output/SupplySourcesV20200701 --additional-properties=invokerPackage="Glue\SPAPI\OpenAPI\Clients\SupplySourcesV20200701"
rm -rf src/Clients/SupplySourcesV20200701
mv output/SupplySourcesV20200701/lib src/Clients/SupplySourcesV20200701
```

#### Definitions Product Types API v2020-09-01

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/DefinitionsProductTypesV20200901
openapi-generator-cli generate -i models/definitionsProductTypes_2020-09-01.json -g php -o output/DefinitionsProductTypesV20200901 --additional-properties=invokerPackage="Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypesV20200901"
rm -rf src/Clients/DefinitionsProductTypesV20200901
mv output/DefinitionsProductTypesV20200901/lib src/Clients/DefinitionsProductTypesV20200901
```

#### Orders API v0

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/OrdersV0
openapi-generator-cli generate -i models/ordersV0.json -g php -o output/OrdersV0 --additional-properties=invokerPackage="Glue\SPAPI\OpenAPI\Clients\OrdersV0"
rm -rf src/Clients/OrdersV0
mv output/OrdersV0/lib src/Clients/OrdersV0
```

#### Feeds API v2020-09-04

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/FeedsV20200904
openapi-generator-cli generate -i models/feeds_2020-09-04.json -g php -o output/FeedsV20200904 --additional-properties=invokerPackage="Glue\SPAPI\OpenAPI\Clients\FeedsV20200904"
rm -rf src/Clients/FeedsV20200904
mv output/FeedsV20200904/lib src/Clients/FeedsV20200904
```

#### Feeds API v2021-06-30

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/FeedsV20210630
openapi-generator-cli generate -i models/feeds_2021-06-30.json -g php -o output/FeedsV20210630 --additional-properties=invokerPackage="Glue\SPAPI\OpenAPI\Clients\FeedsV20210630"
rm -rf src/Clients/FeedsV20210630
mv output/FeedsV20210630/lib src/Clients/FeedsV20210630
```

#### Reports API v2020-09-04

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/ReportsV20200904
openapi-generator-cli generate -i models/reports_2020-09-04.json -g php -o output/ReportsV20200904 --additional-properties=invokerPackage="Glue\SPAPI\OpenAPI\Clients\ReportsV20200904"
rm -rf src/Clients/ReportsV20200904
mv output/ReportsV20200904/lib src/Clients/ReportsV20200904
```

#### Reports API v2021-06-30

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/ReportsV20210630
openapi-generator-cli generate -i models/reports_2021-06-30.json -g php -o output/ReportsV20210630 --additional-properties=invokerPackage="Glue\SPAPI\OpenAPI\Clients\ReportsV20210630"
rm -rf src/Clients/ReportsV20210630
mv output/ReportsV20210630/lib src/Clients/ReportsV20210630
```

#### Tokens API v2021-03-01

```BASH
cd path/to/your/sp-api-open-api
rm -rf output/TokensV20210301
openapi-generator-cli generate -i models/tokens_2021-03-01.json -g php -o output/TokensV20210301 --additional-properties=invokerPackage="Glue\SPAPI\OpenAPI\Clients\TokensV20210301"
rm -rf src/Clients/TokensV20210301
mv output/TokensV20210301/lib src/Clients/TokensV20210301
```
