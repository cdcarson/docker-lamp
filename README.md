# LAMP Docker

A LAMP (Linux, Apache, MySQL, PHP) stack meant for development within VS Code Remote Containers. This stack is for **educational and development purposes only**  -- it's not intended as is for production deployments.

## What's Included
- PHP 7.4 + Apache. This runs in the `{PROJECT}`_app container. Node is also installed on this container to facilitate asset toolchains (css, javascript, etc.)
- MySQL (MariaDb) running in the `{PROJECT}`_database container.
- phpMyAdmin (an admin app for looking at your database) running in the `{PROJECT}`_phpmyadmin container.

In addition, the following VS Code extensions are installed when you open the project as a dev container:

- felixfbecker.php-debug: Debugging PHP code in the editor.
- bmewburn.vscode-intelephense-client: Intellisense (code completion) for php
- mrmlnc.vscode-apache: Intellisense for apache config files
- esbenp.prettier-vscode: Formatter for code, enforcing consistent style

## Getting Started
**Prerequisites**

You need to have the following installed:

- git: https://git-scm.com/book/en/v2/Getting-Started-Installing-Git 
- Docker Desktop: https://www.docker.com/products/docker-desktop 
- VS Code: https://code.visualstudio.com/ 

**Steps**

- Open up  VS Code. If you already have VS Code open, open a new blank workspacee (`File -> New Window`);
