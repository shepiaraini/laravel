<ul class="sidebar-menu">
                        <li class="active">
                            <a href="{{url('home')}}">
                                <i class="fa fa-home"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        @if(auth()->user()->level=='admin')
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Master Data</span>
                                <i class="fa fa-angle-left pull-right"></i>

                            </a>
                            <ul class="treeview-menu">
                         
                            <li><a href="{{url('wilayah')}}"><i class="fa fa-angle-double-right"></i> Wilayah </a></li>
                                <li><a href="{{url('Notaris')}}"><i class="fa fa-angle-double-right"></i> Data Notaris </a></li>
                              
                                <li><a href="{{url('notpengganti')}}"><i class="fa fa-angle-double-right"></i> Notaris Pengganti </a></li>
                                
                                <li><a href="{{url('akta')}}"><i class="fa fa-angle-double-right"></i>Akta</a></li>
                                <li><a href="{{url('Praktik')}}"><i class="fa fa-angle-double-right"></i> Praktik </a></li>
                           
                            </ul>
                        </li>


                        <li class="treeview">
                              <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Data Pengajuan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                            <li><a href="{{url('pengajuan')}}"><i class="fa fa-angle-double-right"></i> Pengajuan</a></li>
                            </ul>
                        </li>
                        
                        <li class="treeview">
                       
                            <a href="#">
                                <i class="fa fa-edit"></i> 
                                <span>Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                          
                                <li><a href="{{url('protes')}}"><i class="fa fa-angle-double-right"></i> Laporan Protes </a></li>
                                <li><a href="{{url('lapnotaris')}}"><i class="fa fa-angle-double-right"></i> Laporan Notaris </a></li>  
                                                  
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Jadwal Pelantikkan </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                            <li><a href="{{url('pelantikkan')}}"><i class="fa fa-angle-double-right"></i> Jadwal Pelantikan </a></li>
                            </ul>
                        </li>
                        @endif 
                       


                        @if(auth()->user()->level=='notaris')

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Pelantikkan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                            <li><a href="{{url('Pelantikkan1')}}"><i class="fa fa-angle-double-right"></i> Jadwal Pelantikan </a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Input Notaris</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                            <li><a href="{{url('Tambah_Notpengganti')}}"><i class="fa fa-angle-double-right"></i> Input Notaris Pengganti </a></li>
                            <li><a href="{{url('Tambah_Pengajuan')}}"><i class="fa fa-angle-double-right"></i>Input Pengajuan</a></li>
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> 
                                <span>Input Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                          
                               
                                <li><a href="{{url('Tambah_Laporan')}}"><i class="fa fa-angle-double-right"></i>Input  Laporan Akta </a></li>                       
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> 
                                <span>Status Laporan </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('protes1')}}"><i class="fa fa-angle-double-right"></i>  Laporan Protes </a></li>
                                <li><a href="{{url('lapnotaris1')}}"><i class="fa fa-angle-double-right"></i> Laporan Akta </a></li>
                                <li><a href="{{url('pengajuan1')}}"><i class="fa fa-angle-double-right"></i> Pengajuan </a></li>
                            </ul>
                        </li>


                        @endif 
                      
                    </ul>
                        
                    </ul>