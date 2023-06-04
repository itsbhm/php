### 4. Arrays

In PHP, an array is a data structure that allows you to store multiple values in a single variable. It is a way to group related data together. Here's an example of how to create and use arrays in PHP:

> Ref: index.php

In PHP, there are several types of arrays you can work with. Here are the main types of arrays:

## 1. Indexed Arrays:
- Indexed arrays are the most basic type of arrays.
- They use numeric indices to access elements.
- Indices start from 0 and increment by 1 for each subsequent element.
- Example: $fruits = array("apple", "banana", "orange");

## 2. Associative Arrays:
- Associative arrays use key-value pairs to store elements.
- Each element is associated with a specific key instead of numeric indices.
- Keys can be strings or numbers.
- Example: $person = array("name" => "John", "age" => 25, "country" => "USA");

## 3. Multidimensional Arrays:
- Multidimensional arrays are arrays within arrays, forming a nested structure.
- They allow you to create arrays of arrays, or arrays of associative arrays, and so on.
- Useful for representing complex data structures like matrices, tables, or hierarchical data.

## 4. Dynamic Arrays (Lists):
- Dynamic arrays, often referred to as lists, can grow or shrink in size dynamically.
- They automatically resize themselves as elements are added or removed.
- In PHP, dynamic arrays are implemented using the array() function or the square bracket syntax.
- Example: $list = array(1, 2, 3);