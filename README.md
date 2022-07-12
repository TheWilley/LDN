
# LDN
LDN is a web scraper of the website [lidkopingsnytt.nu](https://www.lidkopingsnytt.nu/), with the aim to take it's content and put a new coat of paint on it.

Below, you will find a description of all files:
  
| **File** | articles.db | content.php | index.php | main.py | sqllite.py | mansonry.js |
|---|---|---|---|---|---|---|
| **Description** | The databse file conataing all the data (OBS: This file is generated)| The article itself | The main php file where all articles are visible in a grid formation | Scrapes the website content | The database implementation | Used by index.php to make the grid formation |

## Dependencies
* Python
* XAMPP

## Installation
**Make sure you have the latest version of python and also have turned on both the server and database inside xampp!**

1. Create a virtual enviorment in `htdocs` with `python3 -m venv ldn`
2. Active the virtual enviorment with `ldn\Scripts\activate.bat` on windows and `source ldn/bin/activate` on mac
3. Clone the project into the folder of the virtual enviorment and CD into it.
4. CD into `release`, then `python` and run `pip install -r requirements.txt`.
5. Run `python main.py`. You will see a steady output of *"DONE"*. The process is finished once *"END OF THE PROGRAM!!!"* is shown!
6. Open `index.php` via localhost.

### One liners
These will install and create everything for you.
MAC: 
```
python3 -m venv ldn;source ldn/bin/activate;cp -r release ldn;pip3 install -r ldn/release/python/requirements.txt
```

## Why not host this on a webpage?
Due to copyright, I cannot host this project on a server accessible to the public.

```
Innehållet i Lidköpingsnytt är skyddad enligt lagen om upphovsrätt.
Kopiering av material ur Lidköpingsnytt är tillåten för undervisning och i skolor.
All annan kopiering utan tillstånd av redaktionen är förbjuden.
Redaktör och ansvarig utgivare är Björn Smitterberg.
Lidköpingsnytt.nu är registrerad enligt lag om etermedier vid myndigheten för radio och TV.
```


