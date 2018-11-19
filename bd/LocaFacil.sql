

CREATE TABLE cliente (
    idcliente    INTEGER UNIQUE AUTO_INCREMENT NOT NULL PRIMARY KEY ,
    email        VARCHAR(100) NOT NULL UNIQUE,
    cpf          INTEGER NOT NULL,
    nome         VARCHAR(50) NOT NULL,
    cnh          CHAR(1) NOT NULL,
    telefone     VARCHAR(15) NOT NULL
);

CREATE TABLE contrato (
    idcontrato      INTEGER UNIQUE AUTO_INCREMENT NOT NULL PRIMARY KEY,
    idcliente       INTEGER NOT NULL,
    idveiculo       INTEGER NOT NULL,
    data_validade   DATE NOT NULL
);


CREATE TABLE veiculo (
    idveiculo        INTEGER UNIQUE AUTO_INCREMENT NOT NULL PRIMARY KEY,
    placa            VARCHAR(15) NOT NULL,
    fabricante       VARCHAR(50) NOT NULL,
    ano              DATE NOT NULL,
    modelo           VARCHAR(50) NOT NULL,
    cor              VARCHAR(20) NOT NULL,
    radio            CHAR(1) NOT NULL,
    arcondicionado   CHAR(1) NOT NULL,
    vidroeletrico    CHAR(1) NOT NULL
);

ALTER TABLE contrato
    ADD CONSTRAINT contrato_clientefisico_fk FOREIGN KEY ( idcliente )
        REFERENCES cliente ( idcliente );

ALTER TABLE contrato
    ADD CONSTRAINT contrato_veiculo_fk FOREIGN KEY ( idveiculo )
        REFERENCES veiculo ( idveiculo );