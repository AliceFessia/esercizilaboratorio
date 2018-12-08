<?php include("top.html"); ?>
<form action="signup-submit.php" method="post"><!-- metto method post altrimenti di default ,mi lascia get-->

<fieldset>
    <legend>New User Signup</legend>
    <p>
    <label class="left" for="name">Name :</label>
    <input type="text" name="Name" maxlength="16"><br>
    </p>
    <p>
    <label class="left" for="gender">Gender:</label>
    <label for="male">Male</label>
    <input type="radio" name="Gender" id="male" value="M">
    <label for="female">Female</label>
    <input type="radio" name="Gender" id="female" value="F" checked="checked"><br>
    </p>
    <p>
    <label class="left" for="name">Age:</label>
    <input type="text" name="Age" maxlength="2" size="6"><br>
    </p>
    <p>
    <label class="left" for="name">Personality Type:</label>
    <input type="text" name="Personality_Type" maxlength="4" size="6">
    <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp"> Don't know your type </a><br>
    </p>
    <p>
    <label class="left" for="favorite os">Favorite OS:</label>
<select name="Favorite_OS">
    <option>Windows</option>
    <option>Mac OS X</option>
    <option selected="selected">Linux</option>
</select><br>
    </p>
    <p>
    <label class="left" for="seeking age">Seeking Age:</label>
    <input type="text" name="Min" size="6" maxlength="2"> 
to: <input type="text" name="Max" size="6" maxlength="2"><br>
</p>
<p>
<input type="submit" value="Sign up">
    </p>
    </fieldset>
 </form>
<?php include("bottom.html"); ?>
    
    
    
   