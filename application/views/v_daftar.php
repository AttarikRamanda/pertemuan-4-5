<?php if(!empty($Kode)){echo "kode : " .$kode. "<br/>"; }?>
<?php if(!empty($nama)){echo "nama : " .$nama. "<br/>"; }?>
<?php if(!empty($sks)){echo "sks : " .$sks. "<br/>"; }?>
<?php  echo validation_errors(); ?>
<?php echo form_open('daftar/cetak'); ?>
<center>
    
        <table>
            <tr>
                <th colspan="3">form input mata kuliah </th>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <td>:</td>
                <td> 
                    <input type="text" name="kode" id="kode">
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td> 
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>

            <tr>
                <th>Sks</th>
                <td>:</td>
                <td> 
                    <input type="text" name="sks" id="sks">
                </td>
            </tr>
            <tr>
                <td>
            <button type="submit" >submit now</button>
</td>
            </tr>
</table>


</form>
