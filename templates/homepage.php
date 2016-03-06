<ul class="nav nav-pills">
    
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
    <li><a href="changepass.php"><strong>Change Password</strong></a></li>
</ul>

<h2><strong>Hi , <?= $name["name"]?></strong></h2> 

<h3>Choose a semester</h3>

<form action = "controller.php" method="post">
	<fieldset>
	<div class="form-group">
            <select class="form-control" name="semester">
                <option value=''>semester</option>
                <?php
                    foreach($semesters as $semester)
                    {
                        
                        print("<option value='{$semester["semester"]}'>{$semester["semester"]}</option>\n");
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">show grades</button>
        </div>
	</fieldset>
</form>
