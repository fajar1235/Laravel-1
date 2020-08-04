<!DOCTYPE html>
<html>
    <head>
        <title>Form page</title>
    </head>

    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>

        <form action="/welcome" method="POST">
        @csrf
            <label for="fname">First Name:</label><br>
            <input type="text" id="fnmae" name="fname"><br><br>
            <label for="lname">Last Name:</label><br>
            <input type="text" id="lnmae" name="lname"><br>

            <p>Gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br><br>

            <label for="nation">Nationality:</label><br><br>
            <select id="nation" name="nation">
                <option value="indonesia">Indonesian</option>
                <option value="malaysia">Malaysia</option>
                <option value="rusia">Rusia</option>
                <option value="arab">Arab</option>
            </select><br><br>

            <p>Language Spoken:</p>
            <input type="checkbox" name="bahasa" value="indonesia" checked> Bahasa Indonesia<br>
            <input type="checkbox" name="bahasa" value="english"> English<br>
            <input type="checkbox" name="bahasa" value="other"> Other<Br>

            <p>Bio:</p>
            <textarea cols="40" rows="5"></textarea>
            <br>
            <input type="submit" value="Submit">        

        </form>
    </body>
</html>