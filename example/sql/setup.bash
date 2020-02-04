#!/usr/bin/env bash

host="-h127.0.0.1"
port="--port=13306"
password="-ppass"
user="-uuser"
database="websoft"

# (Re) Create the database from scratch
#mysql -uroot -p < create_user_mariadb.sql
mysql -uroot -p $port $host < create_user_mysql.sql
mysql $user $password $port $host < create_database.sql
mysql $user $password $port $host $database < ddl.sql
mysql $user $password $port $host $database < insert.sql
mysql $user $password $port $host $database --table < select.sql
