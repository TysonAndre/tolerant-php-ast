#!/usr/bin/env bash
# This runs the tests that have been set up in GitHub Workflows so far

# -x Exit immediately if any command fails
# -e Echo all commands being executed.
set -xe
# The way token_get_all lexes content changes based on the short_open_tag ini setting
php -d short_open_tag=0 ./vendor/bin/phpunit --testsuite invariants
php -d short_open_tag=0 ./vendor/bin/phpunit --testsuite grammar
php -d short_open_tag=0 ./vendor/bin/phpunit --testsuite api
php -d short_open_tag=0 ./vendor/bin/phpunit --testsuite validation
