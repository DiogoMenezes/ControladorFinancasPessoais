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
- Salve o arquivo e voilà , php configurado !

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

