<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update a Player</title>
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
        <h1>Update NBA Basketball Player</h1>
        <form action="update.php" method = get>
            <div class="flex">
                <div class="items">
                    <h2>Information</h2>
                </div>
            </div>
            <div class=flex>
                <div class=items>
                    <h3>Jersey Number</h3>
                    <input type=text name= playerid value="<?php print $_GET['playerid']; ?>" placeholder = "Player ID" required>
                </div>
                <div class=items>
                    <h3>Name</h3>
                    <input type=text name= lname value="<?php print $_GET['lname']; ?>" placeholder = "Lastname" required>
                    <input type=text name= fname value="<?php print $_GET['fname']; ?>" placeholder = "First name" required>
                </div>
                <div class="items">
                        <h3>Gender</h3>
                        <input type=radio name=gender <?php if (($_GET['gender']) === ('Male')) print 'checked=true';?> value='Male' required>
                        <label for="male">Male</label>
                        <input type=radio name=gender <?php if (($_GET['gender']) === ('Female')) print 'checked=true';?> value='Female' required>
                        <label for="female">Female</label>
                </div>
                <div class="items">
                    <h3>Age</h3>
                    <input type=number name= age value="<?php print $_GET['age']; ?>" placeholder = "Age" required>
                </div>
                <div class="items">
                    <h3>Height and Weight (CM)</h3>
                    <input type=text name= height value="<?php print $_GET['height']; ?>" placeholder = "Height (CM)" required>
                    <input type=text name= weight value="<?php print $_GET['weight']; ?>" placeholder = "Weight (KG)" required>
                </div>
                <div class="items">
                    <h3>Choose a Team</h3>
                    <select name="team" id="team">
                        <option value="ATLANTA HAWKS" <?php if (($_GET['team']) === ('ATLANTA HAWKS')) print 'selected';?>>ATLANTA HAWKS</option>
                        <option value="BOSTON CELTICS" <?php if (($_GET['team']) === ('BOSTON CELTICS')) print 'selected';?>>BOSTON CELTICS</option>
                        <option value="BROOKLYN NETS" <?php if (($_GET['team']) === ('BROOKLYN NETS')) print 'selected';?>>BROOKLYN NETS</option>
                        <option value="CHARLOTTE HORNETS" <?php if (($_GET['team']) === ('CHARLOTTE HORNETS')) print 'selected';?>>CHARLOTTE HORNETS</option>
                        <option value="CHICAGO BULLS" <?php if (($_GET['team']) === ('CHICAGO BULLS')) print 'selected';?>>CHICAGO BULLS</option>
                        <option value="CLEVELAND CAVALIERS" <?php if (($_GET['team']) === ('CLEVELAND CAVALIERS')) print 'selected';?>>CLEVELAND CAVALIERS</option>
                        <option value="DALLAS MAVERICKS"<?php if (($_GET['team']) === ('DALLAS MAVERICKS')) print 'selected';?>>DALLAS MAVERICKS</option>
                        <option value="DENVER NUGGETS" <?php if (($_GET['team']) === ('DENVER NUGGETS')) print 'selected';?>>DENVER NUGGETS</option>
                        <option value="DETROIT PISTONS" <?php if (($_GET['team']) === ('DETROIT PISTONS')) print 'selected';?>>DETROIT PISTONS</option>
                        <option value="GOLDEN STATE WARRIORS" <?php if (($_GET['team']) === ('GOLDEN STATE WARRIORS')) print 'selected';?>>GOLDEN STATE WARRIORS</option>
                        <option value="HOUSTON ROCKETS" <?php if (($_GET['team']) === ('HOUSTON ROCKETS')) print 'selected';?>>HOUSTON ROCKETS</option>
                        <option value="INDIANA PACERS" <?php if (($_GET['team']) === ('INDIANA PACERS')) print 'selected';?>>INDIANA PACERS</option>
                        <option value="LOS ANGELES CLIPPERS" <?php if (($_GET['team']) === ('LOS ANGELES CLIPPERS')) print 'selected';?>>LOS ANGELES CLIPPERS</option>
                        <option value="LOS ANGELES LAKERS" <?php if (($_GET['team']) === ('LOS ANGELES LAKERS')) print 'selected';?>>LOS ANGELES LAKERS</option>
                        <option value="MEMPHIS GRIZZLIES" <?php if (($_GET['team']) === ('MEMPHIS GRIZZLIES')) print 'selected';?>>MEMPHIS GRIZZLIES</option>
                        <option value="MIAMI HEAT" <?php if (($_GET['team']) === ('MIAMI HEAT')) print 'selected';?>>MIAMI HEAT</option>
                        <option value="MILWAUKEE BUCKS" <?php if (($_GET['team']) === ('MILWAUKEE BUCKS')) print 'selected';?>>MILWAUKEE BUCKS</option>
                        <option value="MINNESOTA TIMBERWOLVES" <?php if (($_GET['team']) === ('MINNESOTA TIMBERWOLVES')) print 'selected';?>>MINNESOTA TIMBERWOLVES</option>
                        <option value="NEW ORLEANS PELICANS" <?php if (($_GET['team']) === ('NEW ORLEANS PELICANS')) print 'selected';?>>NEW ORLEANS PELICANS</option>
                        <option value="NEW YORK KNICKS" <?php if (($_GET['team']) === ('NEW YORK KNICKS')) print 'selected';?>>NEW YORK KNICKS</option>
                        <option value="OKLAHOMA CITY THUNDER" <?php if (($_GET['team']) === ('OKLAHOMA CITY THUNDER')) print 'selected';?>>OKLAHOMA CITY THUNDER</option>
                        <option value="ORLANDO MAGIC" <?php if (($_GET['team']) === ('ORLANDO MAGIC')) print 'selected';?>>ORLANDO MAGIC</option>
                        <option value="PHILADELPHIA 76ERS" <?php if (($_GET['team']) === ('PHILADELPHIA 76ERS')) print 'selected';?>>PHILADELPHIA 76ERS</option>
                        <option value="PHOENIX SUNS" <?php if (($_GET['team']) === ('PHOENIX SUNS')) print 'selected';?>>PHOENIX SUNS</option>
                        <option value="PORTLAND TRAIL BLAZERS" <?php if (($_GET['team']) === ('PORTLAND TRAIL BLAZERS')) print 'selected';?>>PORTLAND TRAIL BLAZERS</option>
                        <option value="SACRAMENTO KINGS" <?php if (($_GET['team']) === ('SACRAMENTO KINGS')) print 'selected';?>>SACRAMENTO KINGS</option>
                        <option value="SAN ANTONIO SPURS" <?php if (($_GET['team']) === ('SAN ANTONIO SPURS')) print 'selected';?>>SAN ANTONIO SPURS</option>
                        <option value="TORONTO RAPTORS" <?php if (($_GET['team']) === ('TORONTO RAPTORS')) print 'selected';?>>TORONTO RAPTORS</option>
                        <option value="UTAH JAZZ" <?php if (($_GET['team']) === ('UTAH JAZZ')) print 'selected';?>>UTAH JAZZ</option>
                        <option value="WASHINGTON WIZARDS" <?php if (($_GET['team']) === ('WASHINGTON WIZARDS')) print 'selected';?>>WASHINGTON WIZARDS</option>
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
                    <input type=number name= mshooting value="<?php print $_GET['mshooting']; ?>" placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>3pt Shooting</h3>
                    <input type=number name= tshooting value="<?php print $_GET['tshooting']; ?>" placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>Passing</h3>
                    <input type=number name= passing value="<?php print $_GET['passing']; ?>" placeholder = "Rate 1-10" required>
                </div>
            </div>
            <div class="flex" style="justify-content: space-around;">
                <div class="items">
                    <h3>Dribbling</h3>
                    <input type=number name= dribbling value="<?php print $_GET['dribbling']; ?>" placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>Dunk</h3>
                    <input type=number name= dunk value="<?php print $_GET['dunk']; ?>" placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>Defense</h3>
                    <input type=number name= defense value="<?php print $_GET['defense']; ?>" placeholder = "Rate 1-10" required>
                </div>
            </div>
            <div class="flex" style="justify-content: space-around;">
                <div class="items">
                    <h3>Rebound</h3>
                    <input type=number name= rebound value="<?php print $_GET['rebound']; ?>" placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>Strength</h3>
                    <input type=number name= strength value="<?php print $_GET['strength']; ?>" placeholder = "Rate 1-10" required>
                </div>
                <div class="items">
                    <h3>Speed</h3>
                    <input type=number name= speed value="<?php print $_GET['speed']; ?>" placeholder = "Rate 1-10" required>
                </div>
            </div>
            <div class="flex" style="justify-content: space-around;">
                <div class="items">
                    <h3>Stamina</h3>
                    <input type=number name= stamina value="<?php print $_GET['stamina']; ?>" placeholder = "Rate 1-10" required>
                </div>
            </div>
            <br>
            <div class="flex" style="justify-content: space-around;">
                <div class="items">
                <input class="btn" type=submit value=Update name= save>
                </div>
            </div>
        </form>
        <?php 
        if (isset($_GET['save'])){
            include('connect.php');
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
            $update = "UPDATE registerr SET lastname = '$lastname', firstname = '$fistname', gender = '$gender', age = '$age', height= '$height', weightt= '$weight', team= '$team', midshooting= '$mshooting', threepointshooting= '$tshooting', passing= '$passing', dribbling= '$dribbling', dunk= '$dunk', defense= '$defense', rebound= '$rebound', strength= '$strength', speed= '$speed', stamina= '$stamina', overall= '$overall' where (player_id = '$id')";
            mysqli_query($con, $update);
            print "<div class='flex' style='justify-content: space-around;'><div class='items'><p>Successfully Updated</p></div></div>";
        }
        ?>
        <a style="text-decoration: none;" href="read.php"><p>List of all Players</p></a>
    </div>
</body>
</html>

