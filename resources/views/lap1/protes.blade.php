
<!DOCTYPE html>
<html>
    <head>
    @include('tools.header')  
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
    .thead-light {
        background-color: #007bff; /* Ganti dengan warna latar belakang yang Anda inginkan */
        color: white; /* Ganti dengan warna teks yang Anda inginkan */
    }
    </style>
    <!-- Tambahkan skrip Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    .custom-label {
    background-color: blue; /* Ganti dengan warna latar belakang yang Anda inginkan */
    color: white; /* Ganti dengan warna teks yang Anda inginkan */
    padding: 5px 10px; /* Sesuaikan dengan kebutuhan Anda */
    border-radius: 3px; /* Mengatur sudut border */
}
</style>

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
                        HALAMAN PROTES
                    </h1>
               
                
                    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                       <div class="card-header">
                         <div class="text-right">
                            
                         <a href="{{ url ('Tambah_Protes') }}"></a>
                         </div>
                                       
                         <div classs="card-body">
                            <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>NO</th>
                                    <th>VALIDASI</th>
                                    <th>KEDUDUKAN</th>
                                    <th>NAMA NOTARIS</th>
                                    <th>NOMOR</th>
                                    <th>DAFTAR SURAT PROTESL </th>
                                    <th>TGL.NO AKTA.NO REPORTORIUM</th>
                                    <th>TANGGAL</th>
                                    <th>STATUS</th>

                                    </thead>
                                    @foreach ($dtprotes as $item)

                                    <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                  <a href="{{url('validasi', ['id' => $item->id]) }}">
                                  <i class="fa fa-check-circle text-success"></i> <!-- Icon untuk tanda centang (Lengkap) -->
                                  </a>

                                  <a href="{{url('validasiNO', ['id' => $item->id]) }}">
                                  <i class="fa fa-times-circle text-danger"></i> <!-- Icon untuk tanda centang (Lengkap) -->
                                  </a>
                                 
                                </td>
                                    <td>{{ $item->wilayah->kecamatan }}</td>
                                    <td>{{ $item->notaris->nama}}</td>
                                    <td>{{ $item->nomor }}</td>
                                    <td>{{ $item->daftar_srt }}</td>
                                    <td>{{ $item->tgl_no }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    @if($item->status == 1)
                                     <td>
                                    <label class="label label-warning">Belum Diterima</label>
                                     </td>
                                      @elseif($item->status == 2)
                                       <td>
                                   <label class="label label-danger">Tidak Lengkap</label>
                                    </td>
                                    @else
                                  <td>
                                  <label class="label label-primary">Diterima</label>
                                   </td>
                                @endif

                                
                                </tr>
                                    @endforeach
                        </tbody></table>

                        

                         <div class="text-right">
                             <a href="{{ url('cetak-protes') }}" class="btn btn-primary">
                               <i class="fas fa-print"></i> Cetak
                             </a>
                        </div>
                   
                </section>
                @include('tools.footer')
                <!-- Main content -->
                <section class="content">

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        @include('tools.script')  
        

    </body>
</html>