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
### &nbsp;
![Transpicious amazing](https://i.imgur.com/du1wBbE.png | width=200)
![](https://gyazo.com/eb5c5741b6a9a16c692170a41a49c858.png | width=100)

# How to use it
## If you are using `Laravel`
1. Add this line in to your `config/app.php`in the `aliases` array like this
`````Php
    'Transpicious' => Niyko\Transpicious\Translator::class
`````
> Don't remove the other classes in the array, just add the above line in to it
`````Php
'aliases' => [
        .......
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
        'Transpicious' => Niyko\Transpicious\Translator::class
],
`````
