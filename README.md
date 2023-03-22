# Netherlands vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Netherlands vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/nl-vat-format-validator
```

## Usage example

Valid Netherlands vat number:

```php
$validator = new NLVatFormatValidator();
$validator->isValid('NL123456789B01');
$validator->isValid('NL123456789BO2');
$validator->isValid('123456789B01');
$validator->isValid('123456789BO2');
```

Returns:

```shell
true
true
true
true
```

Invalid Netherlands vat number:

```php
$validator = new NLVatFormatValidator();
$validator->isValid('NL12345678B01');
$validator->isValid('NL1234567890B01');
$validator->isValid('NL123456789B011');
$validator->isValid('NL123456789B011');
$validator->isValid('1234567890B01');
$validator->isValid('12345678B01');
$validator->isValid('NL1234567890BO2');
$validator->isValid('NL123456789BA2');
$validator->isValid('1234567890BO2');
$validator->isValid('');
```

```shell
false
false
false
false
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
