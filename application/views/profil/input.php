<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Input Data Album </h1>
<form method="post" action="<?= base_url('admin/index'); ?>">
    <p>JUDUL
        <input type="text" name="judul" id="judul">
    </p>
    <p>ISI BERITA<br>
        <textarea name="deskripsi" style="width:450px; height:80px" id="deskripsi"></textarea>
    </p>
    <input type="submit" width="120" height="24" name="simpan" value="POSTING     BERITA">

</form>