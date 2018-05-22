<?php

exec(__DIR__ . '/vendor/bin/phinx rollback -e default_connection -t 0');
exec(__DIR__ . '/vendor/bin/phinx migrate');
exec(__DIR__ . '/vendor/bin/phinx seed:run -s UsersSeeder');
exec(__DIR__ . '/vendor/bin/phinx seed:run -s CategoryCostsSeeder');
exec(__DIR__ . '/vendor/bin/phinx seed:run -s BillReceivesSeeder');
exec(__DIR__ . '/vendor/bin/phinx seed:run -s BillsPaysSeeder');