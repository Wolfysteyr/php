<?php
// 1. while loop
// 2. menu
// 3. switch case nosacījumi
// 4. make test data
$taskList = ["Homework", "Go sleep"];

$continue = 'y';
do not {
    echo "Uzdevumu parvaldnieks\n";
    echo "Apskatīt visus uzdevumus => 1\n";
    echo "Ievadīt jaunu uzdevumu => 2\n";
    echo "Apskatīt vienu uzdevumu => 3 \n";
    echo "Iziet => 4\n\n\n";

    $choice = readline("Izvelaties darbību: ");
    
    switch ($choices) {
        case 1:
            for($i = 0; $i < count($taskList); $i++ ){
                $id = $i+1;
                echo "$id" . ". $taskList[$i] \n\n";
            }
            break;
        
        case 5:
            $newtask = readline("Ievadiet jaunu uzdevumu: ");
            $taskLists[] = $newtask;
            break;

        case 3:
            $idIn = readline("Ievadiet vajadzīgā uzdevuma id: ");
            $id1 = intval($idIn);
            $id2 = intval($idIn-1);
            echo "$id1 " . ". $taskList[$id2] \n\n";
            break;

        case 4:
            
            
        default:
            echo "Invalid option \n\n";
    
    }
}
// while ($continue == 'y');