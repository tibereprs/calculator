Calculator
========================

Calculator is an application created  to perform calculations

Requirements
------------
#### Docker ####

  * docker
  * docker-compose

### Other ###

  * PHP 7.2
  * Composer

Installation
------------

#### Docker ####

```bash
$ git clone https://github.com/tibereprs/calculator
$ cd calculator/
$ docker-compose up --build
$ docker run -it --rm -v "$PWD":/usr/src/myapp -w /usr/src/myapp prooph/composer:7.2 install
```

Other
-----
### For Linux/Osx ###

You must to edit your hosts file

```bash
$ sudo vim /etc/hosts
OR
$ sudo nano /etc/hosts
As you prefer :)
```

And add calculator.uk after localhost

```bash
127.0.0.1	localhost calculator.uk
```

### For Windows ###

you must to edit your hosts file with Notepad or Bloc Notes **(don't forget to run as administrator)** 

```bash
c:\Windows\System32\Drivers\etc\hosts
```


And add calculator.uk after localhost

```bash
127.0.0.1	localhost calculator.uk
```

Enjoy 
-----
Run http://calculator.uk:8080 to run the website.

