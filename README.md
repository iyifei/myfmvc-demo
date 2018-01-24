# myfmvc-demo
myfmvc的简单使用demo

# nginx 配置

```php
业务系统的配置

server {
    listen       80;
    server_name mvc.myf.cn;
    root /myfmvc-demo/App;
    index index.php index.html index.htm;

    location / {
        if (!-e $request_filename) {
            rewrite  ^(.*)$  /index.php?_url=$1  last;
            break;
        }
    }


    location ~ \.php$ {
        include /usr/local/etc/nginx/fastcgi.conf;
        fastcgi_intercept_errors on;
        fastcgi_pass   127.0.0.1:9000;
    }

}

访问：
http://mvc.myf.cn/index/test

```

```php
管理后台的配置

server {
    listen       80;
    server_name amvc.myf.cn;
    root /myfmvc-demo/Admin;
    index index.php index.html index.htm;

    location / {
        if (!-e $request_filename) {
            rewrite  ^(.*)$  /index.php?_url=$1  last;
            break;
        }
    }


    location ~ \.php$ {
        include /usr/local/etc/nginx/fastcgi.conf;
        fastcgi_intercept_errors on;
        fastcgi_pass   127.0.0.1:9000;
    }

}

访问：
http://amvc.myf.cn/index/test

```