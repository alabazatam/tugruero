SELECT u.login,c.razon_social, u.id_user
FROM users u
INNER JOIN users_company uc ON u.id_user = uc.id_user
INNER JOIN users_perms up ON u.id_user = up.id_user
INNER JOIN company c ON c.id = uc.id_company
WHERE uc.id_company = 1 AND up.id_perms = 3;
;

SELECT uc.id_company AS id_company
FROM users u
INNER JOIN users_company uc ON u.id_user = uc.id_user
WHERE u.id_user = 1;
;