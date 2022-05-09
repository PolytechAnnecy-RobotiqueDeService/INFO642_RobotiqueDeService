CREATE TABLE Documents
(
	id INT PRIMARY KEY NOT NULL,
	titre VARCHAR(100),
	date_rendu VARCHAR(100),
	type_doc VARCHAR(100),
	lien VARCHAR(100)
)

INSERT INTO Documents (titre, date_rendu, type_doc, lien)
VALUES ('1', 'APP_Robot_Seance_1', '09/02/22', 'CR', 'lien')
VALUES ('2', 'APP_Robot_Seance_2', '02/03/22', 'CR', 'lien')
VALUES ('3', 'APP_Robot_Seance_3', '16/03/22', 'CR', 'lien')
VALUES ('4', 'APP_Robot_Seance_4', '29/03/22', 'CR', 'lien')
VALUES ('5', 'APP_Robot_Seance_5', '13/04/22', 'CR', 'lien')
VALUES ('6', 'APP_Robot_Seance_6', '26/04/22', 'CR', 'lien')
VALUES ('7', 'APP_Robot_Seance_7', '04/05/22', 'CR', 'lien')