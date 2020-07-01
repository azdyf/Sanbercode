<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Form Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <p>First name:</p>
        <input type="text" name="firstname" id="firstname">
        <p>Last name:</p>
        <input type="text" name="lastname" id="lastname">
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <p>Nationality:</p>
        <select name="nationality" id="nationality">
            <option value="Indonesian" selected>Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select>
        <p>Language Spoken:</p>
        <input type="checkbox" id="lang-indonesia" name="language" value="Bahasa Indonesia">
        <label for="lang-indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" id="lang-english" name="language" value="English">
        <label for="lang-english">English</label><br>
        <input type="checkbox" id="lang-other" name="language" value="Other">
        <label for="lang-other">Other</label>
        <p>Bio:</p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>
