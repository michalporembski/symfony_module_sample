# Symfony Sample Module

This is example of symfony module, for easy copy and reusage

## Instalation:

Update composer.json with:

```
    "require": {
        "mporembski/symfony-sample-module": "dev-develop"
```

and:

```
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/michalporembski/symfony_module_sample.git"
        }
    ]
```

then run `composer update`

update bundles list by adding in `config/bundles.php`:

```
    MPorembski\SampleModule\SymfonySampleModuleBundle::class => ['all' => true],
```

update routing by adding in `config/routes.yaml`:

```
sample_bundle:
  resource: '@SymfonySampleModuleBundle/Resources/config/routing.yaml'
```

## Development

todo..

## 
