<div class="row">
    <div class="form_container">
        <h2> ADD BOOKS </h2><br>
        <form action="add_books.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" placeholder="book name" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <input type="number" placeholder="book price" max="100" class="form-control" name="price" required>
            </div>
            <div class="form-group">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" name="qty" value="1" autocomplete="off" checked>1
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="qty" value="2" autocomplete="off">2
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="qty" value="3" autocomplete="off">3
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="qty" value="5" autocomplete="off">5
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="qty" value="10" autocomplete="off">10
                    </label>
                </div>
            </div>
            <div class="form-group">
                <input type="text" placeholder="author name" class="form-control" name="author" required>
            </div>
            <div class="form-group">
                <textarea rows='5' placeholder="decription" class="form-control" name="desc"></textarea>
            </div>
            <div class="form-group">
                <input type="text" placeholder="isbn" class="form-control" name="isbn" required>
            </div>
            <div class="form-group">
                Upload Image
                <input type="file" placeholder="upload image" class="form-input" id="file" name="img">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">ADD BOOK</button>
            </div>
        </form>
    </div>
</div>