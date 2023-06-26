CREATE TABLE tb_usuarios(
    id_usuario          INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres            VARCHAR(250) NOT NULL,  
    apellidos          VARCHAR(250) NOT NULL,
    ci                 VARCHAR(250) NOT NULL,
    celular           VARCHAR(15) NULL,
    cargo               VARCHAR(250) NOT NULL,
    email               VARCHAR(100) NOT NULL,
    password            TEXT  NOT NULL,
    fyh_creacion        DATETIME  NULL,
    fyh_actualizacion   DATETIME NULL,
    fyh_eliminacion     DATETIME NULL,
    estado              VARCHAR(11) NOT NULL
);

CREATE TABLE tb_libros(
    id_libro           INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    codigo             VARCHAR(250) NOT NULL,  
    titulo             VARCHAR(250) NOT NULL,
    autor              VARCHAR(250)  NULL,
    area               VARCHAR(255) NULL,
    campo              VARCHAR(250)  NULL,
    ciudad             VARCHAR(250)  NULL,
    editorial          VARCHAR(250)   NULL,
    ano_publicacion    VARCHAR(250)  NULL,
    nro_edicion        VARCHAR(250) NULL,
    paginas            VARCHAR(10) NOT NULL,
    formato            VARCHAR(250) NOT NULL,
    ejemplares         VARCHAR(10) NOT NULL,
    observaciones      TEXT  NULL,
     codigo_barra      VARCHAR(250)  NULL,

    fyh_creacion        DATETIME  NULL,
    fyh_actualizacion   DATETIME NULL,
    fyh_eliminacion     DATETIME NULL,
    estado              VARCHAR(11) NOT NULL

);




CREATE TABLE tb_areas(
    id_areas           INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    area             VARCHAR(250) NOT NULL,  
    
    fyh_creacion        DATETIME  NULL,
    fyh_actualizacion   DATETIME NULL,
    fyh_eliminacion     DATETIME NULL,
    estado              VARCHAR(11) NOT NULL

);


CREATE TABLE tb_campos(
    id_campo           INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    campo             VARCHAR(250) NOT NULL,  
    
    fyh_creacion        DATETIME  NULL,
    fyh_actualizacion   DATETIME NULL,
    fyh_eliminacion     DATETIME NULL,
    estado              VARCHAR(11) NOT NULL

);

CREATE TABLE tb_editoriales(
    id_editorial           INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    editorial             VARCHAR(250) NOT NULL,  
    
    fyh_creacion        DATETIME  NULL,
    fyh_actualizacion   DATETIME NULL,
    fyh_eliminacion     DATETIME NULL,
    estado              VARCHAR(11) NOT NULL

);