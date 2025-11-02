# SAEP da Bru
CONTEXTO
Sua namorada vai abrir uma loja de cosméticos do zero e você irá montar um sistema de gestão para ela. O sistema deve ser capaz de medir lucros e prejuizos dos produtos com base no setor de cada produto (maquiagem, cabelo, higiene) e mandar aviso caso o estoque do produto esteja acabando

## Lista de requisitos
O sistema deve:
- Cadastrar e armazenar produtos com preço de custo
- Vender os produtos (para ter lucro)
- Caso o preço de custo de um produto for maior do que as vendas = prejuízo 
- Mandar aviso quando faltar no estoque

## Modelagem Conceitual:
Entidade x Relacionamento
![[Pasted image 20251102122054.png]]

## Modelagem Lógica
Modelo lógico
![[Pasted image 20251102122605.png]]


# Modelagem Física
Código SQL
``` mysql
CREATE TABLE IF NOT EXISTS `produtos` (
	`id_produto` int AUTO_INCREMENT NOT NULL UNIQUE,
	`nome_produto` varchar(255) NOT NULL,
	`marca_produto` varchar(255) NOT NULL,
	`setor_produto` varchar(255) NOT NULL,
	`preco_custo` decimal(10,0) NOT NULL DEFAULT '0',
	`preco_venda` decimal(10,0) NOT NULL DEFAULT '0',
	`quantidade_minima` int NOT NULL DEFAULT '0',
	`quantidade_estoque` int NOT NULL DEFAULT '0',
	PRIMARY KEY (`id_produto`)
);

CREATE TABLE IF NOT EXISTS `vendas` (
	`id_venda` int AUTO_INCREMENT NOT NULL UNIQUE,
	`id_produto_vendido` int NOT NULL,
	`data_venda` datetime NOT NULL,
	`quantidade_vendida` int NOT NULL,
	PRIMARY KEY (`id_venda`)
);


ALTER TABLE `vendas` ADD CONSTRAINT `vendas_fk1` FOREIGN KEY (`id_produto_vendido`) REFERENCES `produtos`(`id_produto`);

```


# Projeto:
github:
https://github.com/FlipSkateHd/ghostCosmeticos

# Lista de Requisitos de Infra
XAMPP 8.2.12-0
Server:  Apache - 2.4.58
SGDB: PhpMyAdmin 5.2.1
DB: MariaDB - 10.4.32
Linguagem: Php 8.2.12
Windows 10 ou Ambientes baseados em Linux de kernel 5.x ou superior.
