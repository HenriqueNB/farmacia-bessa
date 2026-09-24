# Farmácia Parecetaloka - Calculadora de Pedidos

Sistema simples para cálculo de pedidos com descontos baseados em faixa etária e cartão fidelidade.

## Funcionalidades

- Cadastro do nome do cliente
- Valor total do pedido
- Descontos por faixa etária:
  - 51 a 70 anos: 5% de desconto
  - Maior de 70 anos: 7% de desconto
- Desconto de 5% para pagamento com Cartão Fidelidade
- Cálculo automático do valor final

## Tecnologias

- HTML5
- CSS3 (customizado)
- PHP

## Estrutura do Projeto

```
farmacia-bessa/
├── index.html      # Formulário de entrada
├── calculo.php     # Processamento e resultado
├── style.css       # Estilos customizados
└── README.md       # Este arquivo
```

## Como Executar

### Requisitos

- Servidor web com suporte a PHP (Apache, Nginx, etc.)
- PHP 7.4+

### Instalação

1. Clone o repositório:
```bash
git clone <url-do-repositorio>
cd farmacia-bessa
```

2. Coloque os arquivos no diretório do seu servidor web (ex: `/var/www/html/` no Apache)

3. Acesse no navegador:
```
http://localhost/farmacia-bessa/index.html
```

Ou use o servidor embutido do PHP para desenvolvimento:
```bash
php -S localhost:8000
```
Acesse: `http://localhost:8000`

## Regras de Negócio

| Condição | Desconto |
|----------|----------|
| 51 a 70 anos | 5% |
| Maior de 70 anos | 7% |
| Cartão Fidelidade | 5% |
| **Máximo combinado** | **12%** |

## Licença

Projeto educacional - Uso livre.