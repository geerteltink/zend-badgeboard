# zend-badgeboard

Create a badge status board for all repositories for a specific user.

During the build process the GitHub api is used to fetch all repositores for a 
specific user. Which is than processed and and used to generate templates.

## Build

Install composer and build the source files.

    $ composer install
    $ php build.php
  
Open dist/iundex.html in your favorite browser.
