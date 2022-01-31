# JWT-Token-Generator

#Projet Running Step
composer install
copy .env.example .env

#JWT Secret Generate
PHP generate_key.php

#JWT Token Generate
PHP generate_jwt.php

#JWT Token Verify
php validate_jwt.php eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxLCJyb2xlIjoiYWRtaW4iLCJleHAiOjE1OTM4MjgyMjJ9.XDGnRBphMkjjAEjw0fF7_w2oRODEI3rUhzwd2GqmE7I

#Reference
https://developer.okta.com/blog/2019/02/04/create-and-verify-jwts-in-php
