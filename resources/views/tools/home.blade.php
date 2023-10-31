
<!DOCTYPE html>
<html>
    <head>
    @include('tools.header')
      
    <style>
    
    /* styles.css */
.header {
    background-color: #007bff; /* Change the background color to your desired color */
    color: white; /* Change the text color to your desired color */
    /* Add more CSS styles as needed */
}
</style>

    
    </head>
    <body class="skin-white">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
            MPDN
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            @include('tools.navbar')
      
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="template/img/Logopengayoman.png" class="img-circle" alt="User Image" >
                        </div>
                        <div class="pull-left info">
                            <p></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                   
                  
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    @include('tools.sidebar')

                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
               
                <section class="content-header">
                    <h1>
                        DASHBOARD  
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                       
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <h4 class="text-center">
                    SISTEM PENERIMAAN LAPORAN BULANAN NOTARIS KANTOR WILAYAH KEMENTRIAN HUKUM DAN HAM KALIMANTAN SELATAN
                    </h4>
                    <!-- START ALERTS AND CALLOUTS -->
                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-danger">
                                <div class="box-header">
                                   
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="alert alert-danger alert-dismissable">
                                        <i class=""></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <b></b> Selamat datang di halaman utama Laporan Bulanan Notaris Kantor Wilayah Kementrian Hukum dan Ham Kalimantan Selatan. Silahkan gunakan sistem sesuai dengan kebutuhan. </div>
                                    <div class="alert alert-info alert-dismissable">
                                        <i class="">Sisitem Penerimaan Laporan Bulanan Notaris?</i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <b></b> Sistem penerimaan laporan bulanan notaris adalah prosedur yang digunakan oleh pihak berwenang, seperti badan regulasi atau lembaga yang mengawasi pekerjaan notaris, untuk menerima, memproses, dan menilai laporan bulanan yang disampaikan oleh notaris.
                                    </div>
                                    <div class="alert alert-warning alert-dismissable">
                                        <i class=""></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <b></b> Laporkan Salinan Akta Sebelum Batas Waktu!!!
                                                Jika Dalam Kurung Waktu Satu Minggu Laporan Belum Diterima, Kirimkan Ulang Laporan.
                                    </div>
                                    <div class="alert alert-success alert-dismissable">
                                        <i class=""></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <b></b> TERIMA KASIH 
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-6">
                            <div class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-bullhorn"></i>
                                    <h3 class="box-title">MAJELIS PENGAWAS DAERAH NOTARIS</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="callout callout-danger">
                                        <h4>MPDN ?</h4>
                                        <p>Majelis Pengawas Daerah Notaris (MPDN) adalah sebuah lembaga pengawasan dan pengendalian yang ada di tingkat daerah yang bertugas untuk mengawasi, mengendalikan, dan memberikan rekomendasi terkait aktivitas notaris di wilayah hukumnya. MPDN biasanya beroperasi di bawah pengawasan Kementerian Hukum dan Hak Asasi Manusia atau lembaga pemerintah terkait di suatu negara.</p>
                                    </div>
                                    <div class="callout callout-info">
                                        <h4></h4>
                                        <p>MPDN bertanggung jawab untuk memastikan bahwa notaris yang beroperasi di wilayahnya menjalankan tugas dan tanggung jawab mereka sesuai dengan hukum dan peraturan yang berlaku. Mereka memeriksa dan mengawasi aktivitas notaris, termasuk pembuatan akta otentik, penanganan dokumen hukum, dan pelayanan notaris lainnya.</p>
                                    </div>
                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div> <!-- /.row -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        @include('tools.script')
       

    </body>
</html>