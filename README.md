

# Projeto "Teste"

<h3>Como Solucionei o Projeto </h3>
<p> Solucionei o projeto proposto ,através da criação de um projeto em laravev(admin) com o uso do template ADMINLTE , enquanto a parte de api utilizei o sanctum para
    o login através de tokens e  os padrões de projeto Repository e Service Layer .
</p>




<h3>Instalação</h3>






### Clone

- Clone este repositório na sua máquina local usando https://github.com/lucasmath67/Projeto.git

### Setup


<ol> 

<li>$ cp .env.example para .env </li>
<li>$ adicionar as configurações do banco de dados </li>
<li>$ composer install </li>
<li>$ composer install </li>
<li>$ php artisan migrate </li>
<li>$ php artisan key: generate </li>
<li>$ php artisan optimize:clear </li>

</ol>

### Acesar Admin
<p> Para Acessar o admin basta acessar a rota "/" do projeto  e criar um login como administrador  </p>


### Acesar API
  <h3>EndPoints</h3>
     <h2>Login:  </h2>
     <p>post api/login =>autentifica o cliente  </p>
     <p>api/logout =>remove token de autentificação </p>
     <p>api/logout =>post api/register =>cria um usuário</p>
     <h4>Exemplo ciração de usuário em json  </h4>
        <p>
            {
        "name": "teste",
        "email": "testee@gmail.com",
        "telephone": "12345678910",
        "password":  "teste12345",
        "address": "rua teste" }
        </p>
 <h2>Pedidos: </h2>
     
 <p>get  api/orders =>trás todos os pedidos do usuário </p>
 <p>post api/orders =>cria um pedido obrigotirio mandar array de produtos </p>
 <p>get api/orders/id =>detalhes de um pedido</p>
 <p>delete api/orders/id =>deleta um pedido do usuário </p>
 <h4>Exemplo ciração de um pedidoe json </h4>
       <p>  { 	"client_id":1, 	"products":[
    	{ "id":1, "name":"teste" } 	] }
        </p>
 
