# SackTrail

An RFID-based airport security system is demonstrated by the system. We employ an RFID module, Node MCU ESP8266, and a fronted based on PHP , HTML ,CSS JavaScript all compiled on APACHE2 Server to regulate how the device functions for this purpose.
MFRC522 is quad tripled in modules to make 4 different gateways, each gateway comprising of the NODEMCU and the RFID reader , to detect incoming luggage’s attached with RFID tags as in the below images.


### RFID READER
![RFID Reader](https://github.com/Dhananjay-74x/SackTrail/assets/86489966/f219b96f-57f5-4d1e-b2a9-70f00b83b3ac)


### NODEMCU ESP8266
![image](https://github.com/Dhananjay-74x/SackTrail/assets/86489966/ba148d34-2090-4d2e-8d1c-7e1f8bf04f18)


RFID technology is commonly used for baggage tracking in airports, and with IATA's Resolution 753 now in effect, airlines have started implementing RFID-based baggage tracking systems. In order to implement RFID-based baggage tracking using NODEMCU and an RFID reader, you will need to connect the RFID reader to the NODEMC
It also includes interfacing existing NodeMCU ESP8266 with packaged Arduino IDE, using ARDUINO programming language, which seems to be a better fit as being less complex than Lua and more efficient than C++. A major proportion of the project Gantt time had been spent in Trying and testing RFID readers with Nodemcu with soldered connections, As a few RFID readers come faulty. Finally, upon successful connection of the RFID reader and NODEMCU Backend Server Integration is done.


### DEPENDENCY GRAPH FOR THE FRONTEND IMPLEMENTATION OF THE PROJECT
![image](https://github.com/Dhananjay-74x/SackTrail/assets/86489966/8b5113e0-0342-4c90-be3a-13869a3677bc)


### REGISTRATION PAGE
![image](https://github.com/Dhananjay-74x/SackTrail/assets/86489966/898d7497-28bf-4cfa-9c02-bb7003ecb104)


### FIRST LANDING PAGE FOR THE PROJECT
![image](https://github.com/Dhananjay-74x/SackTrail/assets/86489966/91021205-6995-428a-9aaf-79c02a776dd7)


### PROGRESS BAR FOR BAGGAGE CONTROL INTERFACE
![image](https://github.com/Dhananjay-74x/SackTrail/assets/86489966/0346cbf4-f29c-46d1-af65-21c6fbaef1d7)


### FINAL PROJECT
![504c0df1-2829-4542-a0ed-2e64eac1e6fc](https://github.com/Dhananjay-74x/SackTrail/assets/86489966/f03c0b9a-7671-4f96-bc3e-f41ec04753a1)


### PROTOTYPE
![44e502fc-0a26-4156-a6bf-c07e8cfc760d](https://github.com/Dhananjay-74x/SackTrail/assets/86489966/ba7b9967-7263-4c91-8d46-d9edfe736358)




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
