<?php
/**
 * reports.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */


?>
<script type="text/javascript">
    $(document).ready(function() {
        $("table").DataTable({
            saveState: true,
            "order": [[ 0, "asc" ]],
            "scrollY":        "200px"
        })
    })
</script>

<style type="text/css">
    div.container {
        width: 80%;
    }
</style>

<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>

    <tfoot>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </tfoot>

    <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user->FirstName ?></td>
                <td><?php echo $user->LastName ?></td>
                <td><?php echo $user->Email ?></td>
                <td><?php echo $user->Password ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


