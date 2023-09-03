#!/bin/bash

DB_USER='christsagalos'
DB_PASSWORD='U1LFugNcGhGRQLa'
DB_HOST='localhost'
DB_NAME='christsagalos'
BACKUP_DIR='~/Backups/'
TIMESTAMP=$(date +'%d/%m/%Y %H:%M:%S')

mkdir -p $BACKUP_DIR

BACKUP_FILE="$BACKUP_DIR/db_backup_$TIMESTAMP.sql"

mysqldump -u $DB_USER -p$DB_PASSWORD -h $DB_HOST $DB_NAME > $BACKUP_FILE

if [ $? -eq 0 ]; then
  echo "Database backup completed successfully. Backup file: $BACKUP_FILE"
else
  echo "Database backup failed."
fi
