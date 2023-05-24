<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Player</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&family=Nunito+Sans:wght@700&display=swap');
    body{
        background-color: #B73E3E;
        display: flex;
        justify-content: center;
        padding-bottom: 20px;
    }
    .container{
        background-color: white;
        height: 100%;
        width: 85%;
        margin-top: 20px;
        padding-bottom: 30px;
        padding-left: 20px;
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
        gap: 10px;
        /* border: 1px solid black; */
        flex-wrap: wrap;
    }
    .items{
        /* border: 1px solid black; */
    }
    h3{
        font-family: 'Inter', sans-serif;
    }
    h2{
        font-family: 'Nunito Sans', sans-serif;
    }
    h4{
        font-family: 'Inter', sans-serif;
        color: #B73E3E
    }
    p{
        font-family: 'Inter', sans-serif;
        color:black
    }
</style>
<body>
    <div class="container">
        <h1>Create NBA Basketball Player</h1>
        <form action="create.php" method = get>
            <div class="flex">
                <div class="items">
                    <h2>Information</h2>
                </div>
            </div>
            <div class=flex>
                <div class=items>
                    <h3>Jersey Number</h3>
                    <input type=text name= playerid placeholder = "Jersey Number" required>
                </div>
                <div class=items>
                    <h3>Name</h3>
                    <input type=text name= lname placeholder = "Lastname" required>
                    <input type=text name= fname placeholder = "First name" required>
                </div>
                <div class="items">
                        <h3>Gender</h3>
                        <input type=radio name=gender value='Male' required>
                        <label for="male">Male</label>
                        <input type=radio name=gender value='Female' required>
                        <label for="female">Female</label>
                </div>
                <div class="items">
                    <h3>Age</h3>
                    <input type=number name= age placeholder = "Age" required>
                </div>
                <div class="items">
                    <h3>Height and Weight (CM)</h3>
                    <input type=text name= height placeholder = "Height (CM)" required>
                    <input type=text name= weight placeholder = "Weight (KG)" required>
                </div>
                <div class="items">
                    <h3>Choose a Team</h3>
                    <select name="team" id="team">
                        <option value="ATLANTA HAWKS">ATLANTA HAWKS</option>
                        <option value="BOSTON CELTICS">BOSTON CELTICS</option>
                        <option value="BROOKLYN NETS">BROOKLYN NETS</option>
                        <option value="CHARLOTTE HORNETS">CHARLOTTE HORNETS</option>
                        <option value="CHICAGO BULLS">CHICAGO BULLS</option>
                        <option value="CLEVELAND CAVALIERS">CLEVELAND CAVALIERS</option>
                        <option value="DALLAS MAVERICKS">DALLAS MAVERICKS</option>
                        <option value="DENVER NUGGETS">DENVER NUGGETS</option>
                        <option value="DETROIT PISTONS">DETROIT PISTONS</option>
                        <option value="GOLDEN STATE WARRIORS">GOLDEN STATE WARRIORS</option>
                        <option value="HOUSTON ROCKETS">HOUSTON ROCKETS</option>
                        <option value="INDIANA PACERS">INDIANA PACERS</option>
                        <option value="LOS ANGELES CLIPPERS">LOS ANGELES CLIPPERS</option>
                        <option value="LOS ANGELES LAKERS">LOS ANGELES LAKERS</option>
                        <option value="MEMPHIS GRIZZLIES">MEMPHIS GRIZZLIES</option>
                        <option value="MIAMI HEAT">MIAMI HEAT</option>
                        <option value="MILWAUKEE BUCKS">MILWAUKEE BUCKS</option>
                        <option value="MINNESOTA TIMBERWOLVES">MINNESOTA TIMBERWOLVES</option>
                        <option value="NEW ORLEANS PELICANS">NEW ORLEANS PELICANS</option>
                        <option value="NEW YORK KNICKS">NEW YORK KNICKS</option>
                        <option value="OKLAHOMA CITY THUNDER">OKLAHOMA CITY THUNDER</option>
                        <option value="ORLANDO MAGIC">ORLANDO MAGIC</option>
                        <option value="PHILADELPHIA 76ERS">PHILADELPHIA 76ERS</option>
                        <option value="PHOENIX SUNS">PHOENIX SUNS</option>
                        <option value="PORTLAND TRAIL BLAZERS">PORTLAND TRAIL BLAZERS</option>
                        <option value="SACRAMENTO KINGS">SACRAMENTO KINGS</option>
                        <option value="SAN ANTONIO SPURS">SAN ANTONIO SPURS</option>
                        <option value="TORONTO RAPTORS">TORONTO RAPTORS</option>
                        <option value="UTAH JAZZ">UTAH JAZZ</option>
                        <option value="WASHINGTON WIZARDS">WASHINGTON WIZARDS</option>
                    </select>
                </div>
            </div>
            <div class=flex>
                <div class=items>
                    <h2>Skills</h2>
                    <h4>Rate 1-10(10 is the highest)</h4>
                </div>
            </div>
            <div class="flex" style="justify-content: space-around;">
                <div class="items">
                    <h3>Mid Shooting</h3>
                    <input type=number name= mshooting placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>3pt Shooting</h3>
                    <input type=number name= tshooting placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>Passing</h3>
                    <input type=number name= passing placeholder = "Rate 1-10" required>
                </div>
            </div>
            <div class="flex" style="justify-content: space-around;">
                <div class="items">
                    <h3>Dribbling</h3>
                    <input type=number name= dribbling placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>Dunk</h3>
                    <input type=number name= dunk placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>Defense</h3>
                    <input type=number name= defense placeholder = "Rate 1-10" required>
                </div>
            </div>
            <div class="flex" style="justify-content: space-around;">
                <div class="items">
                    <h3>Rebound</h3>
                    <input type=number name= rebound placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>Strength</h3>
                    <input type=number name= strength placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>Speed</h3>
                    <input type=number name= speed placeholder = "Rate 1-10" required>
                </div>
            </div>
            <div class="flex" style="justify-content: space-around;">
                <div class="items">
                    <h3>Stamina</h3>
                    <input type=number name= stamina placeholder = "Rate 1-10" required>
                </div>
            </div>
            <br>
            <div class="flex" style="justify-content: space-around;">
                <div class="items">
                <input class="btn" type=submit value=Save name= save><input class="btn" type=reset value=Clear name= clear>
                </div>
            </div>
        </form>
        <?php 
        if (isset($_GET['save'])){
            $id = $_GET['playerid'];
            $lastname = $_GET['lname'];
            $fistname = $_GET['fname'];
            $gender = $_GET['gender'];
            $age = $_GET['age'];
            $height = $_GET['height'];
            $weight = $_GET['weight'];
            $team = $_GET['team'];
            $mshooting = $_GET['mshooting'];
            $tshooting = $_GET['tshooting'];
            $passing = $_GET['passing'];
            $dribbling = $_GET['dribbling'];
            $dunk = $_GET['dunk'];
            $defense = $_GET['defense'];
            $rebound = $_GET['rebound'];
            $strength = $_GET['strength'];
            $speed = $_GET['speed'];
            $stamina = $_GET['stamina'];
            $overall = $mshooting + $tshooting + $passing + $dribbling + $dunk + $defense + $rebound + $strength + $speed + $stamina;
            include('connect.php');
            $search = "Select * from registerr where (player_id='$id')";
            $result = mysqli_query($con, $search);
            $count = mysqli_num_rows($result);
            if ($count == 0){
                $insert = "INSERT INTO registerr values('$id', '$lastname', '$fistname', '$gender', '$age', '$height', '$weight', '$team', '$mshooting', '$tshooting', '$passing', '$dribbling', '$dunk', '$defense', '$rebound', '$strength', '$speed', '$stamina', '$overall')";
                mysqli_query($con, $insert);
                print "<div class='flex' style='justify-content: space-around;'><div class='items'><p>Player Created</p></div></div>";
            }
            else print "<div class='flex' style='justify-content: space-around;'><div class='items'><p>Player ID $id is already exists!!</p></div></div>";
        }
        ?>
        <a style="text-decoration: none;" href="read.php"><p>List of all Players</p></a>
    </div>
</body>
</html>