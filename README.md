#Tenho minha hospedagem e quero instalar o projeto SGG#

A instalação pode ser feita pelo github.com/WorksPHP/SGG
fazendo o download do projeto zipado ou clonando o repositorio em seu servidor.


##Configurações Iniciais##

Abra o terminal e acesse seu servidor via ssh, na raiz do projeto rode o comando ``composer install `` e ``composer update``, isso tem como resultado a instalação das bibliotecas gerenciadas pelo composer e a atualização do arquivo de autoload. 
Na raiz do projeto existe o arquivo ```.env.example``` , esse arquivo possui variaveis globais que são utilizadas pelo framework para comunicação com banco de dados, sistema de cache, e-mail e chave de segurança da aplicação.
Após configurar as variaveis de acordo com seu servidor, abra o terminal acesse o seu servidor via ssh e rode o comando ```php artisan key:generate ``` que irá criar uma chave randomica para sua aplicação.


##Comando para criação do banco de dados##

`` php artisan migrate ``   roda as migrations criadas com as tabelas e seus respectivos campo
`` php artisan db:seed ``   popula a tabela users e a tabela categories, sendo que o usuário criado tem o e-mail "teste@test.com" e password "secret".


##Acessando a Aplicação##

Com sua aplicação rodando, existe duas formas de acesso, uma é a criação de um usuário e a outra é acessando com os dados 'default' que inserimos no banco dados no momento da criação e inserção dos arquivos de SEED.
