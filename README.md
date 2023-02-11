# SSL Verifier Class
A PHP class to determine if a URL uses SSL

## Requirements
- PHP 8.2 or later
- cURL library

## Usage

```php
$verifier = new SSLVerifier("https://www.google.com");
if ($verifier->isUsingSSL()) {
    echo "The site is using SSL.";
} else {
    echo "The site is not using SSL.";
}
```

## Authors

Ramazan Çetinkaya

- [github/ramazancetinkaya](https://github.com/ramazancetinkaya)

## License

Copyright © 2023, [Ramazan Çetinkaya](https://github.com/ramazancetinkaya).
