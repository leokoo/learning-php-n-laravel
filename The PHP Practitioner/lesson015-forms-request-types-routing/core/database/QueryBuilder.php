<?php
class QueryBuilder
{
	protected $pdo;
	//for the query builder to do it's job, it depends on a pdo instance. That's why we use the constructor function.
	//We accept the injected pdo from bootstrap.php and then we delegate it below.
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	//The query builder is responsible for building up queries.
	//one method to select everything from a particular table
	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

	//Homework : How to build a new method to insert into the table

}