CREATE VIEW vota.v_destacats AS
SELECT e.id,e.pregunta, e.data_inici, e.data_final, e.destacada, SUM(IF(r.valor=1,1,0)) AS SI, SUM(IF(r.valor=0,1,0)) AS NO
FROM enquesta e
LEFT JOIN resposta r
ON e.id=r.id_enquesta
GROUP BY e.id,e.pregunta,e.data_inici,e.data_final,e.destacada
HAVING e.destacada = 1;