
<!DOCTYPE html>
<html>
    <head>
    @include('tools.header')  

    
      
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
   
   .card-header {
    background-color: blue; /* Warna latar belakang biru pada header card */
    color: white; /* Warna teks putih pada header card */
}

.card-title small {
    color: white; /* Warna teks putih pada tag <small> dalam judul card */
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
                       INPUT WILAYAH   
                    </h1>
               
                
                    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                    <form action="{{url ('Simpan_Wilayah')}}" method="post">
                        {{csrf_field()}}
                        <div class="container-fluid">
                        <div class="row">
        <!-- left column -->
                           <div class="col-md-12">
                           <div class="card card-primary">
                           <div class="card-header">
                    <h2 class="card-title"><small style="color: white;">Input Wilayah</small></h2>
                </div>
            </div>
        </div>
    </div>
</div>
                                    <div class="box-body">
                                        <div class="form-group">
                                         
                                            <input type="text" class="form-control" name="id" placeholder="Kode Kedudukan">
                                        </div>
                                        <div class="form-group">
                                         
                                            <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
                                        </div>
                                        <div class="form-group">
                                         
                                            <input type="text" class="form-control" name="kabupaten" placeholder="kabupaten">
                                        </div>
                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="provinsi" placeholder="Provinsi">
                                        </div>
                                    </div><!-- /.box-body -->
                                    <div class="text-right">
                                        <button type="submit" class="custom-button">Simpan</button>
                                    </div>
                        
                                </form>
                            </div>
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