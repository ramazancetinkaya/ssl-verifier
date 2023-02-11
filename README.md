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

## Support
If you encounter any issues while using this class, or if you have any questions or feedback, please feel free to open an issue on the repository's issue tracker. I will do my best to assist you as soon as possible.

###

Note that while I am happy to help and provide support, I cannot guarantee immediate resolution of all issues. If you need more immediate support, you may want to consider reaching out to a professional services provider for assistance.

## Authors

Ramazan Çetinkaya

- [github/ramazancetinkaya](https://github.com/ramazancetinkaya)

## License

Copyright © 2023, [Ramazan Çetinkaya](https://github.com/ramazancetinkaya).
