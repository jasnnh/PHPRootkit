# PHPRootkit
PHP is a powerful language and can be coded with malicious intent

In this example i coded a directory listing with a delete button when the button is pressed the action variable a=1 is sent to self php and the file path
once the command is received php will use the unlink function to delete the file(s) from the host's PC requiring no permissions and can view the entire PC's directory.
but in this example i did not code a full directory listing it's limited to only the path "C:\".

PHP can also do other tasks such as execute a .exe file remotely just via the web browser running the Rootkit script.

![Screenshot](https://github.com/jasnnh/PHPRootkit/blob/main/ss.PNG)

In the Cyber security world a hacker would upload this file onto a web server and use this script to gain full access to the victim's PC/Server. to combat against this
type of hack is usually prevent uploading of certain file types such as .php
