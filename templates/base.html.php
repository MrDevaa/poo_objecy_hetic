<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    /* Styles de la table */
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }

    /* Styles des en-têtes */
    thead th {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        text-align: left;
        border-bottom: 2px solid #ddd;
    }

    /* Styles des cellules de données */
    tbody td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    /* Style de survol des lignes */
    tbody tr:hover {
        background-color: #f5f5f5;
    }

    /* Style pour les lignes impaires */
    tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }
</style>
    <header>
    <!-- <h1> first page<?php  echo $title?></h1>
    <h2><?= __DIR__ ?></h2> -->
    </header> 
    <!-- ProductLine -->
    <!-- <?php var_dump($lines); ?>  -->
     <!-- Offices -->
    <!-- <?php var_dump($office_name); ?> -->

    <table>
    <thead>
        <tr>
            <th>Product Line</th>
            <th>Text Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lines as $line) { ?>
            <tr>
                <td><?php echo $line['productLine']; ?></td>
                <td><?php echo $line['textDescription']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<table>
<thead>
        <tr>
            <th>Offices Codes</th>
            <th>City</th>
            <th>phone</th>
            <th>adresse</th>
            <th>state</th>
            <th>country</th>
            <th>poste code</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach ($office_name as $offices) { ?>
            <!-- <?php print_r($offices) ?> -->
            
            <tr>
                <td><?php echo $offices['officeCode']; ?></td>
                <td><?php echo $offices['city']; ?></td>
                <td><?php echo $offices['phone']; ?></td>
                <td><?php echo $offices['addressLine1']; ?></td>
                <td><?php echo $offices['state']; ?></td>
                <td><?php echo $offices['country']; ?></td>
                <td><?php echo $offices['postalCode']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>