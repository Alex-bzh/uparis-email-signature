# uparis-mail-signature

This small Web application makes it possible to customize your University of Paris email signature.

## How does it work?

Fill the form accordingly to your preferences. There are only two required fields:
- **Prénom:** is your given name;
- **Nom:** is your family name.

Then submit it by pressing the button named *Télécharger*: you will be asked to download an HTML file `signature.html`.

## How to set up your HTML signature?

The procedure depends on your email application. If you are using *Thunderbird*, then click on the name of the account you aim working with this signature and, between all the options, choose to see the parameters. One of these parameters allows you to select a file as your signature. Check this box and follow the instructions!

## How to run this application on local?

You need a Web server to launch the application. There are several ways to do so. On Linux and MacOS platforms, you can for example call `python` or `php` utilities:

```shell
$ python -m http.server 8080
```

```shell
$ php -S localhost:8080
```

Then, open your web browser and navigate to the URL `http://localhost:8080`.
