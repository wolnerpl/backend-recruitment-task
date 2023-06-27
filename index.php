<?php require_once './partials/head.php'; ?>
<section class="users">
    <div class="clearfix"></div>
    <h1 class="mb-3">Users</h1>
    <div class="table-responsive">
        <table class="table table-dark table-striped mb-5">
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Company</th>
                <th><a href="add.php" class="btn btn-primary d-block">Add</a></th>
            </tr>
            <?php
                $file = file_get_contents('dataset/users.json');
                $data = json_decode($file, true);
                foreach ($data as $index => $user): ?>
                <tr>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['address']['street'] . ', ' . $user['address']['zipcode'] . ' ' .
                            $user['address']['city']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                    <td><?php echo $user['company']['name']; ?></td>
                    <td>
                        <form action="action/remove.php">
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <button type="submit" class="btn btn-danger" data-rel="remove">Remove</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>
<?php require_once './partials/footer.php';

