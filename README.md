# persistence-bundle

This is the repo for the article at  https://medium.com/@fico7489/symfony-functional-tests-for-standalone-bundles-9666045a2309

# Symfony - Functional Tests for Standalone Bundles

```bash
git clone tacman/persistence-bundle
composer update
composer phpunit
composer phpstan
```

The github actions run phpunit and phpstan, but ensure that the bundle with install on php 8.3 and Symfony 7.1.  Both are expected to be updated to new versions later this month, CI will reflect that when it happens.


Tested with PHP 8.3.3
