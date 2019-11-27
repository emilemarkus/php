<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // 1.1 Clean your room Exercise 

    $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];
    $room_is_filthy = $possible_states[4];

    if( $room_is_filthy==$possible_states[0]){
        echo "your room is $room_is_filthy, ouawww, I call the oms!";
        //cleanup_room();
        echo "<br>Room is now clean!";
    } else if($room_is_filthy==$possible_states[1]) {
        echo "<br>your room is $room_is_filthy, you need to cleanUp your room.";
         //cleanup_room();
         echo "<br>Room is now clean!";
    }else if($room_is_filthy==$possible_states[2]){
        echo "<br>your room is $room_is_filthy, If you want, call you mother....to cleanup";
         //cleanup_room();
         echo "<br>Room is now clean!";
    }else if($room_is_filthy==$possible_states[3]){
        echo "<br>your room is $room_is_filthy, You can eat on the floor if you wish...";
        //cleanup_room();
        echo "<br>Room is now clean!";
    }else {
        echo"<br> your room is $room_is_filthy, can you cleanup my room !";

    }
    ?>
</body>
</html>