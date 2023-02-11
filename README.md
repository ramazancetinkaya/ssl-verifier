# SSL Verifier
This PHP class allows you to check whether a given URL is using SSL or not through cURL, ensuring that the code is both detailed and compliant with coding standards.

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

## Contributing
Feel free to fork the repository and submit pull requests with any improvements or bugfixes.

## Authors

Ramazan Çetinkaya

- [github/ramazancetinkaya](https://github.com/ramazancetinkaya)

## License

Copyright © 2023, [Ramazan Çetinkaya](https://github.com/ramazancetinkaya).
