<?php
 require 'vendor/autoload.php';
 use MongoDB\Driver\Manager;
 use MongoDB\Driver\ServerApi;
//  try {

$serverApi = new ServerApi(ServerApi::V1);
$client = new \MongoDB\Driver\Manager(
    'mongodb+srv://Aryan432:PS60rbmrmEmSNfI1@cluster0.fdkmm.mongodb.net/?retryWrites=true&w=majority', [], ['serverApi' => $serverApi]);

$db = $client->Hayatt;
$collection=$db->Query;
var_dump($client);

if (!empty($_POST["number"])) {
    echo "Yes, mail is set";    
} else {  
    echo "No, mail is not set";
}

    //     try {
    //     // Bulk write inserts
    //     $bulk = new MongoDB\Driver\BulkWrite;
    //         if(isset($_POST['number'])){
    //     if(! empty($_POST['number'])){
    //         $bulk->insertOne([
    //             'firstname'=> $_POST['first_name'],
    //             'lastname'=> $_POST['last_name'],
    //             'tel'=> $_POST['tel'],
    //             'email'=> $_POST['email'],
    //             'number'=> $_POST['number'],
    //             'date'=> $_POST['date'],
    //             'time'=> $_POST['time'],
    //             'comments'=> $_POST['comments']
    //         ]);
    // //     }
    
 
    var_dump($client);
    // $collection.find({"name":"Aryan"})

    
    if(isset($_POST['Submit'])) {	
        $user = array (
                        'firstname'=> $_POST['first_name'],
                        'lastname'=> $_POST['last_name'],
                        'tel'=> $_POST['tel'],
                        'email'=> $_POST['email'],
                        'number'=> $_POST['number'],
                        'date'=> $_POST['date'],
                        'time'=> $_POST['time'],
                        'comments'=> $_POST['comments']);
                        $errorMessage = '';
                        foreach ($user as $key => $value) {
                            if (empty($value)) {
                                $errorMessage .= $key . ' field is empty<br />';
                            }
                        }
                        if ($errorMessage) {
                            // print error message & link to the previous page
                            echo '<span style="color:red">'.$errorMessage.'</span>';
                            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";	
                        } else {
                            //insert data to database table/collection named 'users'
                            $db->users->insert($user);
                        }
                    }
//         $client->executeBulkWrite('Hayatt.Query', $bulk);

//         $filter = ['tel' => 'tel'];
//         $options = [];

//         // Query to find inserts in a specific collection
//         $query = new MongoDB\Driver\Query($filter, $options);
//         $cursor = $client->executeQuery('Hayatt.Query', $query);

//         foreach ($cursor as $document) {
//             var_dump($document);
//         } 
    
//     catch (Throwable $e) {
//         echo "Captured Throwable: for insert : " . $e->getMessage() . PHP_EOL;
//     }
// //         }



//  }
// catch (Throwable $e) {
//     echo "Captured Throwable for connection : " . $e->getMessage() . PHP_EOL;
// }
?>
<?php
    // if(isset($_POST['number'])){
    //     if(! empty($_POST['number'])){
    //         $insertable=$db->insertNewItem([
    //             'firstname'=> $_POST['first_name'],
    //             'lastname'=> $_POST['last_name'],
    //             'tel'=> $_POST['tel'],
    //             'email'=> $_POST['email'],
    //             'number'=> $_POST['number'],
    //             'date'=> $_POST['date'],
    //             'time'=> $_POST['time'],
    //             'comments'=> $_POST['comments']
    //         ]);
    //     }
    // }
?>
<?php
    // try {
    //     // Bulk write inserts
    //     $bulk = new MongoDB\Driver\BulkWrite;
    //     $bulk->insert(['mydata' => 'alice']);
    //     $bulk->insert(['mydata' => 'bob']);
    //     $bulk->insert(['mydata' => 'bastien']);
    //     $client->executeBulkWrite('Hayatt.Query', $bulk);

    //     $filter = ['mydata' => 'bob'];
    //     $options = [];

    //     // Query to find inserts in a specific collection
    //     $query = new MongoDB\Driver\Query($filter, $options);
    //     $cursor = $client->executeQuery('mydb.mycol', $query);

    //     foreach ($cursor as $document) {
    //         var_dump($document);
    //     } 
    // }
    // catch (Throwable $e) {
    //     echo "Captured Throwable: for insert : " . $e->getMessage() . PHP_EOL;
    // }
?>