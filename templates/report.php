<ul class="nav nav-pills"> 
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
    <li><a href="changepass.php"><strong>Change Password</strong></a></li>
</ul>

<table class="table table-striped">

    <thead>
        <tr>
            <th>Exam</th>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
    </thead>

    <tbody>
	<?php $sum = 0?>
    <?php foreach($grades as $grade): ?>
        <tr>
            <td><?= $grade["exam"] ?></td>
            <td><?= $grade["subject"]?></td>
            <td><?= $grade["marks"]?></td>
            <?php $sum = $sum + $grade["marks"]?>
        </tr>
    <?php endforeach?>
	<tr>
		<td>TOTAL</td>
		<td></td>
		<td><?= $sum?></td>
	</tr>        
    </tbody>

</table>
<ul class="nav nav-pills">
	<li><a href="index.php"><strong>Back</strong></a></li>
</ul>
