## Configuracao do Apache do projeto

Lembrar de alterar o nome da pasta do projeto no caso ela foi 
criado com o nome portalv4, ou seja, se for necessario alterar
o nome do projeto para o nome da sua empresa, por exemplo,
piocoroSA entao voce devera altera o DocumentRoot e tambem
o Directory

Lembrar tambem de criar esse arquivo no caminho:
```
    /etc/apache2/sites-enabled/portal.conf
```

Em seguida voce devera executar:
```
    a2enmod http_proxy
    a2ensite portal.conf
    service apache2 restart
```

` ATENCAO JOVEM ESSA CONFIGURA SO E PARA SER FEITA SE FOR PRECISO!!!! `
 E caso voce ja tenha configurado e precisa refazer alguma 
configuracao nova voce precisa desabilitar o portal.conf
e habilitar novamente:
    
    a2dissite portal.conf
    a2ensite portal.conf
    service apache2 restart

```
<VirtualHost *:80>
  ServerName projetoclasses.dev
  DocumentRoot /var/www/portalv4/public

  <Directory /var/www/portalv4/public>
    <IfModule mod_rewrite.c>
      Options -MultiViews
      RewriteEngine On
      RewriteCond %{REQUEST_FILENAME} !-f
      RewriteRule ^ index.php [L]
    </IfModule>
  </Directory>
  
  <Proxy *>
  	  Order deny,allow
      Allow from all
  </Proxy>

  ProxyPass /layout http://localhost/portalv4/public/vendor/
  ProxyPassReverse /layout http://localhost/portalv4/public/vendor/
</VirtualHost>
```

## Instalar o Phing

Para instalar o Phing globalmente voce deve executar:

```
composer global require phing/phing
```

## Configurando ALIAS do Phing para o Linux

Voce precisa criar o bash_profile para identificar o comando:

```
vi ~/.bashrc
```

Dentro do arquivo voce deve inserir a seguinte linha:

```
alias phing='php /root/.composer/vendor/phing/phing/bin/phing'
```

Agora execute o comando:

```
source ~/.bashrc
```
## Instalacao global do bower

Para instalar o bower globalmente voce deve executar o comando:

```
npm install -g bower
```

## Instalar o Gulp

Para instalar o Gulp globalmente voce deve executar o comando:

```
npm install -g Gulp
```