
<!DOCTYPE html>
<html>
<head>
    <title>Item</title>
</head>
<body>
    <h1>Item Information</h1>
    <form>
        <table>
            <tr>
                <td>Item No:</td>
                <td><input type="text" name="item_no" value="{{ $item_no ?? '' }}"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{ $name ?? '' }}"></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="text" name="price" value="{{ $price ?? '' }}"></td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
</body>
</html>