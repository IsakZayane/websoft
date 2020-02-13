Node.js and MySQL
=======================

Example code showing how you can connect from Node.js to MySQL using the two libraries mysql and promise-mysql.

The example comes from the (swedish) article "[MySQL och Node.js (v2)](https://dbwebb.se/kunskap/mysql-och-nodejs-v2)" and below is a quick walkthrough on the example.



Setup database
-----------------------

You have MySQL/MariaDB installed and you have created a database.

Create the table `larare` and fill it with content like this.

```
mysql my_database < sql/ddl.sql
```



Install packages
-----------------------

We will use the following two packages to connect to MySQL/MariaDB from Node.js.

* [mysql](https://www.npmjs.com/package/mysql)
* [promise-mysql](https://www.npmjs.com/package/promise-mysql)

Install them.

```
npm install mysql promise-mysql
```

Review the module documentation through the links above.



First try
-----------------------

Run the script `connect.js` to connect to the database and perform a `SELECT`, without using the table.

```
node connect
```



Create a config file
-----------------------

Put all configuration details into `config.js` and require it in the restructured main program `connect_config.js`. Execute it to see that it works.

```
node connect_config
```



SELECT from table
-----------------------

teachers.js
teachers_func.js



Search from table
-----------------------

search_al.js
search_await.js
search.js



Update table
-----------------------

update.js
