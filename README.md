## REST
---

Diversos dispositivos diferentes poderão acessar a nossa base por REST 

Vamos imaginar que temos os seguintes dispositivos:
- Site
- Android app
- Desktop app
- iPhone app
- JS app

E que cada um deles tivesse um banco separado, ja teriamos um problema de repente de redundância de dados. Por isso todos eles irão usar essa API via REST sendo uma base de dados somente

Recursos(interface padrao HTTP):

GET - `/medicos`
GET - `/medicos/{id}`
POST - `/medicos`
PUT - `/medicos/{id}`
DELETE - `/medicos`

Enviando as requisicoes(request):
```javascript
    Accept: application/json
    Content-type: application/xml
```

Respostas(response):

- 2xx - Indica que a requisicao foi processada com sucesso
- 3xx - Indica ao clinete uma acao a ser tomada para que a requisicao posssa ser concluida
- 4xx - Indica erro(s) na requisicao causado pelo cliente.
- 5xx - Indica que a requisicao nao foi conlcuida devido a erro(s) ocorrido(s) no servidor.