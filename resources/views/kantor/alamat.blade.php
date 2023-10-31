
<!DOCTYPE html>
<html>
    <head>
    @include('tools.header')  

   
    </head>
    <body class="skin-white">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                LAPORAN NOTARIS
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
                
        @include('tools.sidebar')           
                </section>
                <!-- /.sidebar -->
            </aside>
            
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 class="text-center">
                        Alamat Kantor
                       
                    </h1>
               
                    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                       
                     <div class="text-right">
                                            <a href="{{ url ('Tambah_Alamat')}}"class="btn btn-primary">Tambah</a>
                                        </div>
                                       
                         <div classs="card-body">
                            <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Alamat Kantor</th>
                                    <th>Kelurhan</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
                                    <th>Provinsi</th>
                                    <th>Kode Pos</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Kedudukan</th>
                                    <th>Aksi</th>
                                    </thead>
                                    
                                    @foreach ($dtalamat as $item)
                                    <tr>
                                    <td>{{ $item->alamat_kantor }}</td>
                                    <td>{{ $item->kelurahan }}</td>
                                    <td>{{ $item->kecamatan }}</td>
                                    <td>{{ $item->kabupaten }}</td>
                                    <td>{{ $item->provinsi }}</td>
                                    <td>{{ $item->kode_pos }}</td>
                                    <td>{{ $item->rt }}</td>
                                    <td>{{ $item->rw }}</td>
                                    <td>{{ $item->kedudukan }}</td>
                                    <td>
                                        <a href="{{url ('edit-alamat', $item->id)}}"><i class="edit btn btn-success edit">Edit</i></a> <a href="{{url ('delete-alamat', $item->id)}}"><i class="delete btn btn-danger">Delete</i></a>
                                    </td>
                                    </tr>
                                    

                                    @endforeach

                        </tbody></table>
                
                   
                </section>

                <!-- Main content -->
                <section class="content">

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        @include('tools.script')  
        

    </body>
</html>