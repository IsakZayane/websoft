--
-- Create the tables
--
DROP TABLE IF EXISTS tech;
-- CREATE TABLE tech (
--     label CHAR(10) PRIMARY KEY,
--     type VARCHAR(20)
-- );

CREATE TABLE tech (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    label CHAR(10),
    type VARCHAR(20)
);
