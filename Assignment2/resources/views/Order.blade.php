<!DOCTYPE html>
<html>
<head>
    <title>Order</title>
</head>
<body>
    <h1>Order Information</h1>
    <form>
        <table>
            <tr>
                <td>Customer ID:</td>
                <td><input type="text" name="customer_id" value="{{ $customer_id ?? '' }}"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{ $name ?? '' }}"></td>
            </tr>
            <tr>
                <td>Order No:</td>
                <td><input type="text" name="order_no" value="{{ $order_no ?? '' }}"></td>
            </tr>
            <tr>
                <td>Date:</td>
                <td><input type="date" name="date" value="{{ $date ?? '' }}"></td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
</body>
</html>