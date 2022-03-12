DOCKER=docker-compose -f ./docker/docker-compose.yml
PHP=php81-cli

coverage:
	$(DOCKER) run --rm $(PHP) php -dxdebug.mode=coverage ./vendor/bin/phpunit --coverage-text

fix:
	$(DOCKER) run --rm $(PHP) ./vendor/bin/php-cs-fixer fix

install:
	$(DOCKER) build
	$(DOCKER) run --rm $(PHP) composer install

mutation:
	$(DOCKER) run --rm $(PHP) ./vendor/bin/infection --min-msi=80

phpstan:
	$(DOCKER) run --rm $(PHP) ./vendor/bin/phpstan analyse

psalm:
	$(DOCKER) run --rm $(PHP) ./vendor/bin/psalm --show-info=true

standards:
	$(DOCKER) run --rm $(PHP) ./vendor/bin/php-cs-fixer fix --dry-run -v

test: standards phpstan psalm coverage

unit:
	$(DOCKER) run --rm $(PHP) ./vendor/bin/phpunit
