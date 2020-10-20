# task

Here it,s needed the xamp in that we need to make sure that we have started the apache and Mqsql server and also import sql file on phpmyadmin which inserted on this git.

*******************************************************

Here You need set up some step for sending mail using Xamp localhost

first step

1. Open XAMPP Installation Directory.
  Go to C:\xampp\php and open the php.ini file.
  Find [mail function] by pressing ctrl + f.
  Search and pass the following values:


SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = YourGmailId@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"


second step
2.   Now, go to C:\xampp\sendmail and open sendmail.ini file.
    Find [sendmail] by pressing ctrl + f.
     Search and pass the following values.
  

smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=YourGmailId@gmail.com
auth_password=Your-Gmail-Password
force_sender=YourGmailId@gmail.com(optional)


After that use my code.

