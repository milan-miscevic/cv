DOCKER=docker-compose -f ./docker/docker-compose.yml
PHP=php81-cli

cli:
	$(DOCKER) run $(PHP) bash

fix:
	$(DOCKER) run --rm $(PHP) ./vendor/bin/php-cs-fixer fix

generate:
	$(DOCKER) run --rm $(PHP) php ./bin/generate.php

install:
	$(DOCKER) build
	$(DOCKER) run --rm $(PHP) composer install

phpstan:
	$(DOCKER) run --rm $(PHP) ./vendor/bin/phpstan analyse

standards:
	$(DOCKER) run --rm $(PHP) ./vendor/bin/php-cs-fixer fix --dry-run -v

test: standards phpstan
