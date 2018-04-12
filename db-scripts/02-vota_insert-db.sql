use vota;


INSERT INTO enquesta
(pregunta,data_inici,data_final,destacada)
VALUES
('Vols viatja al Marroc?',STR_TO_DATE('2018-03-20','%Y-%m-%d'),STR_TO_DATE('2019-02-10','%Y-%m-%d'),0);

INSERT INTO enquesta
(pregunta,data_inici,data_final,destacada)
VALUES
('Votaràs a les pròximes eleccions?',STR_TO_DATE('2018-03-21','%Y-%m-%d'),STR_TO_DATE('2018-10-01','%Y-%m-%d'),1);

INSERT INTO enquesta
(pregunta,data_inici,data_final,destacada)
VALUES
('Ets de tipus AAAA?',STR_TO_DATE('2018-03-21','%Y-%m-%d'),STR_TO_DATE('2018-10-01','%Y-%m-%d'),1);

INSERT INTO enquesta
(pregunta,data_inici,data_final,destacada)
VALUES
('Sols reciclar plàstic?',STR_TO_DATE('2018-03-21','%Y-%m-%d'),STR_TO_DATE('2018-10-01','%Y-%m-%d'),0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(1,1,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(2,1,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(3,1,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(4,1,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(5,1,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(6,1,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(7,1,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(8,1,0);

--

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(1,2,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(2,2,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(3,2,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(4,2,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(5,2,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(6,2,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(7,2,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(8,2,1);

--

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(1,3,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(2,3,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(3,3,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(4,3,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(5,3,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(6,3,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(7,3,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(8,3,0);

INSERT INTO enquesta
(pregunta,data_inici,data_final,destacada)
VALUES
('Ets del grup sanguini AB?',STR_TO_DATE('2018-03-24','%Y-%m-%d'),STR_TO_DATE('2020-10-01','%Y-%m-%d'),1);

INSERT INTO enquesta
(pregunta,data_inici,data_final,destacada)
VALUES
('Sols caminar 10 km al dia?',STR_TO_DATE('2017-09-25','%Y-%m-%d'),STR_TO_DATE('2020-10-01','%Y-%m-%d'),1);

INSERT INTO enquesta
(pregunta,data_inici,data_final,destacada)
VALUES
('T\'agrada rebre propaganda?',STR_TO_DATE('2018-01-26','%Y-%m-%d'),STR_TO_DATE('2020-10-01','%Y-%m-%d'),1);

INSERT INTO enquesta
(pregunta,data_inici,data_final,destacada)
VALUES
('Ets soci del Barça?',STR_TO_DATE('2018-02-10','%Y-%m-%d'),STR_TO_DATE('2020-10-01','%Y-%m-%d'),1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(1,4,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(2,4,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(3,4,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(4,4,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(5,4,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(6,4,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(7,4,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(8,4,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(1,5,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(2,5,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(3,5,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(4,5,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(5,5,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(6,5,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(7,5,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(8,5,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(1,6,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(2,6,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(3,6,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(4,6,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(5,6,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(6,6,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(7,6,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(8,6,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(1,7,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(2,7,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(3,7,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(4,7,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(5,7,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(6,7,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(7,7,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(8,7,0);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(1,8,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(2,8,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(3,8,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(4,8,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(5,8,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(6,8,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(7,8,1);

INSERT INTO resposta
(id_usuari,id_enquesta,valor)
VALUES
(8,8,1);