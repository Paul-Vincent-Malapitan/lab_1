<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
        <legend><h1>Product Information</h1></legend>
    <form action="/save" method="post">
            <input type="hidden" name= "id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
            
            <label>Product Name</label>
            <input type="text" name= "ProductName" placeholder="Name" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>"   >
            
            <label>Product Description</label>
            <input type="text" name= "ProductDescription" placeholder="Description" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>" >
            
            <label>Product Category</label>
            <select name="ProductCategory" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">

            <option value="Electronics"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Electronics' ? 'selected' : '' ?>>Electronics</option>
            <option value="Pet Supplies"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Pet Supplies' ? 'selected' : '' ?>>Clothing Apparel</option>
            <option value="Media"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Media' ? 'selected' : '' ?>>Home and Living</option>
            <option value="Food and Beverage"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Food and Beverage' ? 'selected' : '' ?>>Automotive</option>
            <option value="Health and Beauty"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Health and Beauty' ? 'selected' : '' ?>>Sports and Outdoor</option>
            <option value="Clothing and Accessories"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Clothing and Accessories' ? 'selected' : '' ?>>Toys and Games</option>
            <option value="Home and Kitchen Appliances"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Home and Kitchen Appliances' ? 'selected' : '' ?>>Books and Media</option>
            <option value="Auto Parts and Accessories"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Auto Parts and Accessories' ? 'selected' : '' ?>>Auto Parts and Accessories</option>
            <option value="Home Improvement"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Home Improvement' ? 'selected' : '' ?>>Subscription Boxes</option>
            <option value="Sporting Goods"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Sporting Goods' ? 'selected' : '' ?>>Hobbies and Collectibles</option>
            <option value="Personal Care"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Personal Care' ? 'selected' : '' ?>>Personal Care</option>
            <option value="Toys and Games"<?= isset($prod['ProductCategory']) && $prod['ProductCategory'] === 'Toys and Games' ? 'selected' : '' ?>>Office and School Supplies</option>

            </select>
            
            <label>Product Quantity</label>
            <input type="number" name= "ProductQuantity" placeholder="Quantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>" >
            
            <label>Product Price</label>
            <input type="text" name= "ProductPrice" placeholder="Price" value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>" >
            <br>
            
            <input type="submit" value="submit">
        </form>
</fieldset>
    <h1>Products</h1>
    <table border ="1">
        <tr>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Category</th>
            <th>Product Quantity</th>
            <th>Product Price</th>
            <th>Controls</th>
        </tr>
        <?php foreach($product as $pr):?>
            <tr>
                <td><?= $pr ['ProductName'] ?></td>
                <td><?= $pr ['ProductDescription'] ?></td>
                <td><?= $pr ['ProductCategory'] ?></td>
                <td><?= $pr ['ProductQuantity'] ?></td>
                <td><?= $pr ['ProductPrice'] ?></td>
                <td><a href="/delete/<?= $pr['id'] ?>">Delete</a> || <a href="/edit/<?= $pr['id'] ?>">Update</a></td>
            </tr>
        
        <?php endforeach; ?>
    </table>

    <h1>Product List</h1>
<ul>
    <?php foreach($product as $pr):?>
        <li>
            <h3>Product Name: </h3> <?= $pr ['ProductName'] ?>
            <br>
            <h3>Product Description: </h3> <?= $pr ['ProductDescription'] ?>
            <br>
            <h3>Product Category: </h3> <?= $pr ['ProductCategory'] ?>
            <br>
            <h3>Product Quantity: </h3> <?= $pr ['ProductQuantity'] ?>
            <br>
            <h3>Product Price: </h3> <?= $pr ['ProductPrice'] ?>
        </li>
        <br>
    <?php endforeach; ?>
</ul>

</body>
</html>