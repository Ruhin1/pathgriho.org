# Organization website
### Made By [***Tonmoy Islam***](https://github.com/Ruhin1)
This is a Organization website Project Made with Laravel, tailwind css, Bootstrap, JQuery, DataTables,image intervention, Facebook api, google api.
I put it up just to show off my skills, but if you're here it means I may have posted it somewhere online and you're here to steal it or look at it as a reference, but that's okay.
> it looks decent enough and functionalities are also working... (obviously there will be some bugs)

## What can you do in this website
- Admin can handle full website content dynamically like wordpress system, and Site settings
- User can surf properties, handle their profile, Change Password & Save and  properties if logged in



## Dependencies
- [Composer v2.2.3^](https://getcomposer.org/download/)
- [Laravel v8.1.1x](https://laravel.com/docs/8.x)
- [Tailwindcss v3.4.1](https://tailwindcss.com/docs/installation)
- [Bootstap v5.1.3](https://getbootstrap.com/docs/5.1/getting-started/introduction/)
- [Bootstrap v5.1 Examples](https://getbootstrap.com/docs/5.1/examples/) (Used Some of these as boiler plate)
- [Font Awesome](https://fontawesome.com/docs/web/setup/get-started)
- [JQuery v3.6.0](https://releases.jquery.com/)
- [DataTables v1.11.4](https://datatables.net/manual/) with [DataTables v1.11.4 Bootstap 5](https://datatables.net/examples/styling/bootstrap5.html)
- [Carousal](https://fancyapps.com/docs/ui/carousel)
- [CKEditor v4](https://ckeditor.com/docs/ckeditor4/latest/guide/index.html)
- And Familiarity with Laravel, Can't remember anything else...

## What needs to be installed...
- [Composer v2.2.3^](https://getcomposer.org/download/)
- [Git](https://git-scm.com/downloads)
- [Laravel v8.x](https://laravel.com/docs/8.x#the-laravel-installer)
- [Wamp](https://www.wampserver.com/en/) (I used Wamp you can use Similar ones)
- Can't remember anything else...

## Steps to Install
### Clone The GitHub Repo first
1. Open Cmd in folder you want to install project in...
2. Type below Command and hit enter...
```bash
git clone https://github.com/Ruhin1/pathgriho.org.git
```
4. Then cd into folder using below Command
```bash
cd pathgriho.org
```
> Note from here On, You can also use Terminal from VS Code or Your IDE...

### Install All Composer Dependencies
1. Use below command to install all dependencies then wait till all process is complete...
```bash
composer install
```

### Create a .env file
1. Duplicate *.env.example* as *.env* file
2. Fill information of your DB **username** and **password** & other info if needed...

### Create DataBase
1. Create DataBase by PhpMyadmin (provided by [Wamp](https://www.wampserver.com/en/)) or Any Other DB you use...
> Note DataBase name should be same as typed in *.env* file
### DataBase Structure
> I recommend to import DB structure Using `php artisan` method but you can use *.sql* file to import if you want.
1. Use below Command and wait till all migrations complete...
```bash
php artisan migrate
```
2. Use below Command to Link Storage to Public folder
```bash
php artisan storage:link
```

### Serve Project
1. Use below Command ( [Wamp](https://www.wampserver.com/en/)/Other Should be Runnig ) to run project...
```bash
php artisan serve
```
> if some *key* related error appears then use command `php artisan key:generate` to generate AppKey.

## Update Admin
Go to the Link that `php artisan serve` command gives you and Hopefully it should be working, I hope you are capable of any troubleshooting if any error occurs.

Admin site: `your_site_link/admin/`

- Admin username
```bash
admin
```
- Admin Password
```bash
12345678
```
Update CMS and Site Settings inside Admin Panel (/admin/dashboard) Once (empty or filled doesn't matter), and then goto frontend
> when project loads for first time db won't have values of CMS and Site setting, by updating those fields will be created, so frontend wouldn't show errors after that...

I am writing this documentaion while this project is still in making, because I was bored...

I will add more soon, If my mind says, lol...

If You are still reading, then Thanks and Welcome...

Hope My project helps you any ways...

Have a nice day
