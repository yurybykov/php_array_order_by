# array_orderby

A PHP function to database-style order an array.
I am not author of original function, it was taken from http://php.net/manual/ru/function.array-multisort.php

## Install

Normal install via Composer.

## Usage

Throw any array or object with the coordinates of the field you want to sort by:

```php
$data[] = array('volume' => 67, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 1);
$data[] = array('volume' => 85, 'edition' => 6);
$data[] = array('volume' => 98, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 6);
$data[] = array('volume' => 67, 'edition' => 7);

// Pass the array, followed by the column names and sort flags
$sorted = array_orderby($data, 'volume', SORT_DESC, 'edition', SORT_ASC);
```
