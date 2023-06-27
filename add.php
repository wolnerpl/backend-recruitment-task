<?php require_once './partials/head.php'; ?>
<section class="add-user">
    <h1 class="mb-3">Add user</h1>
    <form class="form" method="POST" action="action/add-user.php">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="street" class="form-label">Street:</label>
            <input type="text" id="street" name="street" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="zipcode" class="form-label">Zip Code:</label>
            <input type="text" id="zipcode" name="zipcode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City:</label>
            <input type="text" id="city" name="city" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company:</label>
            <input type="text" id="company" name="company" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
<?php require_once './partials/footer.php';