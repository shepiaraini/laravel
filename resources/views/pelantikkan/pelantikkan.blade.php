
<!DOCTYPE html>
<html>
    <head>
    @include('tools.header')  

    <style>
    .thead-light {
        background-color: #007bff; /* Ganti dengan warna latar belakang yang Anda inginkan */
        color: white; /* Ganti dengan warna teks yang Anda inginkan */
    }
    </style>
    <!-- Tambahkan skrip Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<!-- Skrip Bootstrap (ganti dengan URL sesuai proyek Anda) -->
<link rel="stylesheet" href="path-to-bootstrap/bootstrap.min.css">

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
                            <img src="template/img/Logopengayoman.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                 
                    <!-- sidebar menu: : style can be found in sidebar.less -->
        @include('tools.sidebar')           
                </section>
                <!-- /.sidebar -->
            </aside>
            
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 class="text-center">
                        JADWAL PELANTIKKAN
                    </h1>
        
                    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                       <div class="card-header">
                         <div class="text-right">
                            
                         <a href="{{ url ('Tambah-Pelantikkan') }}" class="btn btn-primary">Tambah</a>
                         </div>
                                       
                         <div classs="card-body">
                            <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA </th>
                                    <th>KEDUDUKAN </th>
                                    <th>PELANTIKKAN </th>
                                    <th>WAKTU</th>
                                    <th>AKSI</th>
                            </thead>
                                  @foreach ($dtpelantikkan as $item)
                                    <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->notpengganti->nama }}</td>
                                    <td>{{ $item->wilayah->kecamatan }}</td>
                                    <td>{{ $item->tanggal_pelantikkan }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{url ('edit-pelantikkan', $item->id)}}"><i class="fas fa-edit text-primary"></i></a>
                                        <a href="{{url ('delete-pelantikkan', $item->id)}}"><i class="fas fa-trash-alt text-red"></i></a>
                                        
                                    </td>
                                    </tr>

                                    @endforeach
                                
                        </tbody></table>
                
                   
                </section>

                <!-- Main content -->
                <section class="content">
                @include('tools.footer')
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        @include('tools.script')  
        

    </body>
</html>