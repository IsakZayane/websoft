--
-- Check the status for users
--
SELECT
    User,
    Host,
    Grant_priv,
    Super_priv,
    Trigger_priv,
    plugin
FROM mysql.user
WHERE
    User IN ('root', 'user')
ORDER BY User
;

SHOW VARIABLES LIKE '%version%';
