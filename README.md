## Como executar

### Adicione um atalho ao comando de execução do container

```bash
$ echo 'alias sail="./vendor/bin/sail"' >> ~/.zshrc # ou .bashrc, caso esteja usando o bash padrão
$ source ~/.zshrc
```

Configure o .env com as informações de banco de dados, APP KEY e nome do serviço (de acordo com o que está no arquivo <b>compose.yaml</b>).

Caso não tenha uma APP KEY, use o comando abaixo para gerar uma:

```bash
$ sail artisan key:generate
```

### Instalando os pacotes no projeto via Docker

```bash
$ docker run --rm \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs

$ sail up -d

$ sail npm install
```

### Executando as migrations

```bash
$ sail artisan migrate
```

### iniciando o ambiente de desenvolvimento

```bash
$ sail npm run dev
```