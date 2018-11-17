CREATE TABLE cliente (
    idcliente    INTEGER NOT NULL,
    email        VARCHAR2(100) NOT NULL,
    cpf          INTEGER NOT NULL,
    nome         VARCHAR2(50) NOT NULL,
    cnh          CHAR(1) NOT NULL,
    telefone     VARCHAR2(15) NOT NULL,
    idendereco   INTEGER NOT NULL
);

ALTER TABLE cliente ADD CONSTRAINT cliente_pk PRIMARY KEY ( idcliente );

ALTER TABLE cliente ADD CONSTRAINT cliente__un UNIQUE ( email,
                                                        cpf );

CREATE TABLE contrato (
    idcontrato      INTEGER NOT NULL,
    idcliente       INTEGER NOT NULL,
    idplano         INTEGER NOT NULL,
    idveiculo       INTEGER NOT NULL,
    data_validade   DATE NOT NULL
);

ALTER TABLE contrato ADD CONSTRAINT contrato_pk PRIMARY KEY ( idcontrato );

CREATE TABLE endereco (
    idendereco   INTEGER NOT NULL,
    numero       INTEGER NOT NULL,
    rua          VARCHAR2(50) NOT NULL,
    bairro       VARCHAR2(30) NOT NULL,
    cidade       VARCHAR2(30) NOT NULL,
    estado       VARCHAR2(30) NOT NULL,
    pais         VARCHAR2(20) NOT NULL
);

ALTER TABLE endereco ADD CONSTRAINT endereco_pk PRIMARY KEY ( idendereco );

CREATE TABLE plano (
    idplano        INTEGER NOT NULL,
    guincho        CHAR(1) NOT NULL,
    carroreserva   CHAR(1) NOT NULL,
    sinistro       CHAR(1) NOT NULL,
    locacao        VARCHAR2(20) NOT NULL
);

ALTER TABLE plano add constraint plano_cc_guincho
check(y);

ALTER TABLE plano ADD CONSTRAINT plano_pk PRIMARY KEY ( idplano );

CREATE TABLE veiculo (
    idveiculo        INTEGER NOT NULL,
    placa            VARCHAR2(15) NOT NULL,
    fabricante       VARCHAR2(50) NOT NULL,
    ano              DATE NOT NULL,
    modelo           VARCHAR2(50) NOT NULL,
    cor              VARCHAR2(20) NOT NULL,
    radio            CHAR(1) NOT NULL,
    arcondicionado   CHAR(1) NOT NULL,
    vidroeletrico    CHAR(1) NOT NULL
);

ALTER TABLE veiculo ADD CONSTRAINT veiculo_pk PRIMARY KEY ( idveiculo );

ALTER TABLE veiculo ADD CONSTRAINT veiculo__un UNIQUE ( placa );

ALTER TABLE cliente
    ADD CONSTRAINT cliente_endereco_fk FOREIGN KEY ( idendereco )
        REFERENCES endereco ( idendereco );

ALTER TABLE contrato
    ADD CONSTRAINT contrato_clientefisico_fk FOREIGN KEY ( idcliente )
        REFERENCES cliente ( idcliente );

ALTER TABLE contrato
    ADD CONSTRAINT contrato_plano_fk FOREIGN KEY ( idplano )
        REFERENCES plano ( idplano );

ALTER TABLE contrato
    ADD CONSTRAINT contrato_veiculo_fk FOREIGN KEY ( idveiculo )
        REFERENCES veiculo ( idveiculo );