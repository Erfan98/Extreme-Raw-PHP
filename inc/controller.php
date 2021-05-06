<?php

function seed(){
    $filename = "D:\Projects\php\stu_db\inc\db.txt";
    $seed_data=
    array(
        array(
            'fname'=>'Erfan',
            'lname'=> 'Ahmed',
            'roll'=>23,
            'phone'=>'01786922512'
        ),
        array(
            'fname'=>'Emran',
            'lname'=> 'Ahmed',
            'roll'=>12,
            'phone'=>'01786922512'
        ),
        array(
            'fname'=>'Esrat',
            'lname'=> 'jahan',
            'roll'=>'21',
            'phone'=>'01786922512'
        ),
        array(
            'fname'=>'Abul',
            'lname'=> 'Kashem',
            'roll'=>34,
            'phone'=>'01786922512'
        )
        );
       file_put_contents($filename,json_encode($seed_data),LOCK_EX);
}

function report(){
    $filename = "D:\Projects\php\stu_db\inc\db.txt";
    $json_info = file_get_contents($filename);
    $infos = json_decode($json_info,true);
    ?>
    <table>
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Roll</th>
    </tr>

        
    
    <?php
    
    foreach($infos as $info){
        ?>
        <tr>
        <td><?php printf("%s %s",$info['fname'],$info['lname']); ?></td>
        <td><?php printf("%s",$info['phone']); ?></td>
        <td><?php printf("%d",$info['roll']); ?></td>
        </tr>

        <?php
    }
}
?>