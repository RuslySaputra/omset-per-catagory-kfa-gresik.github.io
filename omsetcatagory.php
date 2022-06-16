<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Omset Per Catagory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php

    $sumber = 'http://gsx2json.com/api?id=1GIArRuxGbAwcpT9ianK9wJnLQ02MEyayxR8gWBZ184A&sheet=DataCatagory';
    $konten = file_get_contents($sumber);
    $data = json_decode($konten, true);

    ?>

    <h1 class="text-center mt-3">Omset Per Catagory</h1>
    <h3 class="text-center mt-3">
        <p id="demo">
    </h3>
    <div class="container">
        <div class="row">
            <?php foreach ($data['rows'] as $row) {
            ?>
                <div class="col-3 mt-5">
                    <div class="card shadow-lg text-bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">
                            <?php echo $row['Catagory'] ?>
                        </div>
                        <div class="card-body">
                            <h7 class="card-title">Tunai :
                                <?php echo $row['Tunai'] ?>
                            </h7><br>
                            <h7 class="card-title">Kredit :
                                <?php echo $row['Kredit'] ?>
                            </h7>
                            <hr>
                            <h5 class="card-title">Total :
                                <?php echo $row['Total'] ?>
                            </h5>
                            <h5 class="card-title">Gwh / Month:
                                <?php echo $row['GWHMD'] ?>
                            </h5>
                            <h5 class="card-title">Gwh / Year:
                                <?php echo $row['GWHYD'] ?>
                            </h5>
                            <h5 class="card-title">AP :
                                <?php echo $row['AP'] ?>
                            </h5>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script>
            const month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            const d = new Date();
            d.setDate(d.getDate() - 1);
            let name = month[d.getMonth()];
            document.getElementById("demo").innerHTML = "Periode " + name;
        </script>
</body>

</html>