CREATE DATABASE carpooling_db;

USE carpooling_db;

CREATE TABLE autisti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    cognome VARCHAR(255),
    numero_patente VARCHAR(20),
    scadenza_patente DATE,
    automobile VARCHAR(255),
    recapito_telefonico VARCHAR(20),
    email VARCHAR(255),
    fotografia VARCHAR(255)
);

CREATE TABLE viaggi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    autista_id INT,
    città_partenza VARCHAR(255),
    città_destinazione VARCHAR(255),
    data_ora_partenza DATETIME,
    contributo_economico DECIMAL(10, 2),
    tempi_percorrenza_stimati VARCHAR(255),
    prenotazioni_chiuse BOOLEAN DEFAULT 0,
    FOREIGN KEY (autista_id) REFERENCES autisti(id)
);

CREATE TABLE passeggeri (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    cognome VARCHAR(255),
    documento_identità VARCHAR(20),
    recapito_telefonico VARCHAR(20),
    email VARCHAR(255)
);

CREATE TABLE prenotazioni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    viaggio_id INT,
    passeggero_id INT,
    accettata BOOLEAN DEFAULT 0,
    FOREIGN KEY (viaggio_id) REFERENCES viaggi(id),
    FOREIGN KEY (passeggero_id) REFERENCES passeggeri(id)
);

CREATE TABLE feedback_autisti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    autista_id INT,
    passeggero_id INT,
    voto INT,
    commento TEXT,
    FOREIGN KEY (autista_id) REFERENCES autisti(id),
    FOREIGN KEY (passeggero_id) REFERENCES passeggeri(id)
);

CREATE TABLE feedback_passeggeri (
    id INT AUTO_INCREMENT PRIMARY KEY,
    autista_id INT,
    passeggero_id INT,
    voto INT,
    commento TEXT,
    FOREIGN KEY (autista_id) REFERENCES autisti(id),
    FOREIGN KEY (passeggero_id) REFERENCES passeggeri(id)
);
