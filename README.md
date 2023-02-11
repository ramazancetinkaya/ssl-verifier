# SSL Verifier
This PHP class allows you to check whether a given URL is using SSL or not through cURL, ensuring that the code is both detailed and compliant with coding standards.

## Requirements
- PHP 8.2 or later
- cURL library

## Installation
You can install this class using composer by running the following command:

- composer require your-vendor/ssl-verifier

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
If you would like to contribute to the development of this class, I would be more than happy to consider your contributions!

###

To contribute, simply fork the repository, make your changes, and submit a pull request back to the main repository. I will review your changes and, if they meet the project's standards and requirements, I will merge them into the main codebase.

###

Before submitting your changes, please make sure to test your code thoroughly and ensure that it is properly documented. Also, please make sure to follow the project's coding standards and conventions.

###

Thank you for your interest in contributing to this project!

## How to Contribute
Your contributions to this project are greatly appreciated! Whether you're reporting a bug, suggesting an enhancement, or contributing code, every contribution helps make this project better.

###

Here are some ways you can get involved:


###

1. **Report bugs or issues**: If you encounter any bugs or issues while using this class, please report them by opening an issue in the repository's issue tracker. Be sure to include a detailed description of the problem, and if possible, steps to reproduce the issue.

###

2. **Suggest enhancements**: If you have ideas for improvements or new features, please share them by opening an issue in the repository's issue tracker. Your suggestions and feedback are valuable and will help guide the development of this project.

###

3. **Contribute code**: If you would like to contribute code, **follow these steps**:

    - Fork the repository.
    - Clone the forked repository to your local machine.
    - Create a new branch to make your changes.
    - Make your changes.
    - Test your changes thoroughly.
    - Commit your changes and push them to your forked repository.
    - Submit a pull request back to the main repository.

## Support
If you encounter any issues while using this class, or if you have any questions or feedback, please feel free to open an issue on the repository's issue tracker. I will do my best to assist you as soon as possible.

###

Note that while I am happy to help and provide support, I cannot guarantee immediate resolution of all issues. If you need more immediate support, you may want to consider reaching out to a professional services provider for assistance.

## Authors

Ramazan Çetinkaya

- [github/ramazancetinkaya](https://github.com/ramazancetinkaya)

## License

Copyright © 2023, [Ramazan Çetinkaya](https://github.com/ramazancetinkaya).
