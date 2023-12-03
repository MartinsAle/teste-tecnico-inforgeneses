## Lista de Tarefas
Aplicação criada para gerenciar uma lista de tarefas desenvolvida em PHP utilizando o framework Laravel e banco de dados MySQL.
A aplicação contém um CRUD (CREATE, READ, UPDATE e DELETE) que permite cadastrar, visualizar, editar e deletar as tarefas criadas.

### Baixando e executando a aplicação
Para baixar a aplicação basta clonar o repositório em sua máquina através do comando **'git clone'** junto com o link do repositório git.  
Após baixado o repositório, acesar a pasta da aplicação através do terminal da sua IDE ou editor de códigos ou acessando a pasta pelo cmd ou gitbash (certifique-se que você tem um ambiente de desenvolvimento instalado e configurado).  
Acessar a pasta do projeto **(lista-de-tarefas)** e executar os seguintes comandos:  
- 1 - npm install (necessita de ter previamente instalado o Node.js);
- 2 - composer update (necessita de ter previamente instalado o Composer);  
- 3 - renomear o arquivo .env.example para .env;  
- 4 - no arquivo .env configurar a conexão com o banco de dados (sugerido criar o banco de dados com o nome **tarefas** ou qualquer outro nome de sua escolha);  
- 5 - executar o comando **php artisan key:generate**;  
- 6 - executar o comando **php artisan migrate:fresh --seed**;  
- 7 - após executar todos os comandos anteriores e não houver ocorrido nenhum erro, executar o comando **php artisan serve** para rodar a aplicação;  
- 8 - copiar o link que irá aparecer na tela após o comando anterior (geralmente o link é **http://127.0.0.1:8000**) e colar no seu navegador preferido para acessar o sistema.
  
Executados os passos anteriores será possível acessar a aplicação e testar as suas funcionalidades.
