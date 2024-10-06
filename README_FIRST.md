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
        