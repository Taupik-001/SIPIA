<style>
    .kete {
        visibility: hidden;
        /* visibility: visible; */
    }
</style>

<tr class="kete">
    <td>Keterangan</td>
    <td><textarea type="text" class="form-control" name="keterangan" id="inputket"></textarea></td>
</tr>

<script>
    let inputket = "JustFor That"
    document.getElementById("inputket").innerHTML = inputket
</script>


<tr>
    <td>Tanggal Upload</td>
    <td><input type="date" class="form-control" name="date" required="required" value=""></td>
</tr>
<script>
    let currentDate = new Date();
    let cDay = currentDate.getDate()
    let cMonth = currentDate.getMonth() + 1
    let cYear = currentDate.getFullYear()
    if (cMonth = "3") {
        cMonth = "Maret"
        console.log(cDay);
        console.log(cMonth);
        console.log(cYear);
    }
</script>

	
<?= $thisDayDate = date("d-m-y h:i:s"); ?>