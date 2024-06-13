<h2>Tampilan Data Klien</h2>

    <?php 
    require_once "koneksi.php";
    $sql = "SELECT * FROM tbl_klien";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        ?>

        

        <div>
            <div class="input">
                <a href="index_admin.php?page=input_klien">Masukkan Klien Baru</a>
            </div>
            <div>
                <table class="tampil">
                <tr>
                    <td>Id Klien</td>
                    <td>Nama Klien</td>
                    <td>Tingkatan Klien</td>
                    <td></td>
                    <td></td>
                </tr>
            <?php while ($r = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $r['id'];?></td>
                    <td><?php echo $r['nama_klien'];?></td>
                    <td><?php echo $r['tingkatan_klien'];?></td>
                    <td>
                        <a href="index_admin.php?page=edit_klien&id=<?php echo $r['id'];?>">Edit</a>
                    </td>
                    <td>
                        <a href="index_admin.php?page=delete_klien&id=<?php echo $r['id'];?>" onclick="return confirm('Are you sure you want to delete this Klien?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
            </div>
        </div>
        
    <?php } else { ?>
        <p>No data found.</p>
    <?php } ?>
