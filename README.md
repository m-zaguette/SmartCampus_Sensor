# SmartCampus_Sensor

Nesse projeto foi proposto desenvolver uma aplicação PHP com o intuito de receber dados de um sensor para armazenar no Banco de Dados MySQL.

Para isso, foi desenvolvido um servidor virtual com o auxílio do [XAMPP.](https://www.apachefriends.org/pt_br/index.html)

Como o servidor foi criado como localhost (127.0.0.1) os links para acesso ao bando de dados para o php processar ficou com o arquvio requisicao.php

    $servername = "127.0.0.1:3306";
    $username = "estagio";
    $password = "estagio";
    $dbname = "estagio";
    ![image](https://user-images.githubusercontent.com/41178325/110191670-72746180-7e08-11eb-9e76-089e6ac8f5bc.png)


Aqui é possível visualizar o nome do servidor, usuário, senha e o nome do banco de dados que o requisicao.php acessará para armazenar as informações.

O banco de dados desenvolvido possui nome Sensor e foi desenvolvido com o sequinte arquivo SQL:
    
    CREATE TABLE Sensor(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_sensor int(6) UNSIGNED not null,
    datahora datetime not null,
    prediction INT(6)
    )
    
Para simular o sensor foi criado um arquivo python que gera um JSON com as informações:
    ID - Utilizado para identificar o ID do sensor.
    DATE - Utilizado para informar o horário da informação fornecida
    PREDICTION - Simulação do dado de um sensor.
    
O formato desse JSON fica dessa forma:
    {"id": 6, "date": "2021-03-05 22:56:53.681268", "prediction": 5}
    
Esse arquivo python cria um arquivo "sensor.json"

Para armazenar o JSON no banco de dados é acessado o link do arquivo requisicao.php. O link acessado através do arquivo python (sensor.py) foi o link http://127.0.0.1/requisicao.php
Através do código php é feito a leitura do arquivo "sensor.json" para obter as informações e carregado no banco de dados MySQL

![image](https://user-images.githubusercontent.com/41178325/110191653-5bce0a80-7e08-11eb-8084-46f2b2ac7e9e.png)
