# PHP Loose Comparison Pitfall: String "1" == true

This repository demonstrates a common, yet easily overlooked, issue in PHP: the unexpected behavior of loose comparison (==) when dealing with strings and booleans.  The example shows how the string "1" is evaluated as true in a boolean context due to PHP's loose typing.

The `bug.php` file contains the problematic code, while `bugSolution.php` provides the solution using strict comparison.