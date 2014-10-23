# localhost.so.it landing page
This is a vagrant wordpress installation for the office landing page.

# Configuration
To test the application locally:

1- vi /etc/hosts
   and add 
```text
   127.0.0.1 localhost.so.it
```

2- add a vhost in your local apache configuration

```xml
   <VirtualHost _default_:80>
    ServerName localhost.so.it
    ProxyPreserveHost On
    ProxyPass / http://127.0.0.1:8080/
    ProxyPassReverse / http://127.0.0.1:8080/
</VirtualHost>
```

3- vagrant up


# Users
Users to login to the default wp-admin page is admin/vagrant


