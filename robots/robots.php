<?php

kirby()->routes(array(
	array(
		'pattern' => 'robots.txt',
		'action'	=> function() {
			return new Response('User-agent: *
Disallow: /content/*.txt$
Disallow: /kirby/
Disallow: /site/
Disallow: /panel/
Disallow: /*.md$

Sitemap: ' . u('sitemap.xml'), 'txt');
		}
	)
));
