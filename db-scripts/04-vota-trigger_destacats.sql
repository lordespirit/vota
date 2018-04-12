/*

delimiter //
DROP TRIGGER IF EXISTS vota.trg_max_destacats_insert;
//
CREATE TRIGGER vota.trg_max_destacats_insert
AFTER INSERT ON enquesta
FOR EACH ROW 
BEGIN
	DECLARE v_comptador_destacats INT;
    DECLARE v_id_dest_antiga INT;

    SELECT COUNT(*) INTO v_comptador_destacats FROM vota.enquesta WHERE destacada = 1;
    
    IF v_comptador_destacats >= 7 THEN
	
		SELECT id INTO v_id_dest_antiga FROM vota.enquesta WHERE destacada=1 ORDER BY data_final asc LIMIT 1;
		
		UPDATE enquesta SET NEW.destacada = 0 WHERE id = v_id_dest_antiga;
		
    END IF;
END;
//

DROP TRIGGER IF EXISTS vota.trg_max_destacats_update;
//

CREATE TRIGGER vota.trg_max_destacats_update
AFTER UPDATE ON enquesta
FOR EACH ROW 
BEGIN
	DECLARE v_comptador_destacats INT;
    DECLARE v_id_dest_antiga INT;

    SELECT COUNT(*) INTO v_comptador_destacats FROM vota.enquesta WHERE destacada = 1;
    
    IF v_comptador_destacats >= 7 THEN
	
		SELECT id INTO v_id_dest_antiga FROM vota.enquesta WHERE destacada=1 ORDER BY data_final asc LIMIT 1;
		UPDATE enquesta SET destacada = 0 WHERE id = v_id_dest_antiga;
		
    END IF;
END;
//

*/