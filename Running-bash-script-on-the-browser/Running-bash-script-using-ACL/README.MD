### Running bash script using ACL

- Allow your Apache2 user to execute the test folder

```bash
setfacl -Rm u:your_apache_user:rwx /var/www/html/test
```
### Find Apache2 user

```bash
apachectl -S
```
