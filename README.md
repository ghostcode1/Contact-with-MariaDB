# Contact-with-MariaDB

# Create a user in MariaDB server using the below commands

CREATE USER 'admin'@'localhost' IDENTIFIED BY 'adminspassword';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;
exit
