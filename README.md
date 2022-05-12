
# LDN
LDN is a parser of the website [lidkopingsnytt.nu](https://www.lidkopingsnytt.nu/), with the aim to take it's content and put a new coat of ppaint on it.

Below, you will find a description of all files:

 

### articles.db

The databse fille conataing all the data

  

### content.php

The article itself

  

### index.php

The main php file where all articles are visible in a grid formation

  

### main.py

The parser file

  

### sqllite.py

The database implementation
  

### mansonry.js

Used by index.php to make the grid formation

  

## Dependencies

* Python

* XAMPP

  

## Installation
**Make sure you have the latest version of python and also have turned on both the server and database inside xampp!**

1. Clone the project into `htdocs`. 
2. Run `pip install -r requirements.txt` to install required packages. 
3. CD into the folder called `LDN` and run `python main.py`. You will see a steady output of *"DONE"*. The process is finished once *"END OF THE PROGRAM!!!"* is shown!
4. Open `index.php` via localhost.
