<?php
class QueryBuilder
{

	public function SelectAll($table)
	{
		$statement = $pdo->prepare('select * from todos');

		$statement->execute();

	//fetchAll fetches all results. We have to careful with this. Perhaps fetch is there's too many results
	//PDO::FETCH_OBJ stores each row into an object
		return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
	}

}