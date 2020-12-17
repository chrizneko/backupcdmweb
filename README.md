# backupcdmweb
Simple web management for backupcdm

This is my side-and-long-project for backupcdm.
I have a plan that my backupcdm script can be managed via web for easier deployment, but of course it is fully optional because I love KISS principle.

For now it only contains a .php file which will catch the POST sent from the script in case the script gone wrong, and then send the message via telegram.
To use it just simply put it in your php web server and make sure it can be accessed, then change the token and chat_id variable suited for your environment.
Make sure you put notify="1" and notifysite="http://your-site/backupcdmnotifier.php" inside the conf.conf of your backupcdm installation.

TO DO:
- Create a web with login
- Create a dashboard which contain errors for easier sysadmin works
- Record the accumulating size for the backup directory
- Make a graph and visualization for that
- Ability to control backup time and the variables inside the script
- Create a better alert mechanics
