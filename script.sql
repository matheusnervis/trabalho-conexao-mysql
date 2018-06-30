CREATE DATABASE biblioteca;
use biblioteca;
CREATE TABLE IF NOT EXISTS 'livros' (
   'id_livro' int(11) NOT NULL AUTO_INCREMENT,
   'cod_livro' int(11) NOT NULL,
   'nome_livro' varchar(150) NOT NULL,
   'desc_livro' varchar(150) NOT NULL,
   PRIMARY KEY ('id_livro')
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;