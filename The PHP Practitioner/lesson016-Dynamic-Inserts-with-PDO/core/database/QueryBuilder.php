<?php

/*
	links
		http://php.net/manual/en/pdo.prepare.php
		http://php.net/manual/en/pdostatement.execute.php
		http://php.net/manual/en/function.implode.php
*/
class QueryBuilder
{
	protected $pdo;
	/* 
		for the query builder to do it's job, it depends on a pdo instance. That's why we use the constructor function.
	 	We accept the injected pdo from bootstrap.php and then we delegate it below.
	 */
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	/*
		The query builder is responsible for building up queries.
		one method to select everything from a particular table
	*/
	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();
	}

	// How to build a new method to insert into the table?
	public function insert($table, $parameters) 
	{
		//  insert into %table_name (%column_name) 
		// 	values (%column_values)
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ', array_keys($parameters)), 
			':' . implode(', :',array_keys($parameters))
		);
	die(var_dump($sql));
	}


}