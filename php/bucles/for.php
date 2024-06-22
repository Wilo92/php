<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <label for="">Dia</label>
        <select name="" id="">

            <option value="">1</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo " <option>$i</option>";
            }
            ?>




        </select>
        <label for="">MES</label>
        <select name="" id="">

            <option value="">1</option>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo " <option>$i</option>";
            }
            ?>




        </select>

        <label for="">aÑO</label>
        <select name="" id="">

            <option value=""></option>
            <?php
            for ($i = 1950; $i <= 2024; $i++) {
                echo " <option>$i</option>";
            }
            ?>




        </select>

        <label for="">aÑO</label>
        <select name="" id="">

            <option value=""></option>
            <?php
            for ($i = 2024; $i >= 1950; $i--) {
                echo " <option>$i</option>";
            }
            ?>




        </select>

    </form>
</body>

</html>