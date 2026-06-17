# 🎫 Passaporte.io

Sistema web para gerenciamento de eventos desenvolvido em Laravel.

## 📖 Sobre o Projeto

O Passaporte.io é uma plataforma que permite a criação e gerenciamento de eventos por organizadores, além da inscrição de participantes em eventos disponíveis.

O sistema foi desenvolvido como projeto acadêmico para a disciplina de Programação Web (PW), utilizando Laravel e seguindo conceitos de autenticação, autorização, banco de dados relacional e arquitetura MVC.

---

## 🚀 Funcionalidades

### 👤 Participantes
- Cadastro e autenticação de usuários
- Visualização de eventos disponíveis
- Inscrição em eventos
- Consulta das próprias inscrições
- Cancelamento de inscrições

### 🧑‍💼 Organizadores
- Cadastro e autenticação
- Criação de eventos
- Edição de eventos
- Exclusão de eventos
- Gerenciamento dos próprios eventos

### 🎟️ Sistema
- Controle de acesso por perfil (Participant e Organizer)
- Categorias de eventos
- Controle de capacidade de participantes
- Geração de ingressos (ticket code)
- Controle de inscrições duplicadas
- Relacionamentos entre usuários, eventos e categorias

---

## 🛠️ Tecnologias Utilizadas

- PHP 8+
- Laravel 12
- SQLite
- Blade Templates
- HTML5
- CSS3
- Git
- GitHub

---

## 📂 Estrutura do Projeto

```text
app/
├── Models
│   ├── User.php
│   ├── Event.php
│   └── Category.php

database/
├── migrations
├── seeders

resources/
├── views

routes/
└── web.php
```

---

## 🗄️ Banco de Dados

O sistema utiliza as seguintes entidades principais:

### Users
- id
- name
- email
- password
- role

### Categories
- id
- name

### Events
- id
- user_id
- category_id
- title
- description
- date_time
- location
- capacity
- banner_path

### Event_User
- id
- user_id
- event_id
- ticket_code
- status

---

## ⚙️ Instalação

Clone o repositório:

```bash
git clone URL_DO_REPOSITORIO
```

Acesse a pasta:

```bash
cd passaporteio
```

Instale as dependências:

```bash
composer install
```

Configure o arquivo .env:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

Execute as migrations:

```bash
php artisan migrate
```

Execute os seeders:

```bash
php artisan db:seed
```

Inicie o servidor:

```bash
php artisan serve
```

---

## 🎯 Objetivo Acadêmico

Este projeto foi desenvolvido com o objetivo de aplicar conceitos de:

- Desenvolvimento Web com Laravel
- MVC (Model-View-Controller)
- Banco de Dados Relacional
- Autenticação e Autorização
- CRUD
- Relacionamentos Eloquent
- Middleware
- Boas práticas de desenvolvimento

---

## 👨‍💻 Autor

Desenvolvido por **Renan Pereira Rezaghi** para a disciplina de Programação Web.
