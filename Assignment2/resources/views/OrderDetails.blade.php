<!-- resources/views/orderdetails.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
</head>
<body>
    <h1>Order Details Information</h1>
    <form>
        <table>
            <tr>
                <td>Trans No:</td>
                <td><input type="text" name="trans_no" value="{{ $trans_no ?? '' }}"></td>
            </tr>
            <tr>
                <td>Order No:</td>
                <td><input type="text" name="order_no" value="{{ $order_no ?? '' }}"></td>
            </tr>
            <tr>
                <td>Item ID:</td>
                <td><input type="text" name="item_id" value="{{ $item_id ?? '' }}"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{ $name ?? '' }}"></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="text" name="price" value="{{ $price ?? '' }}"></td>
            </tr>
            <tr>
                <td>Quantity:</td>
                <td><input type="text" name="qty" value="{{ $qty ?? '' }}"></td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
</body>
</html>