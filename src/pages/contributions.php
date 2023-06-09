<?php

require_once('src/config.php');

$headername = 'Contributions Table';

$contributions = mysqli_query($conn, "SELECT * FROM contributions");

$contributions_data = '';
foreach ($contributions as $data) {
    $contributions_data .=
        '<tr>
                                <td>' . $data['id'] . '</td>
                                <td>' . $data['email'] . '</td>
                                <td>' . $data['supporter_id'] . '</td>
                                <td>' . $data['supporter_deprecated_id'] . '</td>
                                <td>' . $data['contribution_id'] . '</td>
                                <td>' . $data['contribution_number'] . '</td>
                                <td>' . $data['total_amount'] . '</td>
                                <td>' . $data['is_paid'] . '</td>
                                <td>' . $data['is_recurring'] . '</td>
                                <td>' . $data['date_started'] . '</td>
                                <td>' . $data['recurring_amount'] . '</td>
                                <td>' . $data['billing_period'] . '</td>
                                <td>' . $data['created_time'] . '</td>
                            </tr>';
}

$table_row = '<tr>
                <th>#</th>
                <th>Email</th>
                <th>Supporter_id</th>
                <th>Supporter_deprecated_id</th>
                <th>Contribution_id</th>
                <th>Contribution_number</th>
                <th>Total_amount</th>
                <th>Is_paid</th>
                <th>Is_recurring</th>
                <th>Date_started</th>
                <th>Recurring_amount</th>
                <th>Billing_period</th>
                <th>Created_Time</th>
              </tr>';

echo '<table id="example" class="table table-striped table-bordered selection-multiple-rows">
    <thead>
    ' . $table_row . '
    </thead>
    <tbody>' . $contributions_data . '</tbody>
    <tfoot>
    ' . $table_row . '
    </tfoot>
</table>';
