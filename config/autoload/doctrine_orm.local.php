<?php
return array(
		'doctrine' => array(
				'connection' => array(
						'orm_default' => array(
								'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
								'params' => array(
										
										'host'     => 'localhost',
										'port'     => '3306',
										'user'     => 'root',
										'password' => '',
										'dbname'   => 'sntcontrol',
										/*'host'     => 'mysql.hostinger.com.br',
										'port'     => '3306',
										'user'     => 'u934976399_snt',
										'password' => '2JDZdYgbLG',
										'dbname'   => 'u934976399_snt',*/
										
										'driverOptions' => array(
												PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
										)
								)
						)
				)
		),
);