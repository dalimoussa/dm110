#!/bin/bash
FUEL_ENV=production
export FUEL_ENV

cd ./public_html/estimate/lib/
/usr/local/bin/php-cli oil refine session:create
/usr/local/bin/php-cli oil refine migrate
