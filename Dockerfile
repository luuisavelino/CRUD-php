FROM mysql

ENV MYSQL_DATABASE crud

COPY ./database/dump.sql /docker-entrypoint-initdb.d/
