# SSLChecker
Here is an example PHP class that can check if a website is using SSL:

## You can use this class like this:

```php
$sslChecker = new SSLChecker();
$isUsingSsl = $sslChecker->checkSSL('https://example.com');
if ($isUsingSsl) {
    echo 'example.com is using SSL';
} else {
    echo 'example.com is not using SSL';
}
```
