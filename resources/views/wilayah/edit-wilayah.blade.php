
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
                       EDIT WILAYAH  
                    </h1>
               
                
                    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                    <form action="{{url ('update-wilayah', $peg->id) }}" method="post">
                        {{csrf_field()}}
                                    <div class="box-body">
                                        <div class="form-group">
                                         
                                            <input type="text" class="form-control" name="id" placeholder="Kode Kedudukan" value="{{ $peg->id }}">
                                        </div>
                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="{{ $peg->kecamatan }}">
                                        </div>
                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="kabupaten" placeholder="Kabupaten" value="{{ $peg->kabupaten }}">
                                        </div>
                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" value="{{ $peg->provinsi }}">
                                        </div>
                                    </div><!-- /.box-body -->
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
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