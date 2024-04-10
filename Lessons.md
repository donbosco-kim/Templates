# Lessons  

## VSCODE Keyboard shortcuts

- Ctrl T define what things you are looking for
- Ctrl G define lines (e.g. go to line 20)
- Ctrl P search files and go
- Ctrl to jump across after highlighting
- Ctrl F and type what you need to search and Alt enter to find the value

## LSP: Language Server Protocol (look at it later)

## Git Lesson

This is for specifying the person making a commit

```shell
git config user.name "Donbosco Kim"
git config user.email "bosco.kim@como.gov"
git config user.name "Donbosco Kim"
git config user.email "leonbosco2@gmail.com"
```

### Merging & Resolving

- Accept Current and Accept Incoming (look to solve the conflict)
- Complete Merge if no conflict

## Look Up

- Pandocs
- TSV (tap seperated value)

## Accessibility

- use for, name, and id attributes
- study WCAG and NVDA screen reader

## Data Validation
### Front-end validation
- max/min-length -> use title 
- pattern
- type (text, tel, email, date, number etc...)
  
### Back-end once post request happen(click form submit)
- Sanitize inputs
- Validate Inputs
- Update the database
  
## Database Lesson:
### Get the total count 
```sql
SELECT COUNT(*) FROM "Table"
```
### Schema Usage
- Database, schema and table are used together for specification

### When to Create Views
- Do not make changes to the view
  
### SQL Algebraic Expression
- Join (symbol)
- Where (symbol)

### SQL Numeric data types
- decimal(precision, scale):
  Example decimal(3,2) the value can have 3 digits overall and 2 digits after the decimal point

## Data Validation
### Layers of validation:
- Client-side validation for user experience (required attributes?)
- Server-side validation for security

### Form Validation
- use required attributes
- check for empty (blank) values 
- check for length of data
- check for format of the data (email, dates)

Process of validation:
Is the name empty?
is the name contain only letters and whitespace? (what happen if the start of the name and end of the name have empty whitespace? how to make sure the whitespace is only allowed 
in between the first name, middle (if any) and last name)
Is the name valid?
If all yes then accept it
else throw error message


### Front end validation
- regex pattern doesnt always have to start with forward slashes
- need required and/or the pattern (required can be removed on the browser)

### Triple equals vs Double
- triple equals check for types and what it equals to, double would just check whatever it is equal say a string

### Sessions
- every users have their own session.
- sometimes it is limited to authenticated people
- they almost always store a session id as a cookie that get presented to the server on every request

### Screen Reader
- look at html ignore css generally
- not clicking so js would not say or do anything
- sementic headings

https://penpot.app/
aria attributes(look into this)
