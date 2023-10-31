
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
                      UPDATE PELANTIKKAN 
                    </h1>
               
                
                    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                    <form action="{{url ('update-pelantikkan', $dt->id) }}" method="post">
                        {{csrf_field()}}

                            <div class="box-body">
                                    <div class="form-group">
                                <label for="notpengganti_id"> Notaris Pengganti </label>
                                 <select type="text" class="form-control" name="notpengganti_id" placeholder="notpengganti_id">
                               <option value="{{ $item->notpengganti_id }}" disabled selected>- Pilih Notaris Pengganti -</option>
                               @foreach ($dtnotpengganti as $item)
                                   <option value="{{ $item->id }}">{{ $item->nama }}</option>
                               @endforeach
                              </select>
                            </div>

                            <div class="box-body">
                                    <div class="form-group">
                                <label for="wilayah_id"> Kedudukan </label>
                                 <select type="text" class="form-control" name="wilayah_id" placeholder="wilayah_id">
                               <option value="{{ $item->wilayah_id }}" disabled selected>- Pilih Kedudukan -</option>
                               @foreach ($dtwilayah as $item)
                                   <option value="{{ $item->id }}">{{ $item->kecamatan }}</option>
                               @endforeach
                              </select>
                            </div>


                            <div class="box-body">
                                    <div class="form-group">
                                <label for="pengajuan_id"> Pengajuan </label>
                                 <select type="text" class="form-control" name="pengajuan_id" placeholder="pengajuan_id" >
                               <option value="{{ $item->pengajuan_id }}" disabled selected>- Pilih Id Pengajuan -</option>
                               @foreach ($dtpengajuan as $item)
                                   <option value="{{ $item->id }}">{{ $item->id }}</option>
                               @endforeach
                              </select>
                            </div>


                                         <div class="form-group">
                                        <input type="date" class="form-control" name="tanggal_pelantikkan" placeholder="Tanggal Pelantikkan" value="{{ $dt->tanggal_pelantikkan}}">
                                        </div>

                                        <div class="form-group">
                                        <input type="timestamps" class="form-control" name="created_at" placeholder="Waktu" value="{{ $dt->created_at}}">
                                        </div>
                                        
                                        <div class="form-group">
                                    </div><!-- /.box-body -->
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
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