![Transpicious logo](https://i.imgur.com/teaPjJw.png)
### Transpicious converts yours website's content in any language you want, automatically. 
Yea, You heard it right, Now you can write the content of the website in any language and the user can change it to any other language on wish. Transpicious automatically converts the website's contents to any one of the 90 supported language on the fly. Transpicious supports is Laravel, Codeigniter and core PHP. This is a very useful package to integrate multi language (multi locale) functionality to your code. You can also give custom translations if needed.

## :cyclone: Simple Installation, Even a baby :baby: can do it
**You can install via `Composer` or by downloading the `Source zip`.**
You can install Transpicious via Composer or by downloading the source code from the github repository, Continue reading for knowing more about installing Transpicious. Don't worry its super super easy.

### If you are using `Laravel`
#### 1. Open the terminal from the project folder and Run this command in your command line:
`````
    composer require niyko/transpicious
`````
#### 2. Add this line in to your `config/app.php` in the `aliases` array like this
`````Php
    'Transpicious' => Niyko\Transpicious\Transpicious::class
`````
> Don't remove the other classes in the array, just add the above line in to it

After adding the line to the file, the array `aliases` in `config/app.php` may look like this.
##### Eg :
`````Php
'aliases' => [
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facade.................
        .......
        .......
        'Transpicious' => Niyko\Transpicious\Transpicious::class
],
`````
#### 3. Writing the content with Transpicious
##### Using Transpicious in `Laravel View`
`````Html
    <body>
        <h1>{!! Transpicious::translate('hello') !!}</h1>
        <p>{!! Transpicious::translate('world') !!}</p>
    </body>
`````
##### Or using Transpicious in `Laravel Controller`
`````Php
     return Transpicious::translate('world');
`````
#### 4. Changing the language from user part
`````Php
     Transpicious::set_translate_to('es');   // es is the language code
`````
> You can find the full list of language code, [CLICK HERE](https://github.com/Niyko/Transpicious/blob/master/supported_language_codes.md).

### If you are using `Codeigniter`
#### 1. Open the terminal from the `application` folder inside your project, and Run this command in your command line:
`````
    composer require niyko/transpicious
`````
#### 2. Open `YOUR PROJECT/application/config.php` and change the value of `$config['composer_autoload']` to `TRUE`
Like shown here :
`````Php
    $config['composer_autoload'] = TRUE;
`````
> This line will be seen right around line number 140
#### 3. Writing the content with Transpicious
##### Using Transpicious in `Codeigniter View`
In the top of the View add this line
`````Php
    <?php
        use Niyko\Transpicious\Transpicious;
    ?>
`````
And use Transpicious in the view's html like
`````Html
    <body>
        <h1><?php echo Transpicious::translate('hello') ?></h1>
        <p><?php echo Transpicious::translate('world') ?></p>
    </body>
`````
##### Or using Transpicious in `Codeigniter Controller`
In the top of the View add this line
`````Php
     use Niyko\Transpicious\Transpicious;
`````
And in the controller use Transpicious like 
`````Php
     return Transpicious::translate('world');
`````
#### 4. Changing the language from user part
In the top of the View add this line
`````Php
     use Niyko\Transpicious\Transpicious;
`````
And to change the language use,
`````Php
     Transpicious::set_translate_to('es');   // es is the language code
`````
> You can find the full list of language code, [CLICK HERE](https://github.com/Niyko/Transpicious/blob/master/supported_language_codes.md).

### If you are using `Core PHP`, Like me :wink:
##### 1. Download the .zip version of Transpicious from this link,[CLICK HERE](https://github.com/Niyko/Transpicious/archive/1.0.0.zip). 
##### 2. Unzip the file and extract it to your project's folder
##### 3. In the top of your php file, add this line 
`````Php
     use Niyko\Transpicious\Transpicious;
`````
##### 4. And to use Transpicious, to print content, use like
`````Html
    <body>
        <h1><?php echo Transpicious::translate('hello') ?></h1>
        <p><?php echo Transpicious::translate('world') ?></p>
    </body>
`````
##### &nbsp;

<img src="https://i.imgur.com/du1wBbE.png" width="350">

##### &nbsp;

## :gear: Configuring Transpicious
There is not that much configurations in Transpicious, All the configuration are given in the file `Transpicious-1.0.0/config.php` (if you are using `composer` then it will be `vendor/niyko/transpicious/config.php`). The configuration file will look like this :
`````Php
<?php
    $_DEFAULT_CONVERT_FROM = "en";	
    $_DEFAULT_CONVERT_TO = "en";
?>
`````
#### configuration definition
| Variable | Description | Value type | Example |
| --- | --- | --- | --- |
| `$_DEFAULT_CONVERT_FROM` | Language code of the language which is used to write the content of the website | `String` - Language code | `'en'`, `'sp'`, `'hi'` |
| `$_DEFAULT_CONVERT_TO` | Language code of the defualt language of the website, The content will be shown in this lanuage when the user is firstly enters the website | `String` - Language code | `'en'`, `'sp'`, `'hi'` |

## What if some of the automatically gentrated translation is wrong?
If any translation that is automatically gentrated is worng, then you can define the correct on in the `custom translation`.
To know more about how to add custom translations, keep reading the next topic.

## :pencil: Adding custom translations
#### `Method 1` Adding it in the custom translation file
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
##### Didn't got it? Look at an example
If I am using `Transpicious::translate('hello, I'm Lilly')` in the content, And if you want to change the automatic translation of this content in the `spanish` language, the the `custom_translations.json` file will look like this :
`````Javascript
     {
        "en" : {
            "hello, I'm Lilly" : {
                "es" : "hola soy lilly"
            }
        }
    }
`````
## :books: API
### Transpicious::translate();
This function is used to give the content of the website. `translate()` function supports three parameters which all of them are string, Which are :
`````Php
     Transpicious::translate('CONTENT', 'TRANSLATE TO', 'TRANSLATE FROM');
`````
#### Function definition
| Parameters | Description | Requred | Value type | Example |
| --- | --- | --- | --- | --- |
| `CONTENT` | Content that needs to be translated | `YES` | `String` | `'hello'`, `'world'` |
| `TRANSLATE TO` | The content will be translated to this language, Overidding the language given in `$_DEFAULT_CONVERT_TO` in `config.php`, <br> ***Note: This will only be applied to this `CONTENT`, the rest on the website will be translated based on `config.php` if this parameter is absent*** | `NO` | `String` - Language code | `'en'`, `'sp'`, `'hi'` |
| `TRANSLATE FROM` | The content will be recognized as this language, Overidding the language given in `$_DEFAULT_CONVERT_FROM` in `config.php`, <br> ***Note: This will only be applied to this `CONTENT`, the content on rest of the website will be recognized based on `config.php` if this parameter is absent*** | `NO` | `String` - Language code | `'en'`, `'sp'`, `'hi'` |

##### Example usage : 
*If the `config.php` is set as `$_DEFAULT_CONVERT_FROM = "en"` and `$_DEFAULT_CONVERT_TO = "en"`*
`````Php
     Transpicious::translate('Friends don’t lie');                      // Returns Friends don’t lie
     Transpicious::translate('Friends don’t lie', 'es');                // Returns Los amigos no mienten
     Transpicious::translate('Los amigos no mienten', 'ch', 'es');      // Returns 朋友不撒谎
     Transpicious::translate('Los amigos no mienten', null, 'es');      // Returns Friends don’t lie
`````
### Transpicious::set_translate_to();
This function is used to change the current language of the website. All the content of the website will be translated to the language that is given as the parameter of this function
`````Php
     Transpicious::set_translate_to('TRANSLATE TO');
`````
#### Function definition
| Parameters | Description | Requred | Value type | Example |
| --- | --- | --- | --- | --- |
| 'TRANSLATE TO' | The whole website's content will be translated to this language | `YES` | `String` - Language code | `NO` | `'en'`, `'es'`, `'hi'` |

##### Example usage :
###### Example (1)
*If the `config.php` is set as `$_DEFAULT_CONVERT_FROM = "en"` and `$_DEFAULT_CONVERT_TO = "en"`*
`````Php
     Transpicious::set_translate_to('es');
     echo Transpicious::translate('She‘s our friend and she‘s crazy.');
     
     // The output will be : Ella es nuestra amiga y está loca
`````

###### Example (2)
*If the `config.php` is set as `$_DEFAULT_CONVERT_FROM = "en"` and `$_DEFAULT_CONVERT_TO = "en"`*
`````Php
     Transpicious::set_translate_to('es');
     echo Transpicious::translate('Mornings are for coffee and contemplation');
     echo Transpicious::translate('Mornings are for coffee and contemplation', 'ar');   // <= Note that translate() has a 2nd parameter
     
     /* The output will be :-
        Las mañanas son para el café y la contemplación.
        الصباح لتناول القهوة والتأمل
     */
`````
### Transpicious::clear_cache();
Used to clear the cached translations files, *Note: After clearing the cache, the site will take sometime to render on first run*
`````Php
     Transpicious::clear_cache();
`````
## :globe_with_meridians: All supported language codes
[CLICK HERE](https://github.com/Niyko/Transpicious/blob/master/supported_language_codes.md) to check out all the language codes supported in Transpicious for automatic translation.
## :page_with_curl: License
Transpicious is licensed under the [GNU GENERAL PUBLIC LICENSE](https://github.com/Niyko/Transpicious/blob/master/LICENSE), And this repo is made for educational purpose.
