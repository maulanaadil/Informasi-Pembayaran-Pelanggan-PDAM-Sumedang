<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Home</title>
    <link rel="icon"
          href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThulgclUKF43CMJXmugFDamn3N1jjqHAq5bFCzR9BapTuHyoM8dIWUnhG8CCwrK6bK62Q&usqp=CAU"
          type="image/x-icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--    JQUERY-->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"
            async
    ></script>
</head>
<body>
<section class="section">
    <div class="row p-4">
        <!-- card wrapper -->


        <!--        INPUT NO PELANGGAN-->
        <div class="col-md-12">
            <div class="card card-primary p-3">
                <!-- card header -->
                <div class="card-header">
                    <!-- card title -->
                    <i class="fa text-primary fa-tint">&nbsp;&nbsp;</i><h4>Info Pelanggan PDAM Sumedang</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                    <dd class="text-muted">Sebagai contoh masukan nomor pelanggan ini: 0101001002</dd>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa text-primary fa-users "></i>
                                </div>
                            </div>
                            <input type="text" id="txt_nopel" name="txt_nopel" class="form-control"
                                   placeholder="Masukan Nomor Pelanggan">
                            <div class="input-group-prepend">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="btn_submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <!--        DATA PELANGGAN-->
            <div class="col-md-12 isi">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image" src="assets/img/avatar/avatar-1.png"
                             class="rounded-circle profile-widget-picture">
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Tarif</div>
                                <div class="profile-widget-item-value"><span id="txt_tarif"></div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Cabang</div>
                                <div class="profile-widget-item-value"><span id="txt_cabang"></div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description pb-0">
                        <div class="profile-widget-name"><span id="txt_nama"></span>
                            <div class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div>
                                <span id="txt_nopel2"></span>
                            </div>
                        </div>
                        <b>Alamat :</b><br>
                        <p><span id="txt_alamat"></span></p>
                        <input type="text" id="temp-alamat" hidden readonly>
                    </div>
                </div>
            </div>

            <!--MAP-->
            <div class="col-md-12 isi-map">
                <div id="map">

                </div>
            </div>
        </div>

        <div class="col-md-8">
            <!--DATA DETAIL PELANGGAN-->
            <div class="col-md-12 isi">
                <div class="card card-info p-1">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="section-title mt-0">Data Pembayaran</div>
                        <table class="table table-bordered table-condensed table-sm table-striped ">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No Pelanggan</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Stand Awal</th>
                                <th scope="col">Stand Akhir</th>
                                <th scope="col">M<sup>3</sup></th>
                                <th scope="col">Tagihan</th>
                                <th scope="col">Tanggal Bayar</th>
                            </tr>
                            </thead>
                            <tbody id="data-pembayaran">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2021
        <div class="bullet"></div>
        Develop By <a href="https://github.com/maulanaadil">Maulana Adil</a>
    </div>
    <div class="footer-right">
        1.0.0
    </div>
</footer>
<script type="text/javascript">
    let no_pel;
    let map;
    let geocoder;
    let marker;
    var initialLat;
    var initialLong;
    var latlng;

    $(".isi").css("display", "none");
    $(".isi-map").css("display", "none");


    $("#btn_submit").click(function () {
        no_pel = $("#txt_nopel").val();

        showDataPelanggan();
        initialize();

    });


    function showDataPelanggan() {
        let txt_nama = $("#txt_nama");
        let txt_tarif = $("#txt_tarif");
        let txt_cabang = $("#txt_cabang");
        let txt_nopel = $("#txt_nopel2");
        let txt_alamat = $("#txt_alamat");

        $.ajax({
            type: "GET",
            url: "http://asindotama.com/nizaro/api_test/data_pelanggan.php?nopel=" + no_pel,
            beforeSend: function () {
                $("#btn_submit").prop("disabled", true);
            },
            success: function (response) {

                if (response == "") {
                    alert("Data Tidak ditemukan");
                    $("#btn_submit").prop("disabled", false);
                    return false;
                }
                $.each(response, function (i, data) {

                    txt_nama.text(data.nama);
                    txt_tarif.text(data.tarif);
                    txt_nopel.text(data.nopel);
                    txt_cabang.text(data.cabang);
                    txt_alamat.text(data.alamat);

                    $("#temp-alamat").val(data.alamat);

                });
                $(".isi").css("display", "inherit");
                $(".isi-map").css("display", "inherit");
                $("#btn_submit").prop("disabled", false);
                showDataPembayaran();
            }
        });
    }

    function showDataPembayaran() {
        let no = 1;
        $.ajax({
            type: "GET",
            url: "http://asindotama.com/nizaro/api_test/data_pembayaran.php?nopel=" + no_pel,
            beforeSend: function () {

            },
            success: function (response) {
                $("#data-pembayaran").empty();
                $(".isi").css("display", "inherit");
                $(".isi-map").css("display", "inherit");
                $.each(response, function (i, data) {
                    let data_pembayaran = '<tr><td>' + no++ + '</td><td>' + data.nopel + '</td><td>' + data.nama + '</td><td>' + data.st_awal + '</td><td>' + data.st_akhir + '</td><td>' + data.pakai + '</td><td> Rp.' + data.tagihan + '</td><td>' + data.tgl_bayar + '</td><td>';
                    $("#data-pembayaran").append(data_pembayaran);
                });
            }
        })
    }

    // Inisialisasi Map
    function initialize() {

        initialLat = initialLat ? initialLat : -6.836016101510702;
        initialLong = initialLong ? initialLong : 107.92931756829805;

        latlng = new google.maps.LatLng(initialLat, initialLong);
        var options = {
            zoom: 16,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("map"), options);

        geocoder = new google.maps.Geocoder();

        marker = new google.maps.Marker({
            map: map,
            draggable: false,
            position: latlng
        });

        google.maps.event.addListener(marker, "dragend", function () {
            var point = marker.getPosition();
            map.panTo(point);
            geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                }
            });
        });
    }

    $(document).ready(function () {
        //load google map
        initialize();

        var options = {
            zoom: 16,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("map"), options);
        geocoder = new google.maps.Geocoder();

         // Pointing location on google map
        $('#btn_submit').click(function (e) {
            var address = $("#temp-alamat").val();
            geocoder.geocode({'address': address}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                } else {
                    // alert("Geocode was not successful for the following reason: " + status);
                    console.log(status);
                }
            });
            e.preventDefault();
        });
    });


</script>
</html>

