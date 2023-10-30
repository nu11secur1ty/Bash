### Running bash script using ACL

- Allow your apache user to execute the test folder

```bash
setfacl -Rm u:your_apache_user:rwx /var/www/html/test
```
