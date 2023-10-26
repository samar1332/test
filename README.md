# validation and sanitization parameters
## validation 
## Text 
- case sensitive 
- min / max length 
- special character , white spaces , tags 

## Int
- min / max length
- min / max value

## Float
- min / max length
- min / max value

## Email 
- check  for valid email 
- check email for specific org.
- not allow any email for specific org.

## Date
- date format
- valid date
- min / max date value

## File 
- allowed file type
- file size
- address field
- allowed mime type

## Address
- pin code
- address, city , state ,country

## Password
- min 1 special char 
- min 1 numeric
- min 1 small and capital letter
- min length / max length 
- relative numbers or text don't use

```php
if (!preg_match('/^(?=[a-z])(?=[A-Z])[a-zA-Z]{8,}$/', $password))
{
    //error
}
```
## Url
- https/ http 
- www 
- .com / .in .online

## Payment mode
- credit card / debit card / UPI  

# Sanitization

## Text
- allow tags
- remove tags
- remove special and magic char
```js
var map_special_char = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;',
        '/': '&#x2F;',
        '`': '&#x60;',
        '=': '&#x3D;'
      };
```

## Url
- url encoding
- 
