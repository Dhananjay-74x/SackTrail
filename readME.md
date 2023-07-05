# SackTrail

## Project by Shashank Mishra, Dhananjay Gaur
 
A RFID-based airport security system is demonstrated by the system. We employ an RFID module, Node MCU ESP8266, and a fronted based on PHP , HTML ,CSS JavaScript all compiled on APACHE2 Server to regulate how the device functions for this purpose.
MFRC522 is quad tripled in modules to make 4 different gateways, each gateway comprising of the NODEMCU and the RFID reader , to detect incoming luggage’s attached with RFID tags as in below images.

![image](https://github.com/Dhananjay-74x/SackTrail/assets/86489966/f219b96f-57f5-4d1e-b2a9-70f00b83b3ac)

To start the project use the following command to start the apache server

$ sudo /opt/lampp/lampp start

>> If there are any errors then kill apache server instance that might be running by running the command 
-->> $ apachectl stop

After server has started, use the following links -

<-----> Internal Links

http://localhost:8000/phpmyadmin/  -> phpadmin page

http://localhost:8000/Sensor-data-test/post-sensor-data.php -> post to this php page


<-----> Frontend links

http://localhost:8000/Sensor-data-test/register.html -> REGISTRATION PAGE

http://localhost:8000/Sensor-data-test/login.html -> LOGIN PAGE
