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
            "scrollY": "200px"
        })
    });

    $(document).ready(function ()
    {
        var data = <?php print $ticket_data; ?>;
        if (data) {
            data = data.map(o => parseInt(o.ProductCount))
        }

        var labels = <?php print $ticket_data; ?>;
        if (labels) {
            labels = labels.map((o,i) => o.ProductName + ": " + data[i])
        }

        new RGraph.SVG.Pie({
            id: 'pie-chart',
            data: data,
            options: {
                labels: labels,
                title: "Open Tickets Grouped by Product",
                exploded: 1.5
            }

        }).roundRobin();

    })
</script>

<style type="text/css">
    div.container {
        width: 80%;
    }
</style>

<a download="tickets.csv" href="reports/tickets.csv">Download Ticket Report</a><br>
<a download="users.csv" href="reports/users.csv">Download User Report</a><br><br>

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
<br><br>
<div id="pie-chart" style="width: 850px; height: 350px" ></div>