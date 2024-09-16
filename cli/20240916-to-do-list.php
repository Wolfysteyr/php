<?php
// 1. while loop
// 2. menu
// 3. switch case nosacījumi
// 4. make test data
$taskList = ["Homework", "Go sleep"];

$continue = 'y';
do {
    echo "Uzdevumu parvaldnieks\n";
    echo "Apskatīt visus uzdevumus => 1\n";
    echo "Ievadīt jaunu uzdevumu => 2\n";
    echo "Apskatīt vienu uzdevumu => 3 \n";
    echo "Iziet => 4\n";

    $choice = readline("Izvelaties darbību: ");
    
    switch ($choice) {
        case 1:
            // foreach($taskList as $task){
            //     echo ""
            // }
            for($i = 0; $i < count($taskList); $i++ ){
                $id = $i+1;
                echo "$id" . ". $taskList[$i] \n";
            }
            break;
        
        case 2:
            echo "To be implemented \n";
            break;

        case 3:
            echo "To be implemented \n";
            break;

        case 4:
            $continue = null;
            echo "Goodbye \n";
            break;
            
        default:
            echo "Invalid option";
    
    }
}
while ($continue == 'y');