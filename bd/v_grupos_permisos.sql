CREATE OR REPLAcE VIEW v_grupos_permisos as (SELECT
  cat_permisos.id as id,
  concat(cat_permisos.controlador,':',cat_permisos.accion) AS permiso,
  cat_grupos.id AS co_grupo_id
  from cat_grupos
  join r_permisos_grupos on r_permisos_grupos.id_cat_grupo = cat_grupos.id
  join cat_permisos on r_permisos_grupos.id_cat_permiso = cat_permisos.id);
