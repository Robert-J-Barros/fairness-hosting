
# Sistema Fairness Hosting



## 💻 Sobre o projeto

📲 


---

## 🚀 Como executar o projeto

Este projeto é divido em duas partes:
 1. [BackEnd]()  - [API]()
 2. [FrontEnd]() - [Web]()

💡 Tanto o Frontend precisam que o Backend esteja sendo executado para funcionar.

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [Node.js](https://nodejs.org/en/). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)


### Configurações local

#### 🧭 Rodando a aplicação web (Frontend)

Para rodar a API , você vai precisar adicionar as seguintes variáveis de ambiente no seu environment.development.ts , o modelo esta no arquivo environment.development.example.ts

`production` - Define se a aplicação esta rodando em produção

#### Exemplo : { production: false, ...outrosArgs }

`apiURL` - Url de acesso da sua api

#### Exemplo : { apiURL: "http://localhost:3000/api/v1", ...outrosArgs } 

#### Executando a aplicação

```bash

# Clone este repositório
$ git clone 

# Acesse a pasta do projeto no seu terminal/cmd
$ cd fairness-hosting-web

# Instale o framework angular
$ npm install -g @angular/cli

# Instale as dependências
$ npm install

# Execute a aplicação em modo de desenvolvimento
$ npm run dev

# A aplicação será aberta na porta:4000 - acesse http://localhost:4000

```


#### 🔒  Iniciar Testes

```bash
# No Terminal use os seguintes comandos

npm run test
```

#### ⚙ Build do Projeto


```bash
# No Terminal use os seguintes comandos

npm build

node dist/server.js
```

## 📝 Licença

Este projeto esta sobe a licença [MIT](./LICENSE).

---
