#Drupal 8 Wrapper for Symfony var-dumper
###Example
```php
<?php
$node = Node::load(1);

#Print $node dump to screen 
dm($node);

#Print $node dump to system watchdog
wdm($node);

``` 
dm($object) and wdm($object)
### Install

Add to repositories in composer.json:

```json
{
    "type": "git",
    "url": "https://github.com/alangasar/dm.git"
}
```
After 
```
composer require alangasar/dm
```

