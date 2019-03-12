This is a dblib Drupal Driver implementation downloaded from:
https://github.com/blackiceua/dblib
Forked for safety: https://github.com/hugronaphor/dblib

Connection example.
```
$databases = [
  'my_db_connection_name' => [
    'default' => [
      'database' => 'Staging',
      'username' => 'user',
      'password' => 'password',
      'host' => 'example.com',
      'port' => '',
      'namespace' => 'Drupal\\dblib\\Driver',
      'driver' => 'dblib',
      'prefix' => '',
    ],
  ],
];
```