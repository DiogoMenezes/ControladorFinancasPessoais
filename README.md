# ControladorFinancasPessoais

# Git Bash

### Instalação Git Bash 

- Download: https://git-scm.com/downloads
- Realize a instalação com as configurações padrões.

### Configurar Git Bash na variável de ambiente
- Abra o painel de controle
- Sistema
- Configurações avançadas de sistema
- Variáveis de Ambiente
- Em variáveis do sistema (tabela de baixo) edite o campo Path
- Após o ; coloque o caminho da pasta git. *Exemplo: C:\Program Files\Git\bin;*  

# PHP

### Instalação PHP 

- Download: http://windows.php.net/download
- Realize o download da versão 7.1 non thread
- Descompacte o arquivo baixado e renomeie o diretório caso queira

### Configurar PHP na variável de ambiente

- Abra o painel de controle
- Sistema
- Configurações avançadas de sistema
- Variáveis de Ambiente
- Em variáveis do sistema (tabela de baixo) edite o campo Path
- Após o ; coloque o caminho da pasta php. *Exemplo: C:\php;*  

### Configuração PHP

- Dentro da pasta do php , existem dois arquivos (*php.ini-development* e *php.ini-production*) , que são duas configurações para propósitos diferentes.
Na nossa situação, usaremos o php.ini-development porque será para desenvolvimento.
- Renomeie o arquivo *php.ini-development* para *php.ini*
- Abra o *php.ini* para realizarmos a configuração do mesmo( Pode utilizar qualquer editor de texto para abrir o arquivo)(Dê um find (CTRL + L ou CTRL + F) para localizar rapidamente as palavras.)  
__OBS: TODAS AS LINHAS QUE INICIAM COM ; INDICAM QUE ESSA LINHA ESTA COMENTADA ,OU SEJA, NÃO ESTÁ SENDO UTILIZADA. PARA UTILIZARMOS AQUELA CONFIG, BASTA REMOVER O ;__
- Configurações(__ATIVAR TODOS AS CONFIGS ABAIXO__) :  
-> `extension_dir = "ext"` ( Necessário para ativar as extensões do php).  
-> `extension=php_curl.dll` (Extensão do Windows para acessar uma URL externa)  
-> `extension=php_intl.dll` (Extensão do Windows para trabalhar com datas e números)  
-> `extension=php_mysqli.dll` (Extensão do Windows para utilizar as funções do MySQLi)  
-> `extension=php_openssl.dll`(Extensão do Windows para utilizar as funções do OpenSSL)  
-> `extension=php_pdo_mysql.dll` (Extensão do Windows para conectar no MySQL)  
-> `display_errors = On` (Mostrar os erros caso apareçam no PHP)  
-> `display_startup_errors = On` (Mostrar os erros caso apareçam no PHP)  
-> `log_errors = On` (Mostrar os logs de erros do PHP)  
-> `error_log = C:\php` (Coloque o caminho da sua pasta PHP) (Local onde o arquivo de error vai ser gerado)  
-> `error_reporting = E_ALL` (Mostrar todo tipo de erro)
- Salve o arquivo e :sparkles: , php configurado !

# Composer

### Instalação Composer 

__Composer__ : Responsável por gerenciar as dependências das aplicações em PHP
- Download: https://getcomposer.org/download/ (Realize o download do Composer-Setup.exe)
- Instalar o Composer-Setup.exe  

### Configurar Composer na variável de ambiente

- Abra o painel de controle
- Sistema
- Configurações avançadas de sistema
- Variáveis de Ambiente
- Em variáveis do sistema (tabela de baixo) edite o campo Path
- Após o ; coloque o caminho da pasta composer. *Exemplo: C:\ProgramData\ComposerSetup\bin;*  

# MYSQL

### Instalação MYSQL 

- Download: https://dev.mysql.com/downloads/installer/ (baixar versão de maior tamanho)
- Realize a instalação com as configurações padrões.

### Configurar MYSQL na variável de ambiente

- Abra o painel de controle
- Sistema
- Configurações avançadas de sistema
- Variáveis de Ambiente
- Em variáveis do sistema (tabela de baixo) edite o campo Path
- Após o ; coloque o caminho da pasta mysql. *Exemplo: C:\Program Files\MySQL\MySQL Server 5.7\bin;*  

# Aplicação

### Iniciando com composer

- Criar uma pasta ( nomear do jeito que quiser) __OBS: Essa será a pasta da sua aplicação__
- Entre nessa pasta pelo Git Bash
- Comando: `composer init` ( irá criar o composer.json) OBS: Você também pode definir outras coisas como nome, email...  
  -> Seu arquivo *composer.json* ficará assim:
```javascript
{
    "name": "nome-da-maquina/nome-da-pasta-que-voce-criou",
    "authors": [
        {
            "name": "Seu Nome",
            "email": "seu-email@gmail.com"
        }
    ],
    "require": {}
}
```  
- Configurar autoload (O autoload serve para fazer o carregamento automático das classes)
- Utilizaremos a PSR-4 (PSR são especificações de projeto) para autoload , já que a PSR-0 está depreciada.  
  -> Ficará assim:
```javascript
{
    "name": "nome-da-maquina/nome-da-pasta-que-voce-criou",
    "authors": [
        {
            "name": "Seu Nome",
            "email": "seu-email@gmail.com"
        }
    ],
    "require": {},
    "autoload":{
        "psr-4":{
          "nome-do-seu-namespace\\": "nome-da-pasta-que-será-apontada-pelo-namespace/"
        }
    }
}
```  
__OBS: Namespaces possibilitam o agrupamento de classes, interfaces, funções e constantes, visando evitar o conflito entre seus nomes. Melhor explicando, evita o uso repetitivo de includes, já que o namespace aponta para a pasta onde está o código fonte da aplicação.__  
- Crie a pasta que será apontada pelo namespace.    
- Execute o comando `composer autoload`(Não criará nada pois não existe nenhuma classe ainda, mas vai criar uma pasta chamada *vendor*, que é responsável por conter todas as dependências que serão utilizadas).  

# Integração da biblioteca phinx 

__OBS: (Através dela podemos administrar as migrations do nosso projeto, ou seja, administrar o banco de dados, através do PHP.)__    
__Migrations : É uma ferramenta que visa realizar manutenção da estrutura de banco de dados. Consiste em identificar a linguagem de programação que estamos utilizando e fazer com que ela gerencie estes campos, para nós.

### Instalação da biblioteca phinx

- Na pasta do projeto, rodar o comando: `composer requiser robmorgan/phinx:0.9.2`
- Documentação dA biblioteca: https://phinx.org  

### Configurar as credencias do banco de dados

- Crie uma pasta chamada *config*(ou nomeie do jeito que quiser)  
-> Essa pasta terá toda informação que seja global, como as credenciais por exemplo.  
- Dentro dessa pasta, crie um arquivo chamado *db.php*(ou nomeie do jeito que quiser)  
-> Neste arquivo serão definidos as credenciais do banco de dados.
__O arquivo *db.php* ficará assim:__  
```php
return [
    'development' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'nome-da-sua-base-de-dados',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci'
    ]
];
```
__Esse código define o que é necessário para realizar a conexão e criação do banco de dados.__

### Gerando uma Migração

- Definir qual é a tabela do banco de dados que ela controlará e quais são as credenciais do banco para fazermos a conexão.
- Criar um arquivo chamado *phinx.php* na raiz da aplicação.
-> O arquivo *phinx.php* ficará assim:
```php
require __DIR__ . '/vendor/autoload.php';

$db = include __DIR__ . '/config/db.php';

// list --> modelo de list so funcionará a partir do PHP 7 ( variáveis podem possuir nome diferente)
list(
    'driver' => $adapter,
    'host' => $host,
    'database' => $name,
    'username' => $user,
    'password' => $pass,
    'charset' => $charset,
    'collation' => $collation
    ) = $db['development'];

return[
    'paths' => [
        'migrations' => [
            __DIR__ . '/db/migrations'
        ],
        'seeds' => [
            __DIR__ . '/db/seeds'   
        ]
    ],
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_database' => 'development',
        'development' => [
             'adapter' => $adapter,
             'host' => $host,
             'name' => $name,
             'user' => $user,
             'pass' => $pass,
             'charset' => $charset,
             'collation' => $collation
        ]
    ]
];
```  
- O Composer, ao instalar a biblioteca, cria uma pasta chamada vendor, que fica na pasta raiz do projeto. Dentro desta pasta, existe uma outra pasta chamada bin, onde ficam os arquivos executáveis das bibliotecas, caso existam.  
- O comando `vendor/bin/phinx` retornará uma lista de comandos disponíveis.  
- Para testar se a configuração está funcionando, será criada uma nova migração. Use o comando `vendor/bin/phinx create nome-da-sua-tabela`  
- A classe criada terá o mesmo nome que foi definido no comando do phinx.  

### Migrando primeira tabela

- Entre classe que foi criada anteriormente pelo comando `vendor/bin/phinx create nome-da-sua-classe`  e insira o comando:
```php
use Phinx\Migration\AbstractMigration;
class CreateCategoryCosts extends AbstractMigration
{
    public function up()
    {

    }
    public function down()
    {

    }
}
```
__OBS: -> O método up é responsável por criar as tabelas ou colunas no banco de dados. Ele aplicará todos os comandos, que adicionarmos ao método, no banco de dados.
-> O método down serve para desfazer o que o comando up fez, ou seja, ele remove todos os campos que foram adicionados, pela função acima.__

# Criando a tabela de centro de custos

-  A classe criada pelo phinx é estendida da classe AbstractMigration. É nesta classe que se encontram todos os métodos que serão utilizados. A classe ficará assim:
```php
use Phinx\Migration\AbstractMigration;
class CreateCategoryCosts extends AbstractMigration
{
    public function up()
    {
        $this->table('category_costs')
            ->addColumn('name', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }
    public function down()
    {
        $this->dropTable('category_costs');
    }
}
```  
- Agora, podemos rodar o comando que executa os métodos up, de todas as migrations criadas. Ou, podemos executar, individualmente. Rode o comando principal, uma vez que temos, apenas, uma migration criada, até agora. Rode o comando `vendor/bin/phinx.bat migrate`
