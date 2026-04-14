<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
</head>
<body>
        <div class="container">
            <div class="card">
                <h1>Rice List</h1>

                <table>
                    <tr>
                        <th>Name</th>
                        <th>Price per Kilo</th>
                        <th>Stock Quantity</th>
                        <th>Description</th>
                    </tr>
                    @foreach(4products as $product)
                    <tr>
                        <td>{{$product->rice_name}}</td>
                        <td>{{$product->price_pkilo}}</td>
                        <td>{{$product->stock_quant}}</td>
                    </tr>
                    
                </table>

            </div>
        </div>

</body>
</html>