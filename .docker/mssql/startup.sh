#!/bin/bash
set -e

wait_time=90s
password="1Secure*Password1"

#wait for SQL Server to come up
echo importing data will start in $wait_time.. have some tea, and relax..
sleep $wait_time

echo running init.sql
/opt/mssql-tools/bin/sqlcmd -S 127.0.0.1 -U sa -P $password -i init.sql

exec "$@"
