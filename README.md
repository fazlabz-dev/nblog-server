# NBlog Server (formerly Nanoblog)
An official [NBlog](https://github.com/fazlabz-dev/nblog) server implementation.

## Features
* Basic posting, editing and deleting.
* A script that creates a feed from the server.
* RSS and Twtxt feeds.
* Simple routing engine.

The SQL schema's `post` table has cells with the same name as the fields of NBlog's JSON format.

The default username is `nblog` and the default password is `admin`, make sure to use [this tool](https://www.web2generators.com/apache-tools/htpasswd-generator) and paste it into your `.htpasswd` file.