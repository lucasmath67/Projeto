1- git clone 
2-cp .env.example para .env
3- adicionar as configurações do banco de dados
4-composer install
5-php artisan migrate
6-php artisan key: generate 
7-php artisan optimize:clear
8-
endpoints da api: 
pedidos:
get  api/orders =>trás todos os pedidos do usuário
post api/orders =>cria um pedido obrigotirio mandar array de produtos 
get api/orders/id =>detalhes de um pedido
delete api/orders/id =>deleta um pedido do usuário 

login:


post api/login =>autentifica o usuário,
post api/logout =>remove token de autentificação,
post api/register =>cria um usuário
