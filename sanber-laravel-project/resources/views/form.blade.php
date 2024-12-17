<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Form</title>
</head>

<body>
    <header>
        <h1>Buat Account Baru</h1>
    </header>
    <main>
        <h2>Sign Up Form</h2>
        <form action="{{ route('welcome') }}" method="post">
            @csrf
            <div class="fname">
                <label for="fname">First name : </label>
                <br><br>
                <input type="text" name="fname">
            </div>
            <br>
            <div class="lname">
                <label for="lname">Last name : </label>
                <br><br>
                <input type="text" name="lname">
            </div>
            <br>
            <div class="gender">
                <label for="">Gender : </label>
                <br><br>
                <input type="radio" name="gender" value="male" id="male"> Male <br>
                <input type="radio" name="gender" value="female" id="female"> Female <br>
                <input type="radio" name="gender" value="other" id="other"> Other <br>
            </div>
            <br>
            <div class="nationality">
                <label for="">Nationality : </label> <br><br>
                <select name="nationality" id="">
                    <option value="indonesia">Indonesian</option>
                    <option value="korean">Korean</option>
                    <option value="english">English</option>
                </select>
            </div>
            <br>
            <div class="language-spoken">
                <label for="">Language Spoken : </label>
                <br><br>
                <input type="checkbox" value="indonesia" name="languages[]" id="indonesia"> Bahasa Indonesia <br>
                <input type="checkbox" value="english" name="languages[]" id="english"> English <br>
                <input type="checkbox" value="Other" name="languages[]" id="other"> Other <br>
            </div>
            <br>
            <div class="">
                <textarea name="bio" id="bio" rows="10" cols="30"></textarea>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </main>
</body>

</html>