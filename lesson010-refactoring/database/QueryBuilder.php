<?php
class QueryBuilder
{
	protected $pdo;
//for the query builder to do it's job, it depends on a pdo instance
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

	//fetchAll fetches all results. We have to careful with this. Perhaps fetch is there's too many results
	//PDO::FETCH_OBJ stores each row into an object
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

}