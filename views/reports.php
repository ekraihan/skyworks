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
    });

    $(document).ready(function ()
    {
//        var data = <?php //print $data ?>
//        var labels = <?php //print $labels ?>
//        console.log(data,labels);
        var pie = new RGraph.Pie('pie-chart', <?php print $data ?>)
            .set('exploded', [15])
            .set('labels', <?php print $labels ?>)
            .draw();
    })
</script>

<style type="text/css">
    div.container {
        width: 80%;
    }
</style>

<a download="tickets.csv" href="reports/tickets.csv">Download Ticket Report</a><br>
<a download="users.csv" href="reports/users.csv">Download User Report</a><br>

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

<canvas id="pie-chart" width="400" height="300">[No canvas support]</canvas>


