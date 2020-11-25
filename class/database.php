<?php
class Database{
public $tab;
function __construct($tab){
	$this->tab =$tab;
}

function save($in ,$id =''){
	try{
		$this->insert($in);
	}
	catch(Exception $e){
		$this->update($in, $id);
	}
	}
function findAll() {
	    global $p;
	    $query = $p->prepare('SELECT * FROM ' . $this->tab);
	    $query->execute();
	    return $query;
	}

function find($col, $in) {
	    global $p;
	    $query = $p->prepare('SELECT * FROM '.$this->tab.' WHERE '.$col.'=:in');
	    $req = [
	            'in' => $in
	    ];
	    $query->execute($req);
	    return $query;
	}

function find2($col, $in,$col1,$in1,$col2,$in2) {
	    global $p;
	    $query = $p->prepare("SELECT * FROM $this->tab  WHERE $col LIKE '%$in%' AND $col1 = '$in1' AND $col2 = '$in2'");
	    $query->execute();
	    return $query;
	}

function find3($col, $in) {
	    global $p;
	    $query = $p->prepare("SELECT * FROM $this->tab  WHERE $col LIKE '%$in%' ");
	    $query->execute();
	    return $query;
	}

function insert($in){
	global $p;
		$array = array_keys($in);
	    $col = implode(', ', $array);
	    $data = implode(', :', $array);
	    $query = 'INSERT INTO '.$this->tab.'('.$col.') VALUE(:'.$data.')';
	    $exec = $p->prepare($query);
	    $exec->execute($in);
}

function update($in, $pk) {
	    global $p;
	    $param = [];
	    foreach ($in as $key => $id) {
	        $param[] = $key . '= :'  . $key;
	    }
	    $data = implode(', ', $param);
	    $query = "UPDATE $this->tab SET $data WHERE $pk = :pk";
	    $in['pk'] = $in[$pk];
	    $exec = $p->prepare($query);
	    $exec->execute($in);
	}
function delete($col, $in){
	    global $p;
	    $query = $p->prepare("DELETE FROM $this->tab WHERE $col = :pk");
	    $req = [
	        'pk' => $in
	    ];
	    $query->execute($req);
	    return $query;
	}

	
	














}





?>