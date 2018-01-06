url-string-extractor
====================
Extract the string from an url source code matching your query.

## Installation

```text
composer require cmaxhm/url-string-extractor
```

## Usage

This works delimiting the string that you want to extract from an URL source code. Usefull when there is another coincidence of your search before the string you want to extract.

```php
use Cmaxhm\UrlStringExtractor\UrlStringExtractor;

echo UrlStringExtractor::getString($url, $startReference, $endReference);
```

## Example

Let say we have the following source code from a website:

```html
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Website title</title>
    </head>
    <body>
      The website content
    </body>
</html>
```

And we want to extract `X-UA` from the meta tag, then we just use the references that delimit that string as follows:

```php
use Cmaxhm\UrlStringExtractor\UrlStringExtractor;

echo UrlStringExtractor::getString('http://exampledomain.com/', '-equiv="', '-C'); // X-UA
```