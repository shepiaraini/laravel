
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
   .custom-button {
    background-color: blue; /* Warna latar belakang biru */
    color: white; /* Warna teks putih */
    padding: 10px 20px; /* Padding sesuaikan dengan kebutuhan Anda */
    border: none; /* Menghapus border */
    border-radius: 5px; /* Mengatur sudut border */
    text-decoration: none; /* Menghapus garis bawah pada tautan */
}

.custom-button:hover {
    background-color: darkblue; /* Warna latar belakang biru tua saat hover */
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
                        DATA NOTARIS 
                    </h1>
               
                
                    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                       <div class="card-header">
                         <div class="text-right">
                            
                         <a href="{{ url ('Tambah_Notaris') }}" class="custom-button">Tambah</a>
                         </div>
                                       
                         <div classs="card-body">

                            <table class="table table-bordered">
                                <thead class="thead-light">
                                <tr>
                                    <th>NO</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>KEDUDUKAN</th>
                                    <th>NO TELEPON</th>
                                    <th>EMAIL</th>
                                    <th>NO.SK/TANGGAL SK</th>
                                    <th>JENIS PRAKTIK </th>
                                    <th>LAMPIRAN FILE</th>
                                    <th>AKSI</th>
                                   
                                    

                                    </thead>
                                    @foreach ($dtnotaris as $item)
                                    <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->wilayah->kecamatan }}</td>
                                    <td>{{ $item->no_telepon }}</td> 
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->no_sk }}</td>
                                    <td>{{ $item->praktik->jenis_praktik }}</td>
                                    <td>
                                    <a href=" {{ asset('file4/'. $item->file ) }}" target="_blank" rel="noopener noreferrer">Lihat File</a> 
                            
                                    </td>
                                    <td>
                                     <a href="{{url ('delete-notaris', $item->id)}}"><i class="fas fa-trash-alt text-red"></i></a>
                                    </td>
                                    </tr>

                                    @endforeach
                        
                        </tbody></table>
                
                   
               

                </section><!-- /.content -->
                @include('tools.footer')
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        @include('tools.script')  
        

    </body>
</html>
