# docker-lamp

Docker example with Apache, MySql 8.0, PhpMyAdmin and Php

- You can use MariaDB 10.1 if you checkout to the tag `mariadb-10.1` - contribution made by [luca-vercelli](https://github.com/luca-vercelli)
- You can use MySql 5.7 if you checkout to the tag `mysql5.7`

I use docker-compose as an orchestrator. To run these containers:

**Run these command in terminals**
- First go to `dump_file` folder of `Final.zip` after extracting in terminal then run 
```
# sudo docker-compose up -d
```

Run mysql client:

# `sudo docker-compose exec db mysql -u root -p` 
-password : `test`


- **To run our portal please follow below instruction**

- Open web browser
- Type the following link ["http://localhost:8001"] (http://localhost:8001)

**Importing Sql dump file**
- U need to import our `myDb.sql` file located in `dump` folder of `dock_lamp` folder in `myDb` database of `user` user whose password is`test`
- This acn be done  by opening [http://localhost:8000](http://localhost:8000) and using `user` and `test` as login crediential for phpmyadmin
then have to click on `myDb` database then clicking on `import` button and upload `myDb.sql` file located in `dump` folder of `dock_lamp` folder.

- **This our login page to login use given credientials**

for user

1. Email id : `shrish@gmail.com`
2. Password : `shrish`


For admin

1. Email id : `sachin@gmail.com`
2. Password : `sachin`

- Or register yourself by clicking on signup button from home page


and other features you can find in the IITP-CCIP-Description.pdf
