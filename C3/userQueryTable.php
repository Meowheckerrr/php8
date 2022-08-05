<?php require "../head.php";?>

<form method="POST" action="../C8/userOutput.php">

    Male<input type="radio" name="gender" value="male">
    female<input type="radio" name="gender" value="female"> 

    <p>Hey, Where are you from ？ </p>
    <select name="country">
        <option value = "meow" >苗栗國</option>
        <option value = "china">China </option>
        <option value = "taiwan">Taiwan</option>
    </select></br>

    <input type="checkbox" name="cat1" value="meow1">meow1</br>
    <input type="checkbox" name="cat2" value="meow2">meow2 </br>
    <input type="checkbox" name="cat3" value="meow3">meow3</br>

    <p>Select songs which you love to listen to.</P> 
    <select name="song[]"  multiple="multiple" size = "3">  <--size attribute will display number of options.>
        <option value="song1">寫完這首歌我就會放下妳了</option>
        <option value="song2">孤勇者</option>
        <option value="song3">see you again</option>
        <option value="song4">stay</option>
    </select>

</br>

    <input type="submit" value="send"> 

</form>


<?php require "../tail.php";?>