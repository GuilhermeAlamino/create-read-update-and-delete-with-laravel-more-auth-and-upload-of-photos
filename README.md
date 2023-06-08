Caminhe até a sua pasta "htdocs" se estiver usando o *xampp* se não, pode ir até a pasta do seu *Ambiente de desenvolvimento*.

Se quiser clonar via terminal pode abrir o seu *terminal*, e caminhar até a pasta do seu *Ambiente de desenvolvimento*.

```sh
*git clone https://github.com/GuilhermeAlamino/ZrSystem.git* 
```

Agora abre seu editor, vá até a pasta do seu projeto, e atualize as variáveis de ambiente do arquivo (*.env*) *(Obs: pode seguir as *Configurações* da maneira que está sendo feita aqui :)*)


```sh
Não esqueça de criar o seu Banco de dados, com o nome que vai ficar na variavel de ambiente DB_DATABASE; 
```

```dosini
APP_NAME="Laravel"
APP_URL=http://localhost:8080

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=crud_laravel
DB_USERNAME=root
DB_PASSWORD=
```

Certifique se que tenha composer instalado, se não tiver baixe, pode executar no terminal o comando para verificar -> *composer -v*.
```sh
https://getcomposer.org/Composer-Setup.exe
```

Agora vai precisar usar comandos em seu *terminal* que ele pode ser de sua preferencia, caminhe até dentro da pasta *do seu projeto*, após isso rode o comando no *terminal*, *Rode o comando para instalar as depêndecias no seu *terminal*.
```sh
*Composer install*
```

Rode o comando para Gerar a key do projeto Laravel ainda no *terminal*.
```sh
php artisan key:generate
```

Execute a migrate para carregar a Estrutura do Banco de dados.
```sh
php artisan migrate
```

Execute o seed para gerar o acesso admin ao dashboard.
```sh
php artisan db:seed
```

Execute o projeto com o seguinte comando.
```sh
php artisan serve
```

Agora é só acessar a url.
[http://127.0.0.1:8000/](http://127.0.0.1:8000/)
