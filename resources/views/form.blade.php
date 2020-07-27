<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="shortcut icon" type="image/jpg" href="/favicon.jpg">
    <title>Survey</title>
</head>
<body>
<div class="nav">
    <h2>L.A.X Society limited</h2>
</div>
<p>Luxury Acute and Xtreme Society Limited, mostly referred to as LAX Society, is an agent for entertainers and athletes located in Jamaica. The abbreviated L.A.X Society aims to improve individuals who are looking to showcase their talent to the world by guiding them, creating the platforms, and presenting our clients to opportunities that will help them to become legends in the area they so choose to excel. We understand the strain of finding someone who takes your abilities seriously and is willing to guide you on the right path; for that reason, we have established this venture as a helping hand.  Please fill out the following form to be a part of our PR Team
</p>
<hr>
<div class="form-body">
    <form action="form" method="POST" autocomplete="off">
        <label>Name:</label>&nbsp;&nbsp;<span>*</span>
        @csrf
        <br>
        <br>
        <input type="text" class="Name" name="name">
        <br>
        <br>
        <label>Age:</label>&nbsp;&nbsp;<span>*</span>
        <br>
        <br>
        <input type="text" class="Age" name="age">
        <br>
        <br>
        <label>Occupation:</label>&nbsp;&nbsp;<span>*</span>
        <br>
        <br>
        <input type="text" class="Ocup" name="occupation">
        <br>
        <br>
        <label>If you are a student, please identify your institution:</label>&nbsp;&nbsp;<span>*</span>
        <br>
        <br>
        <input type="text" class="Institute" name="institute">
        <br>
        <br>
        <label>Telephone number:</label>&nbsp;&nbsp;<span>*</span>
        <br>
        <br>
        <input type="number" class="tele" name="tele">
        <br>
        <br>
        <label>Do yo have any experience in Public Relation? (If yes, please state)</label>
        <br>
        <br>
        <textarea type="text" class="para1" name="summary1" row="8"></textarea>
        <br>
        <br>
        <label>How will your presence impact the L.A.X Public Relation team?</label>
        <br>
        <br>
        <textarea type="text" class="para2" name="summary2" row="8"></textarea>
        <br>
        <br>
        <button type="submit" class="btn-survey">Submit</button>
    </form>
</div>
</body>
</html>
