<?php 
include("../controller/process_createteam.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Home</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><h4>Create a team</h4></td>
            </tr>
            <tr>
                <td>Segment</td>
                <td>
            <select name="Seg" id="Seg">
                    <option value="">Segment</option>
                        <option value="Future Innovators">Future Innovators</option>
                        <option value="Future Engineers">Future Engineers</option>
                       
                    </select> </td>

</tr>
            <tr>
                <td><label for="tname">Team Name</label></td>
                <td><input type="text" id="tname" name="tname"></td>
            </tr>
            <tr>
                <td><label for="tlead">Team Leader :</label></td>
                <td><input type="text" id="tlead" name="tlead" ></td>
            </tr>
            <tr>
                <td><label for="tleademail">Email :</label></td>
                <td><input type="text" id="tleademail" name="tleademail" ></td>
            </tr>
            <tr>
                <td>Participant 1 :</td>
            </tr>
            <tr>
                <td><label for="part1name">Name :</label></td>
                <td><input type="text" id="part1name" name="part1name"></td>
            </tr>
            <tr>
                <td><label for="part1email">Email :</label></td>
                <td><input type="text" id="part1email" name="part1email" ></td>
            </tr>
            <td>Participant 2 :</td>
            </tr>
            <tr>
                <td><label for="part2name">Name :</label></td>
                <td><input type="text" id="part2name" name="part2name"></td>
            </tr>
            <tr>
                <td><label for="part2email">Email :</label></td>
                <td><input type="text" id="part2email" name="part2email" ></td>
            </tr>
            <td>Participant 3 :</td>
            </tr>
            <tr>
                <td><label for="part3name">Name :</label></td>
                <td><input type="text" id="part3name" name="part3name"></td>
            </tr>
            <tr>
                <td><label for="part3email">Email :</label></td>
                <td><input type="text" id="part3email" name="part3email" ></td>
            </tr>
            <td>Participant 4 :</td>
            </tr>
            <tr>
                <td><label for="part4name">Name :</label></td>
                <td><input type="text" id="part4name" name="part4name"></td>
            </tr>
            <tr>
                <td><label for="part4email">Email :</label></td>
                <td><input type="text" id="part4email" name="part4email" ></td>
            </tr>

            <td>Participant 5 :</td>
            </tr>
            <tr>
                <td><label for="part5name">Name :</label></td>
                <td><input type="text" id="part5name" name="part5name"></td>
            </tr>
            <tr>
                <td><label for="part4email">Email :</label></td>
                <td><input type="text" id="part5email" name="part5email" ></td>
            </tr>
            <tr>
                <td><input type="submit" id="submit" name="submit" > <input type="reset" id="reset" name="reset" ></td>
            </tr>
            
        </table>
    </form>
    
</body>
</html>