# Regular Expression Practice
In Regular expression we write the pattern inside forward slashes.

## Username Pattern
```
'/^[a-zA-Z0-9]{6,12}$/'
```
In this username pattern, the caret symbol mean start of a string $ sign mean end of a string. [] means character sets, a-z (can use any lower case letter), A-z (can use any upper case letter), 0-9 (any digits 0-9) 6 min and 12 max lengths.

## Phone Number Pattern
```
'/^\d{3}-\d{3}-\d{4}$/'
```
In this pattern the d is digit, 3 inside curly brace is 3 max length seperated by hyphen and 4 max length at the end. 
