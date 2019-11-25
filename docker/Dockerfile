ARG PHP_IMAGE
FROM ${PHP_IMAGE}

COPY . /project
COPY ./docker/entrypoint.php /usr/local/bin/entrypoint-gherkin-fixer.php

RUN rm -rf /project/docker

ENTRYPOINT ["/usr/local/bin/entrypoint-gherkin-fixer.php"]
