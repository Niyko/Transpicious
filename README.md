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

# Configuring Transpicious
There is not that much configuration in Transpicious, All the configuration are given in the file `Transpicious/config.php` (if you are using `composer` then it will be `vendor/niyko/transpicious/config.php`). The configuration file will look like this :
`````Php
<?php
    $_DEFAULT_CONVERT_FROM = "en";	
    $_DEFAULT_CONVERT_TO = "en";
?>
`````
### configuration definition
| Variable | Description | Value type | Example |
| --- | --- | --- | --- |
| `$_DEFAULT_CONVERT_FROM` | Language code of the language which is used to write the content of the website | `String` - Language code | `'en'`, `'sp'`, `'hi'` |
| `$_DEFAULT_CONVERT_TO` | Language code of the defualt language of the website, The content will be shown in this lanuage when the user is firstly enters the website | `String` - Language code | `'en'`, `'sp'`, `'hi'` |

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

# What if some of the automatically gentrated translation is wrong?
If any translation that is automatically gentrated is worng, then you can define the correct on in the `custom translation`.
To know more about how to add custom translations, keep reading the next topic.

# Adding custom translations
### `Method 1` Adding it in the custom translation file
Inside the `Transpicious` folder (if you are using `composer` then it will be `vendor/niyko/transpicious`), there is a folder called `custom_translations`, inside that there is a file called `custom_translations.json`. You can add your custom translations in this file using the below syntax.
`````Javascript
     {
        "LANGUAGE CODE OF CONVERTED FROM" : {
            "CONTENT 1" : {
                "1ST LANGUAGE CODE OF CONVERTED TO" : "TRANSLATION",
                "2ND LANGUAGE CODE OF CONVERTED TO" : "TRANSLATION",
            },
            "CONTENT 2" : {
                "1ST LANGUAGE CODE OF CONVERTED TO" : "TRANSLATION",
                "2ND LANGUAGE CODE OF CONVERTED TO" : "TRANSLATION",
            }
        }
    }
`````
#### Didn't got it? Look at an example
If I am using `Transpicious::translate('hello, I'm Lilly')` in the content, And if you want to change the automatic translation of this content in the `spanish` language, the the `custom_translations.json` file will look like this :
`````Javascript
     {
        "en" : {
            "hello, I'm Lilly" : {
                "sp" : "hola soy lilly"
            }
        }
    }
`````
# API
## Transpicious::translate();
This function is used to give the content of the website. `translate()` function supports three parameters which all of them are string, Which are :
`````Php
     Transpicious::translate('CONTENT', 'TRANSLATE TO', 'TRANSLATE FROM');
`````
### Function definition
| Parameters | Description | Requred | Value type | Example |
| --- | --- | --- | --- | --- |
| `CONTENT` | Content that needs to be translated | `String` | `YES` | `'hello'`, `'world'` |
| `TRANSLATE TO` | The content will be translated to this language, Overidding the language given in `$_DEFAULT_CONVERT_TO` in `config.php`, <br> ***Note: This will only be applied to this `CONTENT`, the rest on the website will be translated based on `config.php` if this parameter is absent*** | `String` | `NO` | `'en'`, `'sp'`, `'hi'` |
| `TRANSLATE FROM` | The content will be recognized as this language, Overidding the language given in `$_DEFAULT_CONVERT_FROM` in `config.php`, <br> ***Note: This will only be applied to this `CONTENT`, the content on rest of the website will be recognized based on `config.php` if this parameter is absent*** | `String` | `NO` | `'en'`, `'sp'`, `'hi'` |

#### Example usage : 
*If the `config.php` is set as `$_DEFAULT_CONVERT_FROM = "en"` and `$_DEFAULT_CONVERT_TO = "en"`*
`````Php
     Transpicious::translate('Friends don’t lie');                      // Returns Friends don’t lie
     Transpicious::translate('Friends don’t lie', 'sp');                // Returns Los amigos no mienten
     Transpicious::translate('Los amigos no mienten', 'ch', 'sp');      // Returns 朋友不撒谎
     Transpicious::translate('Los amigos no mienten', null, 'sp');      // Returns Friends don’t lie
`````
