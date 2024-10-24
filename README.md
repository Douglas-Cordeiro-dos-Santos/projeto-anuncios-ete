Essa aplicação está sendo criada para veicular anúncios na escola, em diversos dispositivos espalhados por ela. 

Para funcionamento, estams utilizando o XAMMP, nele o Apache e o MySql.

Segue códigos para criação de banco de dados para testes. Por padrao será criado um usuário com login e senha admin:

##############################################################################
CREATE DATABASE escola;

USE escola;

CREATE TABLE usuarios(
	id_user INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20) NOT NULL,
    senha VARCHAR(20) NOT NULL
);

CREATE TABLE anuncios(
	pub_id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao VARCHAR(999) NOT NULL,
	data_pub DATE NOT NULL,
    tipo VARCHAR(20) NOT NULL,
    user_id INT,
    FOREIGN KEY(user_id) REFERENCES usuarios(id_user)
);

INSERT INTO usuarios(nome, senha) VALUES ("admin","admin");
##############################################################################

Para funcionar baixando do github, execute o XAMMP, habilite o Apache e MySql, depois execute o código acima no MySql para criar o banco de dados (apenas se você não criou anteriormente), depois abra a pasta htdocs localizada na pasta raiz do XAMMP e cole a pasta do projeto. Agora pode executar pelo localhost que todas as funções estaram funcionando corretamente.