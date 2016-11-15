<?php
class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

	//fetchAll fetches all results. We have to careful with this. Perhaps fetch is there's too many results
	//PDO::FETCH_OBJ stores each row into an object
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

}