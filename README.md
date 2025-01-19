# PHP Recursive Function Depth Issue

This repository demonstrates a common error in PHP: exceeding the maximum recursion depth when using recursive functions with deeply nested data structures.  The `bug.php` file contains a function that processes data recursively.  With sufficiently deep nesting, this function will cause a fatal error.

The solution, `bugSolution.php`, illustrates a way to handle this by using an iterative approach, avoiding potential stack overflow issues.
