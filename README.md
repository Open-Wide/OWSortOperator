OWSortOperator
=====================

This eZ Publish extension provide the PHP sort functionc as template operators.

Due to the PHP function using the input array as result, it cannot be used via PHPOperatorList.


PHP Classic Sort Functions
---------------------
You can use the PHP classic functions :
* sort : Sort an array and maintain index association
* rsort : Sort an array in reverse order and maintain index association
* asort : Sort an array and maintain index association
* arsort : Sort an array in reverse order and maintain index association
* ksort : Sort an array by key
* krsort : Sort an array by key in reverse order
* natsort : Sort an array using a "natural order" algorithm
* natsacesort : Sort an array using a case insensitive "natural order" algorithm


eZ Publish Specific Sort Function
---------------------
* ezsort : Sort an ezobject or eznode list by attribute value (ex: priority, can_read, is_hidden, class_identifier, etc.)
