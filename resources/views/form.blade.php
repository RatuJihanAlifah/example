<!DOCTYPE html>
<html>
    <body>
        <h3>Buat Account Baru</h3>
        <h4>Sign Up Form</h4>

        <form method="post" action="{{ route('get-welcome') }}">
            <label for="fname">First name:</label><br></br>
            <input type="text" id="fname" name="fname"><br></br>
            <label for="lname">Lats name:</label><br></br>
            <input type="text" id="lname" name="lname">
        

            <p>Gender</p>
                <input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label>

            <p>Nationality</p>
                <label for="nationality"></label>
                <select name="nationality" id="nationality">
                    <option value="indonesia">Indonesia</option>
                    <option value="america">America</option>
                    <option value="inggris">Inggris</option>
                </select>

            <p>Language Spoken</p>
                <input type="checkbox" id="language1" name="language1" value="Indonesia">
                <label for="language1">Bahasa Indonesia</label><br>
                <input type="checkbox" id="language2" name="language2" value="Inggris">
                <label for="language1">Bahasa Inggris</label><br>
                <input type="checkbox" id="language3" name="language3" value="Other">
                <label for="language1">Other</label><br>

            <p><label for="bio">Bio :</label></p>
                <textarea id="bio" name="bio" rows="10" cols="30"></textarea>
            <br>
            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>