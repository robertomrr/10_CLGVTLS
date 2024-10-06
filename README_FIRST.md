# Objetivos desta aplicação

1º) Servir de referência para instalação do Livewire
2º) Servir de referência para criação de uma aplicação Livewire
3º) Exemplificar rotas nomeadas e não nomeadas

## Links

    https://www.youtube.com/watch?v=e83fM_0mGa8&t=133s
    https://livewire.laravel.com/docs/quickstart
    https://github.com/lucascudo/laravel-pt-BR-localization

    https://www.youtube.com/@yelocode/featured
    https://github.com/yelocode/livewire3-datatable/tree/main

- **[Composer version 2.7.4 2024-04-22 21:17:03"](https://getcomposer.org)**
- **[Laravel 11](https://laravel.com)**
- **[git version 2.46.2.windows.1](https://github.com//)**
- **[Vite](https://vitejs.dev//)**
- **[Tailwind](https://tailwindcss.com/docs/installation/)**

## Sistema de nomeação

    Aplicação =>  10_CLGVTLS

    Por se tratar de uma série de aplicações a serem utilizadas como exemplo, o sistema de nomeação segue o seguinte critério:
        01  <=> Numero sequencial das Aplicações básicas
        _   <=> Separador
        C   <=> Composer
        L   <=> Laravel
        G   <=> Git
        V   <=> Vite
        T   <=> Tailwind
        L   <=> Livewire
        S   <=> SweetAlert
    Estrutura

    <NomeObjeto>Model
    
    <NomeObjeto>View
    <NomeObjeto>ViewComponent
    
    <NomeObjeto>Controller

## Criação da aplicação Laravel

    Pré-Requisitos

        Composer ( Ferramenta de gerenciamento do php, é Pré-Requisito para o PHP.)
            Path do sistema deve conter '%APPDATA%'\Composer\Vendor\bin'

        PHP versão 7.3 ou superior. ( Deve estar acessivel atraves do comando php.)
        Extensões ativadas no php.ini
            OpenSSL PHP Extension
            PDO PHP Extension
            Mbstring PHP Extension
            Tokenizer PHP Extension
            XML PHP Extension
            Ctype PHP Extension
            JSON PHP Extension

    Versões instaladas 05/10/2024

        > composer -V
            Composer version 2.7.4 2024-04-22 21:17:03
            PHP version 8.2.3 (C:\php\php.exe)
            Run the "diagnose" command to get more detailed diagnostics output.
        > php -v
            PHP 8.2.3 (cli) (built: Feb 14 2023 09:55:52) (ZTS Visual C++ 2019 x64)
            Copyright (c) The PHP Group
            Zend Engine v4.2.3, Copyright (c) Zend Technologies
        > php artisan -V 
            Laravel Framework 11.26.0
        > git -v
            git version 2.46.2.windows.1

    Comandos

    > composer create-project --prefer-dist laravel/laravel 10_CLGVTLS
    > cd 10_CLGVTLS
    > git init
    > git add .
    > git commit -m "First Commit"

## Publicar GitHub

    > git remote add origin https://github.com/robertomrr/10_CLGVTLS.git
    > git branch -M main
    > git push -u origin main

## Ativação do Vite na Aplicação Laravel

    Criar branch Ativação do Vite

        > git branch Ativação-do-Vite
        > git checkout Ativação-do-Vite

    Ativar o Vite

        > npm install
        > git add .
        > git commit -m "npm install"

    Deletar branch Ativação do Vite

        > git checkout main
        > git merge Ativação-do-Vite
        > git branch -d Ativação-do-Vite

    Ativar Aplicação utilizando terminal CMD | Git Bash

        > CMD 
            > cd C:\laragon\www\10_CLGVTLS
            > npm run dev
            > php artisan serve
        > Browser
            > localhost:8000

    Sincronizar com o GitHub

        > git push origin main

## Ativar VSCode

    > code .

## Configuração do Idioma/Timezone

    Criar branch Configuração do Idioma e Timezone

        > git branch Configuração-Idioma-Timezone
        > git checkout Instalação-do-Livewire  <--VSCode faz checkout automáticamente no terminal é necessário alterar manualmente

        link
            https://github.com/lucascudo/laravel-pt-BR-localization

        > php artisan lang:publish
        > composer require lucascudo/laravel-pt-br-localization --dev
        > php artisan vendor:publish --tag=laravel-pt-br-localization
        Alterar .env
            ou
        Alterar \config\app.php para: (Linha 86 do arquivo )
            De > 'locale' => 'en',
            P/ > 'locale' => 'pt_BR'
        Alterar \config\app.php para: (Linha 73 do arquivo )
            De 'timezone' => 'UTC',
            P\ 'timezone' => 'America/Sao_Paulo',
        
        
        > git add .
        > git commit -m "Configuração do Idioma/Timezone" 
        > git checkout main
        > git merge Configuração-Idioma-Timezone
        > git branch -d Configuração-Idioma-Timezone
        > git push origin main

## Livewire

### Instalação do Livewire

    Criar branch Instalação do Livewire

        > git branch Instalação-Livewire-E-Criação-Componente
        > git checkout Instalação-Livewire-E-Criação-Componente  <--VSCode faz checkout automáticamente

#### 1. Instalar o pacote Livewire

    > composer require livewire/livewire
    
#### 2. Instalar os assets de frontend

    > php artisan livewire:publish

### Criação de um componente Livewire

    > php artisan make:livewire Ex_LivewireViewComponent

### Criação de uma view

    > php artisan make:view Ex_LivewireView

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <!-- Outros estilos -->
                @livewireStyles
            </head>
            <body>
                <!-- Seu conteúdo aqui -->
                @livewire('ExLivewireViewComponent')   <----Incluir o Livewire Component no layout Blade

                @livewireScripts
            </body>
            </html>

    Finalizar branch Instalação do Livewire
    
        > git add .
        > git commit -m "Instalação do Livewire & Criação de Componente"
        > git checkout main
        > git merge Instalação-Livewire-E-Criação-Componente
        > git branch -d Instalação-Livewire-E-Criação-Componente
        > git push origin main

## Criação de tag anotada para marcar a versão v1.0.0

    > git tag -a v1.0.0 -m "Primeira versão - Livewire instalado"

    Sincronizar com o GitHub:

    > git push origin v1.0.0

## Apontar banco de dados no arquivo .env ( De laravel P/ db_sll)

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=db_sll
        DB_USERNAME=root
        DB_PASSWORD=

## Instalação do Laravel Breeze

    Criar branch Instalação do Laravel Breeze
        > git branch Instalação-Laravel-Breeze
        > git checkout Instalação-Laravel-Breeze
 
    Instalar o pacote Breeze via Composer:
        > composer require laravel/breeze --dev

    Executar o comando para instalar o Breeze:
        > php artisan breeze:install

            C:\laragon\www\10_CLGVTLS>php artisan breeze:install

            Which Breeze stack would you like to install?
            Blade with Alpine ....................................................................................... blade
            Livewire (Volt Class API) with Alpine ................................................................ livewire
            Livewire (Volt Functional API) with Alpine ................................................ livewire-functional
            React with Inertia ...................................................................................... react
            Vue with Inertia .......................................................................................... vue
            API only .................................................................................................. api
            ❯ blade

            Would you like dark mode support? (yes/no) [no]
            ❯ yes

            Which testing framework do you prefer? [Pest]
            Pest ........................................................................................................ 0
            PHPUnit ..................................................................................................... 1
            ❯ 1

            INFO  Installing and building Node dependencies.


            added 122 packages, and audited 145 packages in 16s

            36 packages are looking for funding
            run `npm fund` for details

            found 0 vulnerabilities

            > build
            > vite build

                vite v5.4.8 building for production...
                transforming...
                ✓ 54 modules transformed.
                rendering chunks...
            computing gzip size...
            public/build/manifest.json             0.27 kB │ gzip:  0.15 kB
            public/build/assets/app-Bmlgr_5j.css  43.28 kB │ gzip:  7.74 kB
            public/build/assets/app-DI6-W-r-.js   79.43 kB │ gzip: 29.59 kB
            ✓ built in 987ms


            INFO  Breeze scaffolding installed successfully.


            C:\laragon\www\10_CLGVTLS>

    Execute as migrações para criar as tabelas de usuários e senhas no banco de dados:
        > php artisan migrate:fresh

    Instalar dependencias
        > npm install

    Descomentar database\seeders\DatabaseSeeder.php
        \App\Models\User::factory(10)->create();

    Popular tabela users
        > php artisan db:seed

    Ativar serviços
        > npm run dev
        > php artisan serve

    Finalizar branch Instalação do Laravel Breeze
        > git add .
            warning: in the working copy of 'README_FIRST.md', CRLF will be replaced by LF the next time Git touches it
            warning: in the working copy of 'package.json', CRLF will be replaced by LF the next time Git touches it
        > git commit -m "Instalação-Laravel-Breeze" 
        > git checkout main
        > git merge Instalação-Laravel-Breeze
        > git branch -d Instalação-Laravel-Breeze
        > git push origin main
