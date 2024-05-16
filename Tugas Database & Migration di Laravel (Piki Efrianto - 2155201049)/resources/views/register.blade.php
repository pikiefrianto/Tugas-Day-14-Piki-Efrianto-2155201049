<!DOCTYPE html>
<html>
<head>
<title>Form</title>
</head>
<body style="background-color: whitesmoke">
<div class="container" style="margin: 30px;">
<h1>Buat Account Baru!</h1>
<h2>Sign Up Form</h2>

<form action="{{ route('welcome_') }}" method="POST">
  @csrf
    <label for="firstname">First name:</label><br><br>
    <input type="text" name="firstname" placeholder="First Name" required><br><br>
    <label for="lastname">Last name:</label><br><br>
    <input type="text" name="lastname" placeholder="Last Name" required><br>

    <p>Gender:</p>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="male" name="gender" value="male">
        <label class="form-check-label" for="male">Male</label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="female" name="gender" value="female">
        <label class="form-check-label" for="female">Female</label>
      </div><br>

    <label for="country">Nationality:</label><br><br>
    <select name="country" id="country">
        <option value="indonesia">Indonesia</option>
        <option value="palestina">Palestina</option>
        <option value="malaysia">Malaysia</option>
    </select>

    <p>Language Spoken:</p>
    <input type="checkbox" id="bahasaindonesia" name="Bahasa Indonesia">
    <label for="bahasaindonesia">Bahasa Indonesia</label><br>
    <input type="checkbox" id="english" name="English">
    <label for="english">English</label><br>
    <input type="checkbox" id="other" name="Other">
    <label for="other">Other</label><br><br>

    <label for="bio">Bio</label><br>
    <textarea name="Biodata" id="biodata" cols="50" rows="5"></textarea><br>
    <input type="submit" value="Sign Up">
</form>
</div>
</body>
</html>