<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
        <tr>
            <td>GOLONGAN</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optgol'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NO PELANGGAN</td>
            <td><input type="text" name="pel_no" required></td>
        </tr>

        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>
                <textarea name="pel_alamat" cols="20" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri" required></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran" required></td>
        </tr>
        <tr>
            <td>STATUS</td>
            <td><input type="text" name="pel_aktif" required></td>
        </tr>
        <tr>
            <td>ID USER</td>
            <td><input type="text" name="pel_id_user" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>