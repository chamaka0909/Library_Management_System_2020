
<center>
<div class="ddata">
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
</div>
<a href="Subjects.html"><input type="button" class="btn1" value="Back"></a>
</center>

<?php

$files = scandir("Upload/uploads");
for ($a = 2; $a < count($files); $a++)
{
    ?>
	<html>
    <head>
    <link rel="stylesheet" href="style/down.css"/>
    </head>
	<center>
    <div class="ddata">
    <p>
        <?php echo $files[$a]; ?>

        <a href="Upload/uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
          </br>  <input type="button" class="btn1" value="Download">
        </a>

        <a href="delete.php?name=Upload/uploads/<?php echo $files[$a]; ?>" style="color: red;">
            <input type="button" class="btn2" value="Delete">
        </a>
    </p>
	</div>
	</center>
    </html>
    <?php
}
