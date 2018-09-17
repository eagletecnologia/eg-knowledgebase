Eagle Knowledge Base Skeleton for Grav [https://getgrav.org/](https://getgrav.org/) | [Documentation](https://learn.getgrav.org/)

[Demo](https://ajuda.eagletecnologia.com/) | [Docs](https://ajuda.eagletecnologia.com/manuais/base-de-conhecimento) 

# Requirements

- Web Server (Apache, Nginx, LiteSpeed, Lightly, IIS, etc.)
- PHP 5.5.9 or higher
- hmm... that's it really, (but please look at php requirements for a smooth experience)!

# Features

- Fully Responsive
- Theme Built whith [Gantry 5 Framework](http://gantry.org/)
- Full Search
- Latest topics
- Anchor Memu
- Page authentication (Login)
- Admin Panel
- Special layouts: Blog Itmes, Topic items, Default

# Basic Setup for Skeleton run

Clone the project or download and unzip it to your web server.

Dependencies install

`php bin/grav install`

If you want to run without a server, you can run with the built-in php server using the following command:

`php -S localhost:8080 system/router.php`

Upgrade Platform

`php bin/gpm selfupgrade`

Update Plugins

`php bin/gpm update`

For more information on upgrade [access](https://learn.getgrav.org/cli-console/grav-cli-gpm) 

# Main Plugins Used

- [Img Captions](https://github.com/olevik/grav-plugin-imgcaptions)
- [Reading Time](https://github.com/getgrav/grav-plugin-readingtime)
- [Related Pages](https://github.com/getgrav/grav-plugin-relatedpages)
- [Simple Search](https://github.com/getgrav/grav-plugin-simplesearch)
- [Thumb Ratings](https://github.com/iusvar/grav-plugin-thumb-ratings)
- [You Tube](https://github.com/getgrav/grav-plugin-youtube)

# Access and Permissions

- The Skeleton is already configured with 3 users: client, moderator, superadmin with the default `Eg-knowledge10` Password. For more information on user creation and password change, go to [Login Documentation](https://github.com/getgrav/grav-plugin-login)
- For information on how to block the page, go to [Documentação](ttps://ajuda.eagletecnologia.com/manuais/base-de-conhecimento/bloqueando-paginas)