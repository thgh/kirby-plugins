# Kirby sitemap.xml Plugin

This plugin generates ```sitemap.xml```. It's possible to exclude pages from the sitemap and to assign which pages should have the highest priority.

## Installation

Copy ```sitemap.php``` to ```/site/plugins/```.

## Usage

Visit the sitemap at this url: http://example.com/sitemap.xml.
There is no actual file generated.

### config.php

```php
<?php
// These are the defaults:
c::set('sitemap.exclude', array('error'));
c::set('sitemap.important', array('contact'));
```

The plugin expects an array of [**page UID**](http://getkirby.com/docs/cheatsheet/page/uid)s.

## Author

Thomas Ghysels <info@thomasg.be>
