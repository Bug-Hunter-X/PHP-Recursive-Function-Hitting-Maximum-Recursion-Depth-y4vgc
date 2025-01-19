```php
function processDataIterative(array $data): array {
  $stack = [$data];
  while ($stack) {
    $current = array_pop($stack);
    foreach ($current as $key => $value) {
      if (is_array($value)) {
        $stack[] = $value;
      }
      // ... process $value here ...
    }
  }
  return $data; // Return the processed data
}

$myData = [1, 2, [3, 4, [5, 6]]];
$processedData = processDataIterative($myData);
print_r($processedData);
```