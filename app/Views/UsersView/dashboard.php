<?php require APPROOT . '/views/inc/navbar-admin.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>

<div>
    <h1>Dashboard</h1>

    <table class="table bg-white rounded shadow-sm  table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
            </tr>
        </thead>

        <?php $count = 0; ?>
        <?php foreach ($data['clients'] as $row ) : ?>
            
            <tbody>
                <tr scope="row">
                    <td><?php echo $row -> client_id ; ?></td>

                    <td><?php echo $row -> email ; ?></td>

                    <td><?php echo $row -> phone ; ?></td>

                    <td><?php echo $row -> Description ; ?></td>

                    <td><?php echo $row -> Date ; ?></td>
                </tr>
            </tbody>

        <?php $count ++ ; ?>
        <?php endforeach ; ?>
    </table>
</div>






<?php require APPROOT . '/views/inc/footer.php'; ?>
