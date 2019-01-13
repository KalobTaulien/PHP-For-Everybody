.PHONY: build

SHELL := /bin/bash
CONTAINERNAME_BACKEND=learn_php
IMAGENAME_BACKEND=learn_php_image

######################
#
# To setup:
#   make up
#
######################

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: ## Build the Docker image
	docker build -t $(IMAGENAME_BACKEND) ./build/backend

up: build ## Bring the backend Docker container up
	docker-compose up -d backend || echo 'Already up!'

down: ## Stop the backend Docker container
	docker-compose stop backend

enter: ## Enter the running backend Docker container
	docker exec -it $(CONTAINERNAME_BACKEND) /bin/bash

clean: ## Stop and remove all Docker containers
	docker-compose down
