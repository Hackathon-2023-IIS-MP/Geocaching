-- Creazione della tabella Caccie
CREATE TABLE Caccie (
    CodiceCaccia CHAR(8) PRIMARY KEY,
    Nome VARCHAR(50),
    DataInizio DATETIME,
    DataFine DATETIME,
    MaxGiocatori SMALLINT,
    Tipologia CHAR(1)
);

-- Creazione della tabella Gruppi
CREATE TABLE Gruppi (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    PunteggioCumulativo INT,
    Modalita CHAR(1)
);

-- Creazione della tabella Giocatori
CREATE TABLE Giocatori (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(50),
    Cognome VARCHAR(50),
    Nikname VARCHAR(50),
    Email VARCHAR(50),
    Password_hash CHAR(255),
    Punteggio INT
);

-- Creazione della tabella Tappe
CREATE TABLE Tappe (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    RangeTappa INT,
    DataCreazione DATETIME,
    Domanda TEXT,
    Risposta1 TEXT,
    Risposta2 TEXT,
    Risposta3 TEXT,
    Risposta4 TEXT,
    Punteggio INT,
    Malus INT,
    Latitudine DECIMAL,
    Longitudine DECIMAL,
    RangeSblocco INT,
    RispostaCorretta TINYINT,
    CodiceCaccia CHAR(8),
    Creatore INT,
    FOREIGN KEY (CodiceCaccia) REFERENCES Caccie(CodiceCaccia),
    FOREIGN KEY (Creatore) REFERENCES Giocatori(ID)
);

-- Creazione della tabella Giocare
CREATE TABLE Giocare (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    DataInizioGame DATETIME,
    DataFineGame DATETIME,
    Punteggio INT,
    GiocatoreMigliore INT,
    UltimaTappaSbloccata INT,
    IDGruppo INT,
    IDCaccia CHAR(8),
    FOREIGN KEY (GiocatoreMigliore) REFERENCES Giocatori(ID),
    FOREIGN KEY (UltimaTappaSbloccata) REFERENCES Tappe(ID),
    FOREIGN KEY (IDGruppo) REFERENCES Gruppi(ID),
    FOREIGN KEY (IDCaccia) REFERENCES Caccie(CodiceCaccia)
);

-- Creazione della tabella Collegare
CREATE TABLE Collegare (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    IDTappaPrec INT,
    IDTappaSucc INT,
    FOREIGN KEY (IDTappaPrec) REFERENCES Tappe(ID),
    FOREIGN KEY (IDTappaSucc) REFERENCES Tappe(ID)
);

-- Creazione della tabella Sbloccare
CREATE TABLE Sbloccare (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    DataSblocco DATETIME,
    IDGiocatore INT,
    IDTappa INT,
    CodicePartita CHAR(8),
    FOREIGN KEY (IDGiocatore) REFERENCES Giocatori(ID),
    FOREIGN KEY (IDTappa) REFERENCES Tappe(ID),
    FOREIGN KEY (CodicePartita) REFERENCES Caccie(CodiceCaccia)
);

-- Creazione della tabella Appartenere
CREATE TABLE Appartenere (
    IDGiocatore INT,
    IDGruppo INT,
    PRIMARY KEY (IDGiocatore, IDGruppo),
    FOREIGN KEY (IDGiocatore) REFERENCES Giocatori(ID),
    FOREIGN KEY (IDGruppo) REFERENCES Gruppi(ID)
);
