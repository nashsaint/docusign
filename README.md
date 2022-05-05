# Laravel 9 Docusign
A Laravel 9 wrapper for the [Docusign Rest Client](https://github.com/docusign/docusign-esign-php-client)

### Install Through Composer

```
composer require nashsaint/docusign
```

## Usage
For usage see the [Docusign Rest Client](https://github.com/docusign/docusign-esign-php-client)

### Using the Facade
You can create a new instance of the DocuSign Client with:

```php
$client = DocuSign::create();
```

Access DocuSign Models:

```php
$signer = DocuSign::signer([
    'name'  => 'John Doe',
    'email' => 'johndoe@example.com'
]);
```

Access DocuSign Api endpoints using `get()`;

```php
DocuSign::get('folders')->callList();
```
OR

### Using the `LaravelDocusign\Client` class
You can create a new instance of the DocuSign Client with:
```php
$client = new LaravelDocusign\Client;
```
