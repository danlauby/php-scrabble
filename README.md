# _Scrabble_

#### A game that keeps score for individual letters.

#### By Dan Lauby

## Description

This program checks for matching letters and adds to players score accordingly.

## _Application Specifications_

| Behavior | Input | Output |
|----------|-------|--------|
|Compare A, E, I, O, U, L, N, R, S, T to user_array (score = 0)|user_array = H, E, A, D|result_array = E, A (add 1 to score for each matching letter)|
|Compare D, G to user_array (score = 0)|user_array = D, O, G|result_array = D, G (add 2 to score for each matching letter)|
|Compare B, C, M, P to user_array (score = 0)|user_array = B, U, M, P|result_array = B, M, P (add 3 to score for each matching letter)|
|Compare F, H, V, W, Y to user_array (score = 0)|user_array = V, I, E, W|result_array = V, W (add 4 to score for each matching letter)|
|Compare K to user_array (score = 0)|user_array = M, I, L, K|result_array = K (add 5 to score for each matching letter)|
|Compare J, X to user_array (score = 0)|user_array = J, I, N, X|result_array = J, X (add 8 to score for each matching letter)|
|Compare Q, Z to user_array (score = 0)|user_array = Q, U, I, Z|result_array = Q, Z (add 10 to score for each matching letter)|

## Setup/Installation Requirements

* Clone [php-scrabble](https://github.com/danlauby/php-scrabble) repository
* Download [Composer](https://getcomposer.org/)
* Run "composer install" in computer terminal
* Navigate into this project's "web" folder
* Run "php -S localhost:8000" in terminal to setup document root
* Open up web browser and navigate to the url "localhost:8000" to view functional program

## Known Bugs

None known.

## Support and contact details

Feel free to contact [Dan Lauby] (dmlauby@gmail.com) if any questions come up!

## Technologies Used

* PHP/Composer
* PHP/Silex
* PHPUnit for testing
* HTML/Twig
* CSS/Bootstrap

### License

Copyright (c) 2017 Dan Lauby
