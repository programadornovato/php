CREATE TABLE usuario ( 
    id INT(5) NOT NULL AUTO_INCREMENT , 
    user VARCHAR(100) NOT NULL DEFAULT '' , 
    pass VARCHAR(255) NOT NULL DEFAULT '' , 
    PRIMARY KEY (id) 
);
INSERT INTO usuario (id, user, pass) VALUES (NULL, 'admin', '123456');