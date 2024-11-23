<?php

function get_all_products($conn) {
    $sql = "SELECT * FROM products";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt ->rowCount() > 0) {
        $products = $stmt -> fetchAll();
    } else {
        $products = 0;
    }

    return $products;
}

?>
