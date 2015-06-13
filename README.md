# Domain Kata

Kata for domain models

[![Total Downloads](https://poser.pugx.org/phpmentors/domain-kata/downloads.png)](https://packagist.org/packages/phpmentors/domain-kata)
[![Latest Stable Version](https://poser.pugx.org/phpmentors/domain-kata/v/stable.png)](https://packagist.org/packages/phpmentors/domain-kata)
[![Latest Unstable Version](https://poser.pugx.org/phpmentors/domain-kata/v/unstable.png)](https://packagist.org/packages/phpmentors/domain-kata)

`Domain Kata` provides [Kata](http://en.wikipedia.org/wiki/Kata) for domain models that focuses on practice of model-based development such as [domain-driven design](http://en.wikipedia.org/wiki/Domain-driven_design), multi-paradigm design and [generative programming](http://en.wikipedia.org/wiki/Automatic_programming#Generative_programming), etc. in your project. By using `Domain Kata` in your project, it makes easy to identify models in the project, so it allows you to design any package structure (stop using the `Model` package in your libraries!). And `Domain Kata` will be a base for a domain-oriented framework which takes advantage of type constraints.

## Features

`Domain Kata` does not provide any concrete classes, but provides a framework (or a model, or an abstraction) as an implementation of a meta-modeling domain for model-based development in the PHP world. Some types of `Domain Kata` come from domain-driven design, and some are otherwise such as `UsecaseInterface`, `InOutInterface`. The following class diagram describes what the framework is:

<a href="https://github.com/phpmentors-jp/domain-kata/wiki/images/class-diagram-14.png" target="_blank"><img src="https://github.com/phpmentors-jp/domain-kata/wiki/images/class-diagram-14-700.png" alt="Domain Kata class diagram"></a>

## Installation

`Domain Kata` can be installed using [Composer](http://getcomposer.org/).

Add the dependency to `phpmentors/domain-kata` into your `composer.json` file as the following:

```
composer require phpmentors/domain-kata "1.4.*"
```

## Support

If you find a bug or have a question, or want to request a feature, create an issue or pull request for it on [Issues](https://github.com/phpmentors-jp/domain-kata/issues).

## Copyright

Copyright (c) 2014-2015 KUBO Atsuhiro, 2014-2015 GOTO Hidenori, All rights reserved.

## License

[The BSD 2-Clause License](http://opensource.org/licenses/BSD-2-Clause)
