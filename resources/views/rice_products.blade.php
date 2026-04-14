<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Add Rice Products</h2>

            <form action="POST" action="products/store">
                @csrf

                <label>Name:</label>
                <input type="text" name="rice_name" required><br><br>
                <label>Price per-kilo:</label>
                <input type="number" name="price_pkilo" required><br><br>
                <label>Stock Quantiy:</label>
                <input type="text" name="stock_quant" required><br><br>
                <label>Description:</label>
                <input type="text" name="rice_desc" required><br><br>
                
                <button type="submit">Save</button>
            </form>
        
        
        </div>
    </div>
    
</body>
</html>