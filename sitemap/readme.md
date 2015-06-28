# Kirby sitemap.xml Plugin

This plugin generates ```sitemap.xml```. It's possible to exclude pages from the sitemap and to assign which pages should have the highest priority.

## Installation

Copy ```sitemap.php``` to ```/site/plugins/```.

## Usage

Nothing required.

### config.php

```php
<?php
// These are the defaults:
c::set('sitemap.exclude', array('error'));
c::set('sitemap.important', array('contact'));
```

## Author

Thomas Ghysels <info@thomasg.be>
