# 🚀 DataCore - Soluções em Tecnologia

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)

> Site institucional moderno e responsivo para empresa de tecnologia, desenvolvido com PHP puro e Bootstrap 5.

## 📋 Sobre o Projeto

O **DataCore** é um site institucional completo desenvolvido como parte de um mini-hackathon. O projeto apresenta uma empresa fictícia de soluções tecnológicas, com páginas informativas, formulário de contato e design moderno focado em azul.

### ✨ Características

- 🎨 **Design Moderno**: Interface limpa e profissional com gradientes azuis
- 📱 **Responsivo**: Layout totalmente adaptável para dispositivos móveis, tablets e desktop
- ⚡ **Rápido**: Estrutura leve e otimizada
- 🧩 **Modular**: Código organizado com componentes reutilizáveis
- 🎯 **SEO Friendly**: Estrutura semântica e boas práticas
- ♿ **Acessível**: Seguindo padrões de acessibilidade web

## 🛠️ Tecnologias Utilizadas

| Tecnologia | Descrição |
|------------|-----------|
| **PHP** | Backend e roteamento de páginas |
| **Bootstrap 5.3** | Framework CSS para design responsivo |
| **Bootstrap Icons** | Biblioteca de ícones vetoriais |
| **CSS3** | Estilização customizada com variáveis CSS |
| **HTML5** | Estrutura semântica moderna |

## 📁 Estrutura do Projeto

```
Mini-Hackaton/
│
├── public/                      # Pasta pública (raiz do servidor)
│   ├── index.php               # Controlador principal e roteador
│   └── assets/
│       ├── css/
│       │   └── style.css       # Estilos customizados
│       └── img/                # Imagens do projeto
│
└── views/                      # Camada de visualização
    ├── home.php                # Página inicial
    ├── servicos.php            # Página de serviços
    ├── sobre.php               # Página sobre a empresa
    ├── contato.php             # Página de contato
    └── components/             # Componentes reutilizáveis
        ├── header.php          # Barra de navegação
        ├── footer.php          # Rodapé
        └── 404.php             # Página de erro 404
```

## 🚀 Como Executar

### Pré-requisitos

- PHP 7.4 ou superior
- Servidor web (Apache, Nginx, ou similar)
- Laragon, XAMPP, WAMP ou outro ambiente de desenvolvimento local

### Instalação

1. **Clone o repositório** ou faça download do projeto:
```bash
git clone <url-do-repositorio>
cd Mini-Hackaton
```

2. **Configure seu servidor web** para apontar para a pasta `public/`:
   - No **Laragon**: Coloque o projeto em `C:\laragon\www\`
   - No **XAMPP**: Coloque o projeto em `C:\xampp\htdocs\`

3. **Acesse o projeto** no navegador:
```
http://localhost/Mini-Hackaton/public/
```

### 🌐 Navegação

- **Home**: `http://localhost/Mini-Hackaton/public/`
- **Serviços**: `http://localhost/Mini-Hackaton/public/?page=servicos`
- **Sobre**: `http://localhost/Mini-Hackaton/public/?page=sobre`
- **Contato**: `http://localhost/Mini-Hackaton/public/?page=contato`

## 📄 Páginas do Site

### 🏠 Home
Página inicial com hero section impactante e destaques dos principais benefícios:
- Velocidade
- Segurança
- Escalabilidade

### 💼 Serviços
Apresentação dos 6 serviços oferecidos pela empresa:
- Cloud Computing
- Big Data
- Inteligência Artificial
- Desenvolvimento Web
- Apps Mobile
- DevOps

### 👥 Sobre
Informações institucionais da empresa:
- Quem somos
- Nossa visão
- Valores
- Estatísticas (projetos, clientes, equipe)

### 📧 Contato
Formulário de contato completo com:
- Campos para nome, e-mail, telefone
- Seleção de assunto
- Área de mensagem
- Informações de contato (endereço, telefone, e-mail, horário)
- Links para redes sociais

### 🚫 404
Página de erro personalizada para rotas inexistentes com design amigável.

## 🎨 Paleta de Cores

```css
--primary-blue: #0066cc    /* Azul primário */
--dark-blue: #004080       /* Azul escuro */
--light-blue: #3399ff      /* Azul claro */
--accent-blue: #00aaff     /* Azul de destaque */
--bg-light: #f0f8ff        /* Fundo claro azulado */
```

## 🔧 Funcionalidades Técnicas

### Roteamento
O sistema utiliza um roteador simples baseado em query strings:
```php
$page = $_GET['page'] ?? 'home';
$file = "../views/{$page}.php";
```

### Componentes Modulares
- **Header**: Navbar fixa com navegação responsiva e marcação de página ativa
- **Footer**: Rodapé com links rápidos, newsletter e informações da empresa
- **404**: Página de erro customizada com navegação de retorno

### Design Responsivo
- Sistema de grid Bootstrap 12 colunas
- Breakpoints: Mobile First
- Navbar colapsável em dispositivos móveis
- Cards responsivos com efeitos hover

## 📱 Responsividade

O site é totalmente responsivo e testado em:
- ✅ Desktop (1920px+)
- ✅ Laptop (1366px - 1920px)
- ✅ Tablet (768px - 1024px)
- ✅ Mobile (320px - 767px)

## 🎯 Boas Práticas Implementadas

- ✅ Separação de responsabilidades (MVC simplificado)
- ✅ Código comentado e documentado
- ✅ Nomenclatura semântica
- ✅ Reutilização de componentes
- ✅ CSS organizado com variáveis
- ✅ Performance otimizada
- ✅ Validação de rotas
- ✅ Tratamento de erros (404)

## 👨‍💻 Desenvolvimento

### Estrutura de Código

O projeto segue uma arquitetura MVC simplificada:

- **Model**: (Não implementado - projeto estático)
- **View**: Arquivos PHP em `/views`
- **Controller**: `index.php` (roteador principal)

### Convenções

- Arquivos PHP em lowercase com `.php`
- Classes CSS em kebab-case
- Comentários em português
- Indentação: 4 espaços

## 📝 Licença

Este projeto foi desenvolvido para fins educacionais como parte de um mini-hackathon.

## 🤝 Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para:

1. Fazer fork do projeto
2. Criar uma branch para sua feature (`git checkout -b feature/MinhaFeature`)
3. Commit suas mudanças (`git commit -m 'Adiciona MinhaFeature'`)
4. Push para a branch (`git push origin feature/MinhaFeature`)
5. Abrir um Pull Request
