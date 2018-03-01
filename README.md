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
- Após o ; coloque o caminho da pasta git. *Exemplo:`C:\Program Files\Git\bin;`*  

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
- Após o ; coloque o caminho da pasta php. *`Exemplo:C:\php;`*  

### Configuração PHP

- Dentro da pasta do php , existem dois arquivos (`php.ini-development` e `php.ini-production`) , que são duas configurações para propósitos diferentes.
Na nossa situação, usaremos o php.ini-development porque será para desenvolvimento.
- Renomeie o arquivo php.ini-development para php.ini
- Abra o php.ini para realizarmos a configuração do mesmo( Pode utilizar qualquer editor de texto para abrir o arquivo)(Dê um find (CTRL + L ou CTRL + F) para localizar rapidamente as palavras.)  
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
- Após o ; coloque o caminho da pasta composer. *Exemplo:`C:\ProgramData\ComposerSetup\bin;`*  

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
- Após o ; coloque o caminho da pasta mysql. *Exemplo:`C:\Program Files\MySQL\MySQL Server 5.7\bin;`*  

# Aplicação

### Iniciando com composer

- Criar uma pasta ( nomear do jeito que quiser)
- Comando: composer init ( irá criar o composer.json) OBS: Você também pode definir outras coisas como nome, email...  
  -> Seu arquivo `composer.json` ficará assim:
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
- Utilizaremos a PSR-4 (PSR são especificações de projeto) para autoload , já que a PSR-0 está depreciada
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
    "require": {}
}
```  
__OBS: Namespaces possibilitam o agrupamento de classes, interfaces, funções e constantes, visando evitar o conflito entre seus nomes. Melhor explicando, evita o uso repetitivo de includes, já que o namespace aponta para a pasta onde está o código fonte da aplicação.__  
- Crie a pasta que será apontada pelo namespace.    
- Execute o comando `composer autoload`(Não criará nada pois não existe nenhuma classe ainda, mas vai criar uma pasta chamada vendor, que é responsável por conter todas as dependências que serão utilizadas).  
