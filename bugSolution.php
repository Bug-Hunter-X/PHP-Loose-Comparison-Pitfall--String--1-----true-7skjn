The solution is to always use strict comparison (===) to avoid type juggling:

```php
$value = "1";

if ($value === true) {
  echo "Value is strictly true"; // This will NOT execute
} else {
  echo "Value is not strictly true"; // This will execute
}

//To check if it is 1 then
if ($value === "1"){
  echo "Value is 1";
}
```

Strict comparison ensures that both the value and type are compared, preventing unexpected results.