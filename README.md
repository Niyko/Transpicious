![Transpicious logo](https://i.imgur.com/DE3eGQT.png)
### Transpicious converts yours website's content in any language you want, automatically. 
Yea, You heard it right, Now you can write the content of the website in any language and the user can change it any other language on wish. PHPGit is a web based terminal that can be used to push from your hosting server to your Github repo. PHPGit is like a clone of GIT desktop app. So most of the commands used for PHPGit is similar to GIT commands. PHPGit also partially supports `.gitignore` files.

# Simple Installation, Even a baby can do it
You can install Transpicious via Composer or by downloading the source code from the github repository, Continue reading for knowing more about installing Transpicious. Don't worry its super super easy.

## If you are using Composer
Open the terminal from the folder and Run this command in your command line:
`````
composer require niyko/transpicious
`````
## What if I don't use Composer
1. Don't worry, We got you. Download the .zip version of Transpicious from this link.
2. Un zip the file and extract it to your project's folder

#### &nbsp;

<img src="https://i.imgur.com/du1wBbE.png" width="350">

#### &nbsp;

# How to use it
## If you are using `Laravel`
### 1. Add this line in to your `config/app.php` in the `aliases` array like this
`````Php
    'Transpicious' => Niyko\Transpicious\Translator::class
`````
> Don't remove the other classes in the array, just add the above line in to it

After adding the line to the file, the array `aliases` in `config/app.php` may look like this.
#### Eg :
`````Php
'aliases' => [
        .......
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
        'Transpicious' => Niyko\Transpicious\Translator::class
],
`````
### 2. Writing the content with Transpicious
#### Using Transpicious in `Laravel View`
`````Html
    <body>
        <h1>{!! Transpicious::translate('hello') !!}</h1>
        <p>{!! Transpicious::translate('world') !!}</p>
    </body>
`````
#### Or using Transpicious in `Laravel Controller`
`````Php
     return Transpicious::translate('world');
`````
### 3. Changing the language from user part
`````Php
     return Transpicious::set_translate_to('sp');   // sp is the language code
`````
> You can find the full list of language code from the bottom of this readme
