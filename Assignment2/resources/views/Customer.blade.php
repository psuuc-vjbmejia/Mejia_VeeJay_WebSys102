
<!DOCTYPE html>
<html>
<head>
    <title>Customer</title>
</head>
<body>
    <h1>Customer Information</h1>
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
                <td>Address:</td>
                <td><input type="text" name="address" value="{{ $address ?? '' }}"></td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
</body>
</html>