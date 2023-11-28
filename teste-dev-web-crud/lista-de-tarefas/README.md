## Lista de Tarefas
Aplicação criada para gerenciar uma lista de tarefas desenvolvida em PHP utilizando o framework Laravel e banco de dados MySQL.
A aplicação contém um CRUD (CREATE, READ, UPDATE e DELETE) que permite cadastrar, visualizar, editar e deletar as tarefas criadas.

### Baixando e executando a aplicação
1 - Para baixar a aplica basta clonar o repositório em sua máquina através do comando **'git clone'** junto com o link do repositório git;
2 - Após baixado o repositório, acesar a pasta da aplicação através do terminal da sua IDE ou editor de códigos ou acessando a pasta pelo cmd ou gitbash;
3 - Antes de rodar a aplicação crie o banco de dados de nome **'tarefas'**;
4 - Em seguida, acesse a aplicação conforme o passo 2 e informe o seguinte comando: **php artisan key:generate**. Irá gerar a **APP_KEY** no arquivo **.env** (copiar o .env.exemplo e renomear para .env antes de gerar a APP_KEY);
5 - Abrir o arquivo **.env** e informar os dados do banco de dados que você usará;
6 - Feito isso, gerar os dados da tabela executando o seguinte comando: **php artisan migrate:fresh --seed**.
7 - Por último rodar o comando: **php artisan serve**. Assim a aplicação será iniciada e será mostrado o link da aplicação. Acessar o link e testar.
