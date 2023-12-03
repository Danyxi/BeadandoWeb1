<img class="hatterkep" src="./images/pizzahatter.png">
<button class="accordion">Pizzák</button>
<div class="panel">
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%">
            </thead>
            <?php
                $connection = mysqli_connect("mysql.omega:3306", "kkkdata", "Jonny3612");
                $db = mysqli_select_db($connection, 'kkkdata');

                $query = "SELECT kep, nev, ar FROM etlap WHERE altipus='Pizza'";
                $query_run = mysqli_query($connection, $query);
                
                while ($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <tr>
                        <td class="tdetlap"> <img class="termekkep" src="data:image/jpeg;base64,<?php echo base64_encode($row['kep']); ?>"/></td>
                        <td class="tdetlap"> <div class="termeknev"> <?php echo $row['nev']; ?> </div></td>
                        <td class="tdetlap"> <div class="termekar"> <?php echo $row['ar']."Ft"; ?></div></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </form>
</div>

<button class="accordion">Hamburgerek</button>
<div class="panel">
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%">
            <?php
            $connection = mysqli_connect("mysql.omega:3306", "kkkdata", "Jonny3612");
            $db = mysqli_select_db($connection, 'kkkdata');

            $query = "SELECT kep, nev, ar FROM etlap WHERE altipus='Hamburger'";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td class="tdetlap"><img class="termekkep" src="data:image/jpeg;base64,<?php echo base64_encode($row['kep']); ?>"/></td>
                    <td class="tdetlap"> <div class="termeknev"> <?php echo $row['nev']; ?> </div></td>
                    <td class="tdetlap"> <div class="termekar"> <?php echo $row['ar']."Ft"; ?></div></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>


<button class="accordion">Hotdogok</button>
<div class="panel">
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%">
            <?php
            $connection = mysqli_connect("mysql.omega:3306", "kkkdata", "Jonny3612");
            $db = mysqli_select_db($connection, 'kkkdata');

            $query = "SELECT kep, nev, ar FROM etlap WHERE altipus='Hotdog'";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td class="tdetlap"><img class="termekkep" src="data:image/jpeg;base64,<?php echo base64_encode($row['kep']); ?>"/></td>
                    <td class="tdetlap"> <div class="termeknev"> <?php echo $row['nev']; ?> </div></td>
                    <td class="tdetlap"> <div class="termekar"> <?php echo $row['ar']."Ft"; ?></div></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>

<button class="accordion">Tészták</button>
<div class="panel">
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%">
            <?php
            $connection = mysqli_connect("mysql.omega:3306", "kkkdata", "Jonny3612");
            $db = mysqli_select_db($connection, 'kkkdata');

            $query = "SELECT kep, nev, ar FROM etlap WHERE altipus='Tészta'";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td class="tdetlap"><img class="termekkep" src="data:image/jpeg;base64,<?php echo base64_encode($row['kep']); ?>"/></td>
                    <td class="tdetlap"> <div class="termeknev"> <?php echo $row['nev']; ?> </div></td>
                    <td class="tdetlap"> <div class="termekar"> <?php echo $row['ar']."Ft"; ?></div></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>

<button class="accordion">Sülhúsok</button>
<div class="panel">
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%">
            <?php
            $connection = mysqli_connect("mysql.omega:3306", "kkkdata", "Jonny3612");
            $db = mysqli_select_db($connection, 'kkkdata');

            $query = "SELECT kep, nev, ar FROM etlap WHERE altipus='Sülthús'";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td class="tdetlap"><img class="termekkep" src="data:image/jpeg;base64,<?php echo base64_encode($row['kep']); ?>"/></td>
                    <td class="tdetlap"> <div class="termeknev"> <?php echo $row['nev']; ?> </div></td>
                    <td class="tdetlap"> <div class="termekar"> <?php echo $row['ar']."Ft"; ?></div></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>

<button class="accordion">Gyrosok</button>
<div class="panel">
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%">
            <?php
            $connection = mysqli_connect("mysql.omega:3306", "kkkdata", "Jonny3612");
            $db = mysqli_select_db($connection, 'kkkdata');

            $query = "SELECT kep, nev, ar FROM etlap WHERE altipus='Gyros'";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td class="tdetlap"><img class="termekkep" src="data:image/jpeg;base64,<?php echo base64_encode($row['kep']); ?>"/></td>
                    <td class="tdetlap"> <div class="termeknev"> <?php echo $row['nev']; ?> </div></td>
                    <td class="tdetlap"> <div class="termekar"> <?php echo $row['ar']."Ft"; ?></div></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>

<button class="accordion">Egészséges ételek</button>
<div class="panel">
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%">
            <?php
            $connection = mysqli_connect("mysql.omega:3306", "kkkdata", "Jonny3612");
            $db = mysqli_select_db($connection, 'kkkdata');

            $query = "SELECT kep, nev, ar FROM etlap WHERE altipus='Egészséges'";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td class="tdetlap"><img class="termekkep" src="data:image/jpeg;base64,<?php echo base64_encode($row['kep']); ?>"/></td>
                    <td class="tdetlap"> <div class="termeknev"> <?php echo $row['nev']; ?> </div></td>
                    <td class="tdetlap"> <div class="termekar"> <?php echo $row['ar']."Ft"; ?></div></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>

<button class="accordion">Desszertek</button>
<div class="panel">
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%">
            <?php
            $connection = mysqli_connect("mysql.omega:3306", "kkkdata", "Jonny3612");
            $db = mysqli_select_db($connection, 'kkkdata');

            $query = "SELECT kep, nev, ar FROM etlap WHERE altipus='Desszert'";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td class="tdetlap"><img class="termekkep" src="data:image/jpeg;base64,<?php echo base64_encode($row['kep']); ?>"/></td>
                    <td class="tdetlap"> <div class="termeknev"> <?php echo $row['nev']; ?> </div></td>
                    <td class="tdetlap"> <div class="termekar"> <?php echo $row['ar']."Ft"; ?></div></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>

<button class="accordion">Szénsavas italok</button>
<div class="panel">
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%">
            <?php
            $connection = mysqli_connect("mysql.omega:3306", "kkkdata", "Jonny3612");
            $db = mysqli_select_db($connection, 'kkkdata');

            $query = "SELECT kep, nev, ar FROM etlap WHERE altipus='Szénsavas'";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td class="tdetlap"><img class="termekkep" src="data:image/jpeg;base64,<?php echo base64_encode($row['kep']); ?>"/></td>
                    <td class="tdetlap"> <div class="termeknev"> <?php echo $row['nev']; ?> </div></td>
                    <td class="tdetlap"> <div class="termekar"> <?php echo $row['ar']."Ft"; ?></div></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>

<button class="accordion">Szénsavmentes italok</button>
<div class="panel">
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%">
            <?php
            $connection = mysqli_connect("mysql.omega:3306", "kkkdata", "Jonny3612");
            $db = mysqli_select_db($connection, 'kkkdata');

            $query = "SELECT kep, nev, ar FROM etlap WHERE altipus='Szénsavmentes'";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td class="tdetlap"><img class="termekkep" src="data:image/jpeg;base64,<?php echo base64_encode($row['kep']); ?>"/></td>
                    <td class="tdetlap"> <div class="termeknev"> <?php echo $row['nev']; ?> </div></td>
                    <td class="tdetlap"> <div class="termekar"> <?php echo $row['ar']."Ft"; ?></div></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>

<button class="accordion">Alkoholos italok</button>
<div class="panel">
    <form action="" method="post" enctype="multipart/form-data">
        <table width="100%">
            <?php
            $connection = mysqli_connect("mysql.omega:3306", "kkkdata", "Jonny3612");
            $db = mysqli_select_db($connection, 'kkkdata');

            $query = "SELECT kep, nev, ar FROM etlap WHERE altipus='Alkoholos'";
            $query_run = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($query_run))
            {
                ?>
                <tr>
                    <td class="tdetlap"><img class="termekkep" src="data:image/jpeg;base64,<?php echo base64_encode($row['kep']); ?>"/></td>
                    <td class="tdetlap"> <div class="termeknev"> <?php echo $row['nev']; ?> </div></td>
                    <td class="tdetlap"> <div class="termekar"> <?php echo $row['ar']."Ft"; ?></div></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>

<br>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active2");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

<div>
    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/Y6MHE0-CQAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>