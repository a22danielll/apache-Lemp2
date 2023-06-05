#!/bin/bash
docker-compose exec db bash -c "/usr/bin/mysqldump -u presta -ppresta presta </db/backup.sql"