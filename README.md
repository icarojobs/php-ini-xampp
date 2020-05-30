# php-ini-xampp
The best settings to work with XAMPP, opcache and XDebug on Windows 10

(PARA INICIANTES) INSTALANDO O PHP 7.3 WINDOWS 64 bits:
 - https://www.apachefriends.org/xampp-files/7.3.18/xampp-windows-x64-7.3.18-0-VC15-installer.exe
   - NNF = next, next, finish
   - Aponte o PATH do sistema para o diretório do php.exe
   

(AVANÇADO)INSTALANDO O PHP 7.3 WINDOWS 64bits:
 - Instale o Visual C++ reds. 2015
	https://www.microsoft.com/en-US/download/details.aspx?id=48145
 - Instale o PHP7.3
	https://windows.php.net/downloads/releases/php-7.3.18-Win32-VC15-x64.zip
	OBS.: Esse é o VC15 x64 Thread Safe, que permite trabalhar com multithreads de forma segura.
	

CONFIGURAÇÕES (AVANÇADO):	
    
	- Descompacte o arquivo em php_envs/php73	
	
	- Aponte o PATH do sistema para o diretório do php.exe
    
	- Após extrair, copie o arquivo php.ini-development para php.ini
	  - alterar memory_limit=2048M
	  - alterar post_max_size=40M
	  - alterar upload_max_filesize=40M
      - descomentar as extensões:
	     extension=curl, fileinfo, gd2, gettext, intl, mbstring, mysqli, openssl, pdo_mysql, pdo_sqlite
	  - descomentar session.save_path = "/tmp" e alterar o path para "C:\Windows\temp"
      - alterar error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT	
      - descomentar extension_dir = "ext"	  
	  - Na seção [Date] altera date.timezone = America/Sao_Paulo
	  - (opcional) Ative o opcache
	  - (opcional) Ative o xdebug
	  - (recomendado) Sempre trabalhe com vhosts C:\xampp\apache\conf\extra\httpd-vhosts.conf :
		
		
		<VirtualHost *:80>
			DocumentRoot "C:/xampp/htdocs/php-ini-xampp/public"
			ServerName phpinixampp.mob
		</VirtualHost>
		
		
		alterar em C:\Windows\System32\drivers\etc\hosts :
		127.0.0.1 phpinixampp.mob
	  
	  
	  arquivo php.ini exemplo: https://raw.githubusercontent.com/icarojobs/php-ini-xampp/master/conf/php.ini


INSTALAÇÃO DO COMPOSER:
 - https://getcomposer.org/Composer-Setup.exe
 - Basta dar next até onde aponta o caminho do php.exe, selecione o arquivo php.exe e continue a instalação.	  

INSTALAÇÃO DO PACOTE DE PERFORMANCE:
https://github.com/bvanhoekelen/performance