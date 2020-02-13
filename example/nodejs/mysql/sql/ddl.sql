--
-- Create table: larare
--
CREATE TABLE larare
(
    akronym CHAR(3),
    avdelning CHAR(4),
    fornamn VARCHAR(20),
    efternamn VARCHAR(20),
    kon CHAR(1),
    lon INT,
    fodd DATE,
    kompetens INT DEFAULT 1 NOT NULL,

    PRIMARY KEY (akronym) 
)
ENGINE INNODB
CHARSET utf8
COLLATE utf8_swedish_ci
;


--
-- Add teacher staff 
--
DELETE FROM larare;

INSERT INTO larare 
    (akronym, avdelning, fornamn, efternamn, kon, lon, fodd)
VALUES ('sna', 'DIPT', 'Severus', 'Snape', 'M', 40000, '1951-05-01');

INSERT INTO larare
    (akronym, avdelning, fornamn, efternamn, kon, lon, fodd)
VALUES ('dum', 'ADM', 'Albus', 'Dumbledore', 'M', 80000, '1941-04-01');

INSERT INTO larare
    (akronym, avdelning, fornamn, efternamn, kon, lon, fodd)
VALUES ('min', 'DIDD', 'Minerva', 'McGonagall', 'K', 40000, '1955-05-05');

INSERT INTO larare
    (akronym, avdelning, fornamn, efternamn, kon, lon, fodd)
VALUES
    ('hag', 'ADM', 'Hagrid', 'Rubeus', 'M', 25000, '1956-05-06'),
    ('fil', 'ADM', 'Argus', 'Filch', 'M', 25000, '1946-04-06'),
    ('hoc', 'DIDD', 'Madam', 'Hooch', 'K', 35000, '1948-04-08')
;

INSERT INTO larare
    (akronym, avdelning, fornamn, efternamn, kon, fodd)
VALUES
    ('gyl', 'DIPT', 'Gyllenroy', 'Lockman', 'M', '1952-05-02'),
    ('ala', 'DIPT', 'Alastor', 'Moody', 'M', '1943-04-03')
;

UPDATE larare
    SET lon = 30000
    WHERE
        lon IS NULL
;
