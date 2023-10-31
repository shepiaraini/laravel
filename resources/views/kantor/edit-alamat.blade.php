
<!DOCTYPE html>
<html>
    <head>
    @include('tools.header')  

   
    </head>
    <body class="skin-black">
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
                 
                    <!-- sidebar menu: : style can be found in sidebar.less -->
        @include('tools.sidebar')           
                </section>
                <!-- /.sidebar -->
            </aside>
            
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 class="text-center">
                       EDIT ALAMAT     
                    </h1>
               
                
                    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                    <form action="{{url ('update-alamat', $peg->id) }}" method="post">
                        {{csrf_field()}}
                                    <div class="box-body">
                                        <div class="form-group">
                                         
                                            <input type="Alamat Kantor" class="form-control" name="alamat_kantor" placeholder="Alamat Kantor" value="{{ $peg->alamat_kantor }}">
                                        </div>
                                        <div class="form-group">
                                            
                                            <input type="Kelurahan" class="form-control" name="kelurahan" placeholder="Kelurahan" value="{{ $peg->kelurahan }}">
                                        </div>
                                        <div class="form-group">
                                         
                                            <input type="Kecamatan" class="form-control" name="kecamatan" placeholder="Kecamatan" value="{{ $peg->kecamatan }}">
                                        </div>
                                        <div class="form-group">
                                        <input type="Kabupaten" class="form-control" name="kabupaten" placeholder="Kabupaten" value="{{ $peg->kabupaten }}">
                                        </div>
                                        <div class="form-group">
                                            
                                            <input type="Provinsi" class="form-control" name="provinsi" placeholder="Provinsi" value="{{ $peg->provinsi }}">
                                        </div>
                                        <div class="form-group">
                                    
                                            <input type="Kode Pos" class="form-control" name="kode_pos" placeholder="Kode Pos" value="{{ $peg->kode_pos }}">
                                        </div>
                                        <div class="form-group">
                                      
                                            <input type="RT" class="form-control" name="rt" placeholder="RT" value="{{ $peg->rt }}">
                                        </div>
                                        <div class="form-group">
                                      
                                            <input type="RW" class="form-control" name="rw" placeholder="rw" value="{{ $peg->rw }}">
                                        </div>
                                        <div class="form-group">
                    
                                            <input type="Kedudukan" class="form-control" name="kedudukan" placeholder="Kedudukan" value="{{ $peg->kedudukan }}">
                                            
</div>
                                    </div><!-- /.box-body -->
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Edit</button>
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