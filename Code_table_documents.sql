CREATE TABLE Documents
(
	id INT PRIMARY KEY NOT NULL,
	titre VARCHAR(100),
	date_rendu VARCHAR(100),
	type_doc VARCHAR(100),
	lien VARCHAR(100)
)

INSERT INTO Documents (titre, date_rendu, type_doc, lien)
VALUES ('titre', 'date_rendu', 'type_doc', 'lien')
