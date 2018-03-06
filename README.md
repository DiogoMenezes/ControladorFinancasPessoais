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
- Documentação da biblioteca: https://phinx.org  

### Configurar as credenciais do banco de dados

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

# Gerando uma Migração

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
- As colunas foram criadas na tabela `category_costs`

### Desfazendo migração

- Para desfazer a migração, rode o comando `vendor/bin/phinx rollback`
- Este comando executará o método down, da nossa migrations, excluindo a tabela que criamos.

# Criação de seed

- O conceito de seed está diretamente relacionado às migrações.
- Seeds, são estruturas que podemos criar, em nossa aplicação, a fim de criarmos conteúdos de teste. Este conceito consiste em semear dados no banco de dados.
- Seeds, são classes, assim como as migrations, que são capazes de gerar dados aleatórios. 
- Rode o comando `vendor/bin/phinx seed:create CategoryCostsSeeder`  para criar o arquivo.
__OBS: Lembrando que a seeder deve ser utilizada somente em ambiente de desenvolvimento. Se for preciso adicionar dados em ambiente de produção, deve ser criado uma migração.__
- Toda seeder irá estender da classe AbstractSeed e disponibilizará o método run.Insira o código abaixo no arquivo *CategoryCostsSeeder.php*:
```php
use Phinx\Seed\AbstractSeed;

class CategoryCostsSeeder extends AbstractSeed
{

    public function run()
    {
        $categoryCosts = $this->table('category_costs');

        $categoryCosts->insert([
            [
                'name' => 'Category 1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Category 2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ])->save();
    }
}
```
- Para executar a seed, basta rodar o comando `vendor/bin/phinx seed:run`
- Resumindo, o processo completo de criação e destruição do nosso ambiente é:
```php
vendor/bin/phinx migrate
vendor/bin/phinx seed:run
vendor/bin/phinx rollback 
vendor/bin/phinx migrate
vendor/bin/phinx seed:run
```
# Integrando Faker(biblioteca) com seeders

- Faker é uma biblioteca que nos proporciona dados de testes, de diversos tipos como: telefone, email, nome, data e etc.
- Instale a biblioteca Faker via composer pelo comando `composer require fzaninotto/faker:1.6.0 --dev`
- Um exemplo de implementação(basta substituir o arquivo seed criado):
```php
use Phinx\Seed\AbstractSeed;
class CategoryCostsSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');
        $categoryCosts = $this->table('category_costs');
        $data = [];
        foreach (range(1, 10) as $value) {
            $data[] = [
                'name' => $faker->name,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }
        $categoryCosts->insert($data)->save();
    }
}
```
-Rodando comando `vendor/bin/phinx seed:run`, a tabela *category_costs* será atualizada.

# Interface de container de serviços

- Container de Serviços é um serviço que será reaproveitado em toda aplicação.É uma instância que poderá ser utilizada, a qualquer momento, e ser integrada com outras funcionalidades também.
- Crie uma pasta chamada *src* na raíz da aplicação.
- Crie uma interface chamada *ServiceContainerInterface.php.* dentro da pasta *src* e insira o código abaixo:
```php
<?php
declare(strict_types = 1);
namespace SONFin;

interface ServiceContainerInterface
{
    public function add(string $name, $service);

    public function addLazy(string $name, callable $callable);

    public function get(string $name);

    public function has(string $name);
}
?>
```
- Criamos um método para adição que é o add, adição do formato Lazy, que se trata do addLazy ,um método get, para pegar o serviço e o método has, para verificar se existe um serviço com determinado nome.
- O comando `declare(strict_types=1)` faz uma checagem de tipo e seta para utilizar o modo “forte” de checagem de tipo.

# Implementando Container

- Será utilizado o container de serviços chamado __PIMPLE__. Trata-se de um container muito simples em que a implementação é baseada em array e tem suporte a injeção de dependência.
- O Pimple não trabalha com a PSR-11, por padrão, mas existe uma biblioteca que extende o Pimple e força que ele implemente esta PSR-11, para que estejamos de acordo com os padrões de desenvolvimento.
- Digite o comando `composer require xtreamwayz/pimple-container-interop` para instalar a biblioteca que faz esta implementação via PSR-11.
- Com a biblioteca instalada, será feita a integração do container de serviços. Crie um arquivo chamado `ServiceContainer.php` dentro da pasta *src* e insira o código abaixo:
```php
namespace SONFin;

use Xtreamwayz\Pimple\Container;

class ServiceContainer implements ServiceContainerInterface
{

    private $container;

    /**
     * ServiceContainer constructor.
     * @param $container
     */
    public function __construct()
    {
        $this->container = new Container();
    }

    public function add(string $name, $service)
    {
        $this->container[$name] = $service;
    }

    public function addLazy(string $name, callable $callable)
    {
        $this->container[$name] = $this->container->factory($callable);
    }

    public function get(string $name)
    {
        return $this->container->get($name);
    }

    public function has(string $name)
    {
        return $this->container->has($name);
    }
}
```
- O *ServiceContainer* implementa a interface *ServiceContainerInterface* e deve implementar os métodos que ela obriga. No construtor foi instanciado um container, que vem da biblioteca que instalamos anteriormente. Dentro dos métodos, será utilizado o container para implementar os dois métodos da __PSR-11__, que é get e has e, também, os métodos add e addLazy.

# Criação da classe Application 
- Será a classe responsável por centralizar outras de classes, para que não fique nada jogado na aplicação. Será a classe que centralizará tudo.
- Crie uma classe dentro da pasta *src*, chamada *Application.php*. A princípio, esta classe será uma instância do *ServiceContainerInterface* e, para fazer esta ligação, utilizaremos o conceito de Dependancy Injection, ou injeção de dependência, noqual injetamos uma dependencia na classe.
- O arquivo *Application.php* ficará assim:
```php
declare(strict_types = 1);
namespace SONFin;

class Application
{
    private $serviceContainer;

    /**
     * Application constructor.
     * @param $serviceContainer
     */
    public function __construct(ServiceContainerInterface $serviceContainer)
    {
        $this->serviceContainer = $serviceContainer;
    }

    public function service($name)
    {
        return $this->serviceContainer->get($name);
    }

    public function addService(string $name, $service)
    {
        if (is_callable($service)) {
            $this->serviceContainer->addLazy($name, $service);
        } else {
            $this->serviceContainer->add($name, $service);
        }
    }
}
```
- Além de ser feito a injeção de dependência no construtor, estamos adicionando dois métodos: service e addService. Estes métodos servem para que possamos gerenciar serviços através da classe Application. 

# Criando Plugins

- Se quisermos fazer alguma integração com a classe Application, adicionaremos um plugin a esta classe e, assim, não precisaremos fazer nenhuma alteração, muito grande, para executarmos a integração. Este plugin terá uma interface e um método para realizar alguns registros. A classe Application recebe o plugin, registra o que tiver que registrar e pronto.
- Crie uma pasta chamada *Plugins*, dentro da pasta *src*. Todos os plugins necessários serão adicionados nesta pasta e todos eles implementarão uma interface. Dentro da pasta *Plugins*, criem um uma interface chamada *PluginInterface.php* e insira o código abaixo:
```php
namespace SONFin\Plugins;
use SONFin\ServiceContainerInterface;
interface PluginInterface
{
    public function register(ServiceContainerInterface $container);
}
```
__OBS: Os plugins terão comunicação com nossa classe Application através do nosso container de serviços. Isso ocorre porque estamos injetando a interface ServiceContainerInterface no método register.__
- Adicionando método de instalação na classe Application:
```php
public function plugin(PluginInterface $plugin): void
{
    $plugin->register($this->serviceContainer);
}
```
- Adicionando este método, a classe Application auto-registrará os plugins.

# Integração com Aura.Router

- Biblioteca que trabalha com rotas amigáveis, fazendo com que o usuário não saiba quais arquivos está acessando.Permite a criação de rotas, em que definiremos o acesso aos controllers e, consequentemente, teremos o retorno das views para o usuário, com os conteúdos corretos, que vieram do Model.  
__OBS: O nosso projeto é feito baseado na arquitetura MVC(Model-View-Controller).  
-> Model: Responsável por gerenciar os dados da aplicação, incluindo adição, edição e remoção do banco de dados.  
-> View: Responsáveis, apenas, por mostrar informações na tela do usuário.  
-> Controller: Responsável por receber a requisição da View, buscar os dados no Model e retornar os dados para View.__  
- Para instalar a biblioteca , rode o comando `composer require aura/router:3.1.0`  
### Criando Primeiro Plugin  
- O primeiro plugin será o plugin de rotas. Dentro da pasta *src/Plugins*, crie uma classe chamada *RouterPlugins.php* e insira o código abaixo:
```php
namespace SONFin\Plugins;

use Aura\Router\RouterContainer;
use SONFin\ServiceContainerInterface;

class RoutePlugin implements PluginInterface
{

    public function register(ServiceContainerInterface $container)
    {
        $routerContainer = new RouterContainer();
        /* Registrar as rotas da aplicação */
        $map = $routerContainer->getMap();
        /* Tem a função de identificar a rota que está sendo acessada */
        $matcher = $routerContainer->getMatcher();
        /* Tem a funão de gerar links com base nas rotas registradas*/
        $generator = $routerContainer->getGenerator();

        $container->add('routing', $map);
        $container->add('routing.matcher', $matcher);
        $container->add('routing.generator', $generator);
    }
}
```  
- Observem que estamos implementando a interface PluginInterface, para implementar o método register, que passaremos um ServiceContainerInterface como injeção de dependência para o método.

Em seguida, no método register, instanciamos a variável $routerContainer com a classe RouterContainer da biblioteca Aura.

Desta forma, conseguimos atribuir à variável $map o método getMap. Atribuímos o método getMatcher para a variável $matcher, e o método getGenerator para variável $generator.

Depois de atribuírmos os métodos às variáveis, basta utilizarmos o método add, para adicionarmos os métodos ao nosso container de serviços. Notem que passamos um identificador como primeiro parâmetro, e, depois, passamos a variável com o método atribuído.

O método getMap tem a função de registrar as rotas da aplicação.

O método getMatcher tem a função de rastrear a rota acessada para ver se a mesma existe, caso exista, ele faz o relacionamento e o processamento.

O Método getGenerator serve para fazer um redirecionamento de rotas, com base nas rotas registradas.  

 # Configurando combinador de rotas  
 
 - Será utilizado uma biblioteca da Zend, que se chama __zend-diactoros__. Esta biblioteca trabalha com a PSR-7(uma das especificações de projeto utilizado na nossa aplicação). Com ela conseguimos enviar mensagem e resposta, no padrão PSR-7.  
 
 - Instale a biblioteca com o comando `composer require zendframework/zend-diactoros:1.3.10`  
 
 - Nosso arquivo *RouterPlugins.php* ficará assim:
 ```php
 declare(strict_types=1);

namespace SONFin\Plugins;


use Aura\Router\RouterContainer;
use Interop\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;
use SONFin\ServiceContainerInterface;
use Zend\Diactoros\ServerRequestFactory;

class RoutePlugin implements PluginInterface
{

    public function register(ServiceContainerInterface $container)
    {
        $routerContainer = new RouterContainer();
        /* Registrar as rotas da aplicação */
        $map = $routerContainer->getMap();
        /* Tem a função de identificar a rota que está sendo acessada */
        $matcher = $routerContainer->getMatcher();
        /* Tem a funão de gerar links com base nas rotas registradas*/
        $generator = $routerContainer->getGenerator();
        $request = $this->getRequest();

        $container->add('routing', $map);
        $container->add('routing.matcher', $matcher);
        $container->add('routing.generator', $generator);
        $container->add(RequestInterface::class, $request);

        $container->addLazy('route', function (ContainerInterface $container) {
            $matcher = $container->get('routing.matcher');
            $request = $container->get(RequestInterface::class);
            return $matcher->match($request);
        });

    }

    protected function getRequest(): RequestInterface
    {
        return ServerRequestFactory::fromGlobals(
            $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
        );
    }
}
 ```  
 
 # Criando Primeira Rota  
 
 - Criar uma pasta na raiz da aplicação chamada *public*. Essa pasta será o __Document Root(pasta pública)__ da aplicação.  
 - Criar um arquivo chamado *index.php* e será responsável por iniciar a aplicação. O arquivo ficará assim:
 ```php
 use SONFin\Application;
use SONFin\Plugins\RoutePlugin;
use SONFin\ServiceContainer;

require_once __DIR__ . '/../vendor/autoload.php';

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

$app->plugin(new RoutePlugin());

$app->get('/', function() {
    echo "Testando rota definida.";
});

$app->start();
 ```
 - No arquivo *Application.php*, insira o código:
 ```php
 public function get($path, $action, $name = null): Application{
    $routing = $this->service('routing');
    $routing->get($name, $path, $action);
    return $this;
}
public function start(){
    $route = $this->service('route');
    $callable = $route->handler;
    $callable();
}
 ```
 - No prompt de comando, e na raiz da pasta onde está a aplicação, rode o comando `php -S localhost:8000 -t public public/index.php` parar acessar a aplicação via servidor web embutido.  
 __OBS: Caso queira, podem ser definidas outras rotas, além da que foi criada anteriormente, bastando criar um outro `$app` no arquivo `index.php`.__ Um exemplo:
 ```php
 $app->get('/teste', function() {
    echo "Teste segunda rota";
});
 ```
