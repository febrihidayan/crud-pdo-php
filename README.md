# CRUD PDO PHP
Simpel crud dengan PDO php

## Instalasi
Buatlah database dengan nama `crud_mysqli_proc`, kemudian buka sql dan pastekan kode dibawah ini.
```sql
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```