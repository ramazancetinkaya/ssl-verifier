# SSL Verifier
This PHP class allows you to check whether a given URL is using SSL or not through cURL, ensuring that the code is both detailed and compliant with coding standards.

## Requirements
- PHP 8.2 or later
- cURL library

## Installation
You can install this class using composer by running the following command:

```composer
composer require ramazancetinkaya/ssl-verifier
```

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
   
## Disclaimer

The software and its copyright are owned solely by the author. Any commercial use of the software requires the author's permission. The author and the copyright holders are not responsible for any errors or problems that may have been overlooked in contributions, reviews, or any other form of modification to the software.

The author and the copyright holders shall not be held responsible for any damages arising from the use of this software. The software is provided "as is", without warranty of any kind, express or implied.

In no event shall the author or the copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise, arising from, out of or in connection with the software or the use or other dealings in the software.

This project is intended for educational and informational purposes only, and should not be considered as professional advice or recommendations. The author encourages you to seek appropriate professional guidance before taking any action based on the information and contents provided in this project.

###

By using this software, you agree to the above terms and conditions. If you do not agree with these terms, you should not use this software.

## Support
If you encounter any issues while using this class, or if you have any questions or feedback, please feel free to open an issue on the repository's issue tracker. I will do my best to assist you as soon as possible.

###

Note that while I am happy to help and provide support, I cannot guarantee immediate resolution of all issues. If you need more immediate support, you may want to consider reaching out to a professional services provider for assistance.

## Authors

Ramazan Çetinkaya

- [github/ramazancetinkaya](https://github.com/ramazancetinkaya)

## Copyright and License

Copyright © 2023, [Ramazan Çetinkaya](https://github.com/ramazancetinkaya).
