<h2>Tampilan Data Klien</h2>

    <?php 
    require_once "koneksi.php";
    $sql = "SELECT * FROM tbl_klien";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        ?>

        

        <div>
            <div>
                <table class="tampil">
                <tr>
                    <td>Id</td>
                    <td>Nama Klien</td>
                    <td>Tingkatan Klien</td>
                </tr>
            <?php while ($r = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $r['id'];?></td>
                    <td><?php echo $r['nama_klien'];?></td>
                    <td><?php echo $r['tingkatan_klien'];?></td>
                </tr>
            <?php } ?>
        </table>
            </div>
        </div>
        
    <?php } else { ?>
        <p>No data found.</p>
    <?php } ?>
