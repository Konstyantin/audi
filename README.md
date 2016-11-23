Audi Project Template
=====================

Audi Project Template is a skeleton Yii 2.

The template contains the basic features including admin login/logout, show list cars and get information about each,
company offer services, news line and data about the mains dealers.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      migration/          contains application migration
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.

INSTALLATION
------------

### Install via Composer
Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://localhost/basic/web/
~~~


### Install from an Archive File

You can then access the application through the following URL:

~~~
http://localhost/basic/web/
~~~

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=audi',
    'username' => 'root',
    'password' => '1',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.



TESTING
-------

Tests are located in `tests` directory. They are developed with [Codeception PHP Testing Framework](http://codeception.com/).
By default there are 1 test suites:

- `unit`

Tests can be executed by running

```
composer exec codecept run
``` 