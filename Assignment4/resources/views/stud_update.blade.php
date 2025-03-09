<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/edit/<?php echo $users[0]->id ?>" method="post">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="stud_name" value="<?php $users[0]->name; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Update student">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>