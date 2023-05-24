<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Players</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&family=Nunito+Sans:wght@700&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
    body{
        background-color: #B73E3E;
        display: flex;
        justify-content: center;
        padding-bottom: 20px;
    }
    table{
        border-collapse: collapse;
        height: 100%;
    }

    table td, table th {
        padding-left: 10px;
    }

    table tr:nth-child(even){background-color: #f6f6f6;}
    table tr:nth-child(odd){background-color: #fff;}

    table tr:hover {background-color: #ddd;}
    table th {
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: #674747;
        text-align: left;
        color: white;
        font-family: 'Nunito Sans', sans-serif;
    }
    table tr{
            font-family: 'Inter', sans-serif;
            transition: 1s;
        }
    .container{
        background-color: white;
        height: 100%;
        width: 100%;
        margin-top: 20px;
        padding-bottom: 30px;
    }
    h1{
        text-align: center;
        font-family: 'Nunito Sans', sans-serif;
        color: #B73E3E
    }
    .flex{
        margin: auto;
        display: flex;
        width:80%;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-bottom: 3%;
        width: 100%;
        /* border: 1px solid black; */
    }
    .items{
        /* border: 1px solid black; */
        display: flex;
        align-items: flex-end
    }
    i{
        color: black;
    }
    p{
        text-decoration: none;
        font-size: 16px;
        color: black;
        background-color: #fff;
        font-family: 'Inter', sans-serif;
    }
</style>
<body>
    <div class="container">
        <div class="flex">
            <div class="items">
                <img src="logo.png" height= 50px width= 120px>
            </div>
            <div class="items">
                <h1>All the Players</h1>
            </div>
            <div class="items">
                <form action="read.php" method=get>
                    <input type="search" placeholder="Search" name=keyword required>
                    <input type=submit value=Search name=search>
                </form>
            </div>
        </div>
        <?php 
        include('connect.php');
        if (isset($_GET['search']))
        {
            if (isset($_GET['delete'])){
                $del=$_GET['delete'];
                $delete="DELETE from registerr where (player_id='$del')";
                mysqli_query($con, $delete);
                $desc= 'Player deleted';
            }
            else
                $desc= '';
            $key=$_GET['keyword'];
            $q="SELECT * from registerr where (player_id like '%$key%' or lastname like '%$key%')";
            $result = mysqli_query($con, $q);
            $count = mysqli_num_rows($result);
            if($count==0)
                $desc = "No Player/s Found";
            else{
                $desc= '';
                print("<a style='text-decoration: none;' href='read.php'><p style='margin-left: 2%;'>Back to the list</p></a><table><th style='width:20px;'></th><th>Jersey Number</th><th>Last Name</th><th>First Name</th><th>Gender</th><th>Age</th><th>Height(CM)</th><th>Weight(KG)</th><th>Team</th><th>Mid Shooting</th><th>3pts Shooting</th><th>Passing</th><th>Dribbling</th><th>Dunk</th><th>Defense</th><th>Rebound</th><th>Strength</th><th>Speed</th><th>Stamina</th><th>Overall</th><th style='width:10px;'></th><th style='width:10px;'></th>");
                while($records = mysqli_fetch_array($result)){
                $id = $records['player_id'];
                $lastname = $records['lastname'];
                $firstname = $records['firstname'];
                $gender = $records['gender'];
                $age = $records['age'];
                $height = $records['height'];
                $weight = $records['weightt'];
                $team = $records['team'];
                $mshooting = $records['midshooting'];
                $tshooting = $records['threepointshooting'];
                $passing = $records['passing'];
                $dribbling = $records['dribbling'];
                $dunk = $records['dunk'];
                $defense = $records['defense'];
                $rebound = $records['rebound'];
                $strength = $records['strength'];
                $speed = $records['speed'];
                $stamina = $records['stamina'];
                $overall = $records['overall'];
                print "<tr><td></td><td>$id</td><td>$lastname</td><td>$firstname</td><td>$gender</td><td>$age</td><td>$height</td><td>$weight</td><td>$team</td><td>$mshooting</td><td>$tshooting</td><td>$passing</td><td>$dribbling</td><td>$dunk</td><td>$defense</td><td>$rebound</td><td>$strength</td><td>$speed</td><td>$stamina</td><td>$overall</td><td><a href='read.php?delete=$id'><i class='fa-sharp fa-solid fa-trash'></i></a></td><td><a href='update.php?id=$id&lastname=$lastname&firstname=$firstname&gender=$gender&age=$age&height=$height&weight=$weight&team=$team&mshooting=$mshooting&tshooting=$tshooting&passing=$passing&dribbling=$dribbling&dunk=$dunk&defense=$defense&rebound=$rebound&strength=$strength&speed=$speed&stamina=$stamina&overall=$overall'><i class='fa-sharp fa-solid fa-pen'></i></a></td>";}
            }
        }
        else
        {
            if (isset($_GET['delete'])){
                $del=$_GET['delete'];
                $delete="DELETE from registerr where (player_id='$del')";
                mysqli_query($con, $delete);
                $desc= 'Record deleted';
            }
            else
                $desc= '';
            print("<table><th style='width:20px;'></th><th>Jersey Number</th><th>Last Name</th><th>First Name</th><th>Gender</th><th>Age</th><th>Height(CM)</th><th>Weight(KG)</th><th>Team</th><th>Mid Shooting</th><th>3pts Shooting</th><th>Passing</th><th>Dribbling</th><th>Dunk</th><th>Defense</th><th>Rebound</th><th>Strength</th><th>Speed</th><th>Stamina</th><th>Overall</th><th style='width:10px;'></th><th style='width:10px;'></th>");
            $search = "Select * from registerr order by lastname asc";
            $result = mysqli_query($con, $search);
            $count = mysqli_num_rows($result);
            while($records = mysqli_fetch_array($result)){
                $id = $records['player_id'];
                $lastname = $records['lastname'];
                $firstname = $records['firstname'];
                $gender = $records['gender'];
                $age = $records['age'];
                $height = $records['height'];
                $weight = $records['weightt'];
                $team = $records['team'];
                $mshooting = $records['midshooting'];
                $tshooting = $records['threepointshooting'];
                $passing = $records['passing'];
                $dribbling = $records['dribbling'];
                $dunk = $records['dunk'];
                $defense = $records['defense'];
                $rebound = $records['rebound'];
                $strength = $records['strength'];
                $speed = $records['speed'];
                $stamina = $records['stamina'];
                $overall = $records['overall'];
                print "<tr><td></td><td>$id</td><td>$lastname</td><td>$firstname</td><td>$gender</td><td>$age</td><td>$height</td><td>$weight</td><td>$team</td><td>$mshooting</td><td>$tshooting</td><td>$passing</td><td>$dribbling</td><td>$dunk</td><td>$defense</td><td>$rebound</td><td>$strength</td><td>$speed</td><td>$stamina</td><td>$overall</td><td><a href='read.php?delete=$id'><i class='fa-sharp fa-solid fa-trash'></i></a></td><td><a href='update.php?playerid=$id&lname=$lastname&fname=$firstname&gender=$gender&age=$age&height=$height&weight=$weight&team=$team&mshooting=$mshooting&tshooting=$tshooting&passing=$passing&dribbling=$dribbling&dunk=$dunk&defense=$defense&rebound=$rebound&strength=$strength&speed=$speed&stamina=$stamina&overall=$overall'><i class='fa-sharp fa-solid fa-pen'></i></a></td>";
        }
    }
        print "</table><hr><div class='flex' style='justify-content: space-around;margin:0;'><div class='items'><p>$desc</p></div></div><div class='flex' style='justify-content: space-around;'><div class='items'><p>$count Total Player/s</p></div></div>"
        ?>  
        <a style="text-decoration: none;" href="create.php"><p style='margin-left: 2%;'>Create new players</p></a>
    </div>
</body>
</html>