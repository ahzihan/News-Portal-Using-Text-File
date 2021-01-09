<?php
if(isset($_POST['btn'])){
    
    $str="\n".$_POST["id"].' @ '.$_POST["head"].' @ '.$_POST["photo"].' @ '.$_POST["details"];
    $file= fopen('news.txt', 'a');
    fwrite($file, $str);
    fclose($file);
    
}


?>


<form action="" method="post">
    <table>
        <tr>
            <th>Heading</th>
            <td><input type="text" name="head"></td>
        </tr>
        <tr>
            <th>Photo</th>
            <td><input type="text" name="photo"></td>
        </tr>
        <tr>
            <th>Description</th>
            <td><textarea name="details" cols="30" rows="4"></textarea></td>
        </tr>
        <tr>
            <th>Category ID</th>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Add News"></td>
        </tr>
        
    </table>
</form>

