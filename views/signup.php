<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-8 form_container">
            <h2>SIGN UP</h2>
            <form action="signUp.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="contact" pattern="^[0-9]{10}$" placeholder="Contact"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="City">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>
</div>