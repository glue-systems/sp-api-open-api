# sp-api-open-api

This package consists of a set of OpenAPI-generated PHP clients for making calls to Amazon Selling Partner API (SP-API).

For more information, please visit [https://sellercentral.amazon.com/gp/mws/contactus.html](https://sellercentral.amazon.com/gp/mws/contactus.html).


## Requirements

PHP 7.2 and later.


## Authorization

This package does not handle authorization. Link coming soon for a recommended package that handles LWA authentication with SP-API.


## SP-API Clients

The code for each SP-API PHP client is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project and organized into namespaces by the developers of Glue Systems, LLC.

### Listings Items API

The ListingsItems API client was generated via the following script using the OpenAPI CLI Java tool, the version of which is `5.2.0-SNAPSHOT`.

```BASH
openapi-generator-cli generate -i path/to/listingsItems_2020-09-01.json -g php -o path/to/output --additional-properties=invokerPackage="Glue\SPAPI\OpenAPI\ListingsItems"
```

In the generated output, the contents of the `lib` folder were then transferred into this repository's [src/ListingsItems](src/ListingsItems) directory.
