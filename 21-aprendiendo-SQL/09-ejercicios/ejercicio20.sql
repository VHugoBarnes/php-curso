-- Ejercicio 20. Seleccionar el grupo en el que trabaja
-- el vendedor con mayor salario y mostrar el nombre del grupo

SELECT id, nombre
FROM grupos
WHERE id
IN (
    SELECT grupo_id
    FROM vendedores
    WHERE sueldo
    IN (
        SELECT MAX(sueldo)
        FROM vendedores
    )
);
