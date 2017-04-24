# Boboforce3
Organic grocery store in the bobo capital.

## Installation

### Windows

1. Download and run [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe) the dependency manager of PHP.

It will install the latest Composer version and set up your PATH so that you can just call composer
from any directory in your command line.

> Note: Close your current terminal. Test usage with a new terminal:
> This is important since the PATH only gets loaded when the terminal starts.

2. Download this project from the top-right green button *Clone or download* and unzip where u like.

3. Navigate to the folder where you extracted the project and open a command window in it:

Hold down the `Shift key` and right-click a folder.
The context menu will contain an entry, *Open command window here*.

4. Type the following in the command window, to install :
`composer install`

5. Once the process is complete type, the following in the command window to start a new web server:
`composer run`

6. You can now navigate to the following URL to the application running:
[http://localhost:8888/](http://localhost:8888/)

## TODO

There are 3 methods to change at the end of the `src/Entity/Product.php` file in order to finish this project:
1. `getPriceWithTaxes`
2. `getImage`
3. `getWeightValueAndUnit`
