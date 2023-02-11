# SSL Checker
Here is an example PHP class that can check if a website is using SSL:

## You can use this class like this:

```php
$verifier = new SSLVerifier("https://www.google.com");
if ($verifier->isUsingSSL()) {
    echo "The site is using SSL.";
} else {
    echo "The site is not using SSL.";
}
```

### Authors

**Ramazan Çetinkaya**

- [github/ramazancetinkaya](https://github.com/ramazancetinkaya)

### License

Copyright © 2023, [Ramazan Çetinkaya](https://github.com/ramazancetinkaya).
