<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Bai1.css"/>
    <?php ?>
</head>
<body>
    <form method="POST">
    <table>
        <tr>
            <td colspan="2" style="text-align:center;">Tiêu đề</td>
        </tr>
        <tr>
            <td>Mã hàng</td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td>Tên hàng</td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td>Hình thức thuê</td>
            <td>
                <select name="type" id="type" value="<?php echo $_POST['type']; ?>">
                    <option value="hours" <?php if ($_POST['type'] == 'hours') echo 'selected="selected"'; ?>>Giờ</option>
                    <option value="day" <?php if ($_POST['type'] == 'day') echo 'selected="selected"'; ?>>Ngày</option>
                    <option value="week" <?php if ($_POST['type'] == 'week') echo 'selected="selected"'; ?>>Tuần</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="text">
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <p style="text-align:center">
                    <button name="btn-cal" type="submit">Tính tiền</button>
                    <button name="btn-del" type="submit">Xóa</button>
                </p>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>