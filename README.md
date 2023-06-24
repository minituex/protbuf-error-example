# Example project for demonstrating an error in the protobuf PHP extension

[The Issue this is for.](https://github.com/protocolbuffers/protobuf/issues/13116)

## Steps to recreate

1. I added the generated php classes, created from the proto file. However, I also included the `build.sh` script with which I created them. Make sure to adjust the folder paths to your local installation!
2. Run `composer install` in the root folder to get all packages needed.


Now to the error:

1. First with the protobuf extension not enabled (for php cli!): run `php src/test.php`. You should get the following output: 

```
start test
Response created - iterating over it now
1
my response
2
my next response
3
my last response
Success!
```

2. Now enable the protobuf extension (add `extension=protobuf.so` to your php cli php.ini). Run `php src/test.php` again. Now you should see the following:
```
start test
Response created - iterating over it now
php: /tmp/pear/temp/protobuf/php-upb.c:2798: upb_strtable_iter_value: Assertion `!upb_strtable_done(i)' failed.
Aborted
```

I hope this helps :)