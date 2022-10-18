# elastic-php-se
Simple search engine using elasticsearch and php

## How to use this repo
1. Clone the repo
2. Run an elasticsearch instance, and get the credentials
3. Update the credentials in config.php
4. Copy the http_ca.crt from elasticsearch into this directory
5. Run a php docker instance with this directory mounted to /var/www/html
6. Start the built in web server inside php container
7. Run add.php to add new data into elastisearch
8. Run index.php to search for the added data
