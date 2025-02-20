In PHP, a common yet subtle error arises when dealing with string comparisons involving loosely typed variables.  Consider this scenario:

```php
$value = "1";

if ($value == true) {
  echo "Value is true";
}
```

PHP's loose comparison (==) will evaluate to true because it does type juggling and converts the string "1" to the integer 1, which is then considered boolean true. This behavior is unexpected by many developers who expect strict comparison.