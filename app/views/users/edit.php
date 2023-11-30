<h2>Edit User</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
    <input type="hidden" name="user_id" value="<?php echo $data['row']['user_id']; ?>">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="user_email" value="<?php echo $data['row']['user_email']; ?>" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="user_password"></td>
        </tr>
        <tr>
            <td>FULL NAME</td>
            <td><input type="text" name="user_full_name" value="<?php echo $data['row']['user_full_name']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="textarea" name="user_alamat"></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="user_hp"></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="user_pos"></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><input type="text" name="user_role"></td>
        </tr>
        <tr>
        <tr>
            <td>AKTIF</td>
            <td><input type="text" name="user_aktif"></td>
        </tr>
        <td></td>
        <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>