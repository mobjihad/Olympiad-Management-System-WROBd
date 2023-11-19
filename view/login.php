<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <form action="../controller/process_login.php" method="post">
        <table>
<tr>
    <td><label for="uname">Username : </label></td>
    <td><input type="text" id="uname" name="uname"></td>
</tr>
<tr>
    <td><label for="password">Password :</label> </td>
    <td><input type="password" id="password" name="password"></td>
</tr>
<tr>
                <td>
                    <label for="UC">
                       User Category :
                    </label>

                </td>
                <td>
                    <select name="UC" id="UC">
                   
                        <option value="Volunteer">Volunteer</option>
                        <option value="Participant">Participants</option>
                        <option value="Judge">Judge</option>
                        <option value="Admin">Admin</option>
                        <option value="Manager">Manager</option>
                        
                    </select>
                   
                </td>
            </tr>
<tr>
    <td>
        <input type="submit" id="submit" name="submit">
        <input type="reset" id="reset" name="reset" >
    </td>
</tr>
<tr>
    <td>Want to participate. Please <a href="registration_participant.php">register here.</a></td>
</tr>
<tr>
    <td><h3>We need volunteers.</h3><br><a href="registration_volunteer.php">Register as a volunteer.</a> </td>
    
</tr>
        </table>
        
    </form>
</body>
</html>