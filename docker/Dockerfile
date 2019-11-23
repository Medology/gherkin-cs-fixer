ARG PHP_IMAGE
FROM ${PHP_IMAGE}

COPY . /project
COPY ./docker/entrypoint.php.sh /usr/local/bin/entrypoint-gherkin-fixer.php.sh

RUN rm -rf /project/docker

ENTRYPOINT ["/usr/local/bin/entrypoint-gherkin-fixer.php.sh"]
