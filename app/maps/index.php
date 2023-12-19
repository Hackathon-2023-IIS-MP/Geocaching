<?php

session_start();

/* Include the header of the page */
include $_SERVER["DOCUMENT_ROOT"] . "/tmpl/header.html.php";
?>

<!-- Content specific to the home page -->
<div class="container text-center mt-4">
    <div class="jumbotron">
        <!-- Logo -->
        <!-- <img src="/img/logo.ico" alt="Logo" class="logo"> -->


        <h1>Select a map</h1>

        <!-- text input for map title filter -->
        <div class="form-group mb-5" style="max-width: 300px;">
            <input type="text" class="form-control" id="mapTitle" placeholder="Filter by map title">
        </div>

        <!-- 
            Filtro della mappa per nome
            
            Cliccando nella tabella il nome della mappa si andrà a nella pagina pagina di configurazione della partita
            dove ad esempio potremo invitare giocatori e vedere le caratteristiche della mappa etc....

            Cliccando nella tabella il nome dell'autore andremo nella pagina profilo in cui potremo vedere anche altre mappe da lui create
         -->
        
        <!-- Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Map name</th>
                    <th>Author name</th>
                    <th>Times played</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="map.php?id=x">Map 1</a></td>
                    <td><a href="/users/?id=x">John Doe</a></td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="map.php">Map 2</a></td>
                    <td>John Doe</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="map.php">Map 3</a></td>
                    <td>John Doe</td>
                    <td>0</td>
                </tr>
            </tbody>

        </table>
        
    </div>
</div>

<?php
// FOOTER
include $_SERVER["DOCUMENT_ROOT"] . "/tmpl/footer.html.php";
?>

<!-- Content container ends -->
</div>
