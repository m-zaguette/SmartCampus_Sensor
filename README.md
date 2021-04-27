<h1 align="center">Sensor SmartCampus</h1>

These project were proposed to develop an aplication PHP with the objective to receive and save data from sensor in MySQL Database.

To achieve, were used virtual server with <a href="https://www.apachefriends.org/pt_br/index.html">XAMPP</a>.

With the server were created as localhost (127.0.0.1) the links to access the database in php is in the file requisicao.php

    $servername = "127.0.0.1:3306";
    $username = "estagio";
    $password = "estagio";
    $dbname = "estagio";
    
![image](https://user-images.githubusercontent.com/41178325/110191670-72746180-7e08-11eb-9e76-089e6ac8f5bc.png)

Here is possible to see server name, user, password and database name which requisicao.php will access to save the informations.

The database Sensor were created and develop with the SQL Query:
    
    CREATE TABLE Sensor(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_sensor int(6) UNSIGNED not null,
    datahora datetime not null,
    prediction INT(6)
    )


To test the code in php were used <a href="https://insomnia.rest/download">Insomnia</a>.

![image](https://user-images.githubusercontent.com/41178325/110191721-d1d27180-7e08-11eb-9166-c7c1f137fce3.png)

To simulate the sensor were created an python file that creates JSON with these informations:
    
    ID - Identify the sensor.
    DATE - Date when the sensor send the data.
    PREDICTION - Simulation of the data from the sensor.
    
This JSON will have the format:
    {"id": 6, "date": "2021-03-05 22:56:53.681268", "prediction": 5}
    
These python file creates the file "sensor.json"

To save the JSON on database is used the link from requisicao.php. The link for the python file (sensor.py) were http://127.0.0.1/requisicao.php
Through this code php it is read the file sensor.json to receive the informations and load to MySQL database.

![image](https://user-images.githubusercontent.com/41178325/110191747-edd61300-7e08-11eb-925a-388e90849eab.png)
