# Computer Maintenance Management System 

This Computer Maintenance Management System project is the project that we've been worked on our internship period at SMU Healthcare. This web can be used by the company to tidy up the maintanance system. 


## Getting Started

You must register yourself to use this app. There are several roles on this app : Admin, Engineer, ...... . Each of these roles comes up with different permissions. For example, Admin can control everything on the app. Meanwhile, the Engineer can only make work orders.

## Configuration
### Prerequisites

- [Laravel 5.6 +](https://laravel.com/docs/5.6/installation)
- [PHP 7.2 +](http://php.net/manual/en/install.php)
- [mysql server 5.7 +](http://php.net/manual/en/install.php)

### Package

- [Entrust Package](https://github.com/Zizaco/entrust)
- [Forms & HTML Package](https://laravelcollective.com/docs/5.2/html) 


### Installing

- Clone everything from the github
- Run __Composer update__ on your cloned folder
- Run __php artisan vendor:publish__ on your cloned folder
- Create new file with __.env__ extension
- Copy and paste everything from __.env.example__ file
- Open the __.env__ file, edit __DB_DATABASE__ to give the schema's name of your database and also edit your __DB_USERNAME__ and __DB_PASSWORD__
- Run __php artisan migrate__ on your clone folder to create table on your DB
- Generate __APP-KEY__ by typing __php artisan key:generate__ on terminal 


### DB

- This app using mysql as default database
- If you use mysql, you can edit the default scheme, tables, and other things with DB GUI (MySQL Workbench)
- NOTE : If you install the newest version of MySQL server (V. , you will get some errors


### Running the tests

- You can use Laravel Inbuilt-Server or XAMPP
    - For Inbuilt-Server just type __php serve artisan__ on your terminal. The app will be ran on __localhost:8000/__
    - If you use XAMPP make sure it supports PHP 7.1 +


## Deployment

This system will be deployed soon


## Built With

* [Laravel](https://laravel.com/docs/5.6)
* [Bootstrap](https://getbootstrap.com/)


## Contributing

This project has specific requirements. But if you feel you can contribute, dont hesitate to contact us! 


## Authors

*  [Abdullah Faqih](https://github.com/abdulfaqihalm) - *Initial work* 
*  [Farhad Zamani](https://github.com/farzamani) - *Initial work*

See also the list of [contributors](https://github.com/abdulfaqihalm/cmms/contributors) who participated in this project.


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

