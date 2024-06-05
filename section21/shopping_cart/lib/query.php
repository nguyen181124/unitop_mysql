<?php
// require "../db/connect.php";
function get_record(string $table, array $column = [], array $conditions = [])
{
    global $conn;
    $sql = "SELECT ";
    if ($column) {
        $sql .= implode(',', $column) . " ";
    } else {
        $sql .= '* ';
    }
    $sql .= "from $table ";
    if ($conditions) {
        $sql .= ' where ';
        foreach ($conditions as $condition) {
            $sql .= $condition[0] . $condition[1] . $condition[2] . ' and ';
        }
        $sql = substr($sql, 0, -5);

    }

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    // $result = $stmt->fetchAll(PDO::FETCH_COLUMN | PDO::FETCH_GROUP, 1);
    // $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch as associative array with specified key

    // print_r($result);
    return $result;
}

// 'select * from table where conditions1 = value1 and where conditions = value2 and '
// get_record('product', [], 
// [

//     [
//         'category_id', "=", 1
//     ],
//     [
//         'price', '<', 888
//     ]
// ])


/**
 *
 */
// $dsn = 'mysql:dbname=test_pdo;host=unitop.local';
// $user = 'root';
// $password = 'abc1234';


// try {
//     $pdo = new PDO($dsn, $user, $password);
//     $is_success = insert_record($pdo, 'products', [
//         'name' => "Sam sung",
//         "category_id" => '1',
//     ]);
//     if ($is_success) {
//         echo " Insert successfully!";
//     }

// } catch (Exception $e) {
//     print_r($e->getMessage());
// }

function insert_record(string $table, array $columns )
{
   global  $conn;
   $sql = "INSERT INTO $table (";

   $cols = array_keys($columns);
   $sql .= implode(",", $cols) . ") VALUES (";
   foreach ($cols as $col)
   {
       $sql .= ":$col, ";
   }

   $sql = substr($sql, 0, -2);
   $sql .= ")";
    try {
        $stm = $conn->prepare($sql);
      return  $stm->execute($columns);
    }catch (Exception $e)
    {
        print_r($e->getMessage());
    }


}

// insert_record('Product', ['name'=>'ip15', 'img'=>'abc', 'category' => 'phone', 'category_id' => 2] );
// insert_record('product', [
//     "id" => 1,
//     'price' =>10,
// ]);
// insert_record('product', [
//     'name', 'id'
// ],['phone',2])

function select_record(){
    
}