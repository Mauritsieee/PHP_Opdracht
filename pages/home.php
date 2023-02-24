<div class="container">
    <div class="row">

        <div class="col-9 mt-3">
            <h1>Alle producten</h1>
        </div>
        <div class="col-3">
            <select id="filterSelector" class="form-select w-100 mt-5" onchange="updateFilter()">
                <?php
$sql = "SELECT * from categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    if (isset($_GET["category"]) && $_GET["category"] === $row["category"]) {
        $selected = 'selected';
    } else {
        $selected = '';
    }

    $name = $row["category"];
    if ($row["category"] == 'all') {
        $name = "Selecteer een categorie";
    }

    echo '<option value="'.$row["category"].'" '.$selected.'>'.$name.'</option>';
  }
}
                ?>
            </select>
        </div>

        <?php

$filterSQL = '';
if (isset($_GET["category"]) && $_GET["category"] !== 'all'){
    $filterSQL = " WHERE category='".$_GET["category"]."'";
}
$sql = "SELECT * from products".$filterSQL;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '
    <div class="col-12 col-md-6 col-lg-3">
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">'.$row["name"].'</h5>
                    <p class="card-text">'.$row["description"].'</p>
                    <a href="#" class="btn btn-primary">€'.$row["price"].'</a>
                </div>
            </div>
        </div>
    ';
  }
} else {
  echo "0 results";
}
?>
    </div>
</div>