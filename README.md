# Drupal 8 Wrapper for Symfony var-dumper

### Examples
```php
<?php
$node = Node::load(1);

#Print $node dump to screen 
dm($node);

#Print $node dump to system watchdog
wdm($node);

function wdm($object, $type = 'wdm'){
    \Drupal::logger($type)->notice('<pre><code>' . print_r($object, TRUE) . '</code></pre>' );
}

``` 

Or in twig file:
```twig
{{ dm(node) }}
```
### Install

```
composer require alangasar/dm
```

