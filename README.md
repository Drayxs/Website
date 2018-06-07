# Website
The source for my online portfolio.

www.garykcng.com

## Testing locally

With Docker installed, run this command:

```sh
docker run -p 80:80 --rm -v "$PWD":/var/www/html -it php:7.1-apache
```

Then navigate to <http://localhost:80/>