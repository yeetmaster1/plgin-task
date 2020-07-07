# plugin Task

This is the task required from me as a result of applying to a job at inpsyde.

## Installation

Use the package manager [composer](https://getcomposer.org/) to install the plugin (autoload it).

```cmd
composer dump-autoload
```

## Usage
The plugin has initially the required criteria with some changes as **discussed** via E-mail.

## Extra Dependencies used 
**All Extra Dependencies used were in a cdn format to ease the reviewing of the code**
1. [JQuery](https://jquery.com/)
2. [Qunit](https://qunitjs.com/?__cf_chl_jschl_tk__=dae19ecec5b9d451f4d6f65f429ed89f0dc14050-1594023545-0-AT2ipQbqmUpnzts7rdagLWKLLOeql0wVT5Te0jvs2BgogR6q1LRTM0V7Be3-PRq0UasCRQRMvEkn4ZDZ8wYgksscXDEMjQ7WufrC79HtoG_8NA4qgD8lzSqFFcuC0BEUza1JpwCt6XHxW_8nkrueQ6o1P_2aFP86r8lf45wgWoCTSPEgn9JJ81Q2VpXoadijQ8BGc3DmZ9LoRV5WeMftCaJezL49MahZesZk-xnT2Q6IE524OlclXl189fE4Dv0-8ChEPSxd1QAC3Mnh6bZ3TPo)
3. [bootstrap](https://www.bootstrapcdn.com/)
## changes 
 **(The reasoning behind all changes are listed blow.)**
1. The plugin does not output user info on the front-end but outputs them to an admin menu page.

## Reasons for changes
1. it was discussed via Email, whether it was ok to do it on an admin menu page rather then the front-end as this type of info should only be accessible by the owners of the site and not any vistor and the answer i got via Email was as follows and i quote 
***"Your choice. Create a menu page or a front end page. On the idea, we were more inside the idea to get a page on front end to list the users"*** 
and therefore i have decided to do the better option. 

2. Security, I belive that it should be a habit to always try and not leak or leave important info on the front-end where malicious actor could use said info in a bad way, even if it is just a sample test i still belive that a programmer must always think of the security of said info  

## Unit Testing
As discussed via Email the unit testing was done for demonstrative purposes and as aresult one sample unit test was done.

The software used for the **Automated Testing** was Qunit.

[references used](http://web.mit.edu/6.005/www/fa16/classes/03-testing/#reading_3_testing)

## Thinking process 
As for the design the task was done in, there was not much design put into it as in the task request it was made clear that simple, high quilty code is key, and i didn't want to spend much time on it.
for the plugin code it self I aslo tried to follow the same quote "simple, high quality" so i made it as simple as possible whilst adhering to the list of requirements as well as trying to make it responsive.


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
