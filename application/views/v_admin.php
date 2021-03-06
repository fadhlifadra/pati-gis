<!-- <div id="mapid" style="width: 100%; height: 500px;"></div>

<script>
    var map = L.map('mapid').setView([-6.75347, 111.03999], 15);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
    }).addTo(map);
</script> -->

<iframe width="100%" height="520" frameborder="0" src="https://fadhlifadra.carto.com/builder/10d97ff9-58e1-40bb-bf9e-509aef7eb48c/embed" 
allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>

<table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Carto</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>Kabupaten/Kota</th>
                    <th>Provinsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data_gis as $coba)
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $coba->cartodb_id;?></td>
                    <td><?php echo $coba->namobj;?></td>
                    <td><?php echo $coba->wadmkc;?></td>
                    <td><?php echo $coba->wadmkk;?></td>
                    <td><?php echo $coba->wadmpr;?></td>
                </tr>
            </tbody>
        </table>

    <script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
    </script>