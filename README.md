# backupcdmweb
Simple web management for backupcdm

This is my side-and-long-project for backupcdm.
I have a plan that my backupcdm script can be managed via web for easier deployment, but of course it is optional not mandatory because I love KISS principle.

For now it only contains a .php file which will catch the POST sent from the script in case the script is going wrong, and then send the message via telegram.

TO DO:
- Create a web with login
- Create a dashboard which contain errors for easier sysadmin works
- Track the accumulating size for the backup directory
- Make a graph and visualization for that
- Ability to control backup time and the variables inside the script
- Create a better alert mechanics
