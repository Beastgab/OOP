<main>
  <article>
    <center>
        <table id="tabel" border="0" cellspacing="3">
        <caption>
            <h3>Klanten</h3>
        </caption>
        <thead>
        <?php
        include_once './connect.php';
        try {
            $sql = "SELECT * FROM klant";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $kolommen = $stmt->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e) {
            echo $e->getmessage();
        }    
        foreach($kolommen as $value =>$key){
            echo "<td><b>". $value . "</b></td>";
            }

            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            $bgcolor = true;
             $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo ($bgcolor ? "<tr bgcolor=#ccc>" : "<tr>");
            echo "<td>". $row['ID'] ."</td>" .
            "<td>". $row['ID'] , "</td>" .
            "<td>". $row['naam'] , "</td>" .
            "<td>". $row['adres'] , "</td>" .
            "<td>". $row['postcode'] , "</td>".
            "<td>". $row['woonplaats'] , "</td>".
            "<td>". $row['email'] , "</td></tr>";
            $bgcolor= ($bgcolor ? false:true);

            } 
        ?>
        </tbody>
        <tfoot>
    </center>           
    </article>   
</main>