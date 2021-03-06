import json
import urllib.request
from datetime import datetime
from datetime import timedelta

sensor = 0
parar = 0
while parar>=0 and parar<5:
    sensor += 1
    data = {}
    id = 6;
    datahora = datetime.now()
    datahora = datahora + timedelta(seconds=1+parar)
    datahora = str(datahora)
    
    data = {'id': id,
            'date': datahora,
            'prediction':sensor
            }

    s = json.dumps(data)

    with open ("C:\\xampp\htdocs\sensor.json","w") as f:
        f.write(s)
        
    webUrl  = urllib.request.urlopen('http://127.0.0.1/requisicao.php')
    parar += 1
