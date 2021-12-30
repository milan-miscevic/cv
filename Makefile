CONFIG=./docker/docker-compose.yml
PHP=php81-cli

check: standards unit coverage phpstan psalm

composer-update:
	docker-compose -f $(CONFIG) run --rm $(PHP) composer update

coverage:
	docker-compose -f $(CONFIG) run --rm $(PHP) php -dxdebug.mode=coverage ./vendor/bin/phpunit --coverage-text

fix:
	docker-compose -f $(CONFIG) run --rm -e PHP_CS_FIXER_IGNORE_ENV=1 $(PHP) ./vendor/bin/php-cs-fixer fix

install:
	docker-compose -f $(CONFIG) build
	docker-compose -f $(CONFIG) run --rm $(PHP) composer install

phpstan:
	docker-compose -f $(CONFIG) run --rm $(PHP) ./vendor/bin/phpstan analyse

psalm:
	docker-compose -f $(CONFIG) run --rm $(PHP) ./vendor/bin/psalm --show-info=true

standards:
	docker-compose -f $(CONFIG) run --rm -e PHP_CS_FIXER_IGNORE_ENV=1 $(PHP) ./vendor/bin/php-cs-fixer fix --dry-run -v

unit:
	docker-compose -f $(CONFIG) run --rm $(PHP) ./vendor/bin/phpunit
