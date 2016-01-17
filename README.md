#Tenho minha hospedagem e quero instalar o projeto SGG#

a instalação pode ser feita pelo github.com/WorksPHP/SGG
fazendo o download do projeto zipado ou clonando o repositorio em seu servidor


##Comando para criação do banco de dados##

`` php artisan migrate ``   roda as migrations criadas com as tabelas e seus respectivos campo
`` php artisan db:seed ``   popula a tabela users e a tabela categories, sendo que o usuário criado tem o e-mail "teste@test.com" e password "secret"
