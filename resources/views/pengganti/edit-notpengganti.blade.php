
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
                      UPDATE DATA NOTARIS PENGGANTI     
                    </h1>
               
                
                    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                    <form action="{{ url ('update-notpengganti', $dt->id) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                                    <div class="box-body">
                                
                                        <div class="form-group">
                                    <input type="text" class="form-control" name="id" placeholder="Nomor Surat" value="{{ $dt->id }}">
                                </div>
                                <div class="form-group">
                                         
                                            <input type="Nama Lengkap" class="form-control" name="nama" placeholder="Nama" value="{{ $dt->notaris_lama }}">
                                        </div>
                                      
                                        <div class="form-group">
                                            
                                            <input type="No Telepon" class="form-control" name="waktu_cuti" placeholder="No Telepon" value="{{ $dt->waktu_cuti }}">
                                        </div>
                                      
                                    
                                        <div class="form-group">
                    
                                            <input type="Kedudukan" class="form-control" name="notaris_pengganti" placeholder="Notaris Pengganti" value="{{ $dt->notaris_pengganti }}">
                                    </div>
                                    </div>
                                          <div class="form-group">
                    
                                            <input type="date" class="form-control" name="tanggal_pelantikkan" placeholder="Notaris Pengganti" value="{{ $dt->tanggal_pelantikkan }}">
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleInputFile">Lampiran File</label>
                                            <input type="file" id="file" name="file"> 
                                        </div>
                                        
                                    </div><!-- /.box-body -->
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">update</button>
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