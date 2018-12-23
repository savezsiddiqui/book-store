<?php
$sql = "SELECT * FROM books;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<style>
.card-img-top{
    width: 180px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}
</style>

<div class="container">
    <div class="row">
        <?php if (empty($row)) { ?>
        <div>
            <center><h2>No Books Added Yet!</h2></center>
        </div>
        <?php 
    } else {
        do { ?>
        <div class="col-md-4">
            <div class="card" style="width: 18rem; margin: 20px;">
                <img class="card-img-top" src="uploads/<?php $img = $row['img_name'];
                                                        echo $img; ?>"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $row['name']; ?>
                    </h5>
                    <p class="card-text"><?php echo $row['desc']; ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>WRITTEN BY </strong>
                        <?php echo $row['author']; ?>
                    </li>
                    <li class="list-group-item">
                        <strong>PRICE($) </strong>
                        <?php echo $row['price']; ?>
                    </li>
                    <li class="list-group-item">
                        <strong>BOOKS LEFT </strong>
                        <?php echo $row['qty']; ?>
                    </li>
                </ul>
                <div class="card-body">
                    <a href="payment.php?isbn=<?php echo $row['isbn']; ?>" class="card-link">Purchase</a>
                </div>
            </div>
        </div>
        <?php 
    } while ($row = $result->fetch_assoc());
} ?>
    </div>
</div>