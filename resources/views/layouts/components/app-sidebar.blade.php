            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="{{url('index')}}">
                            <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{asset('assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
                            <img src="{{asset('assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
                        </a><!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg>
                        </div>
                        <ul class="side-menu">
                            <li>
                                <h3>Menu</h3>
                            </li>
							<li class="slide">
								<a class="side-menu__item has-link" data-bs-toggle="slide" href="{{url('index')}}">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
									<span class="side-menu__label">Dashboard</span>
								</a>
							</li>
                            <li>
                                <h3>Components</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z"/></svg>
                                    <span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Forms</a></li>
                                    <li><a href="{{url('form-elements')}}" class="slide-item">Form Elements</a></li>
                                    <li><a href="{{url('form-layouts')}}" class="slide-item">Form Layouts</a></li>
                                    <li><a href="{{url('form-validation')}}" class="slide-item">Form Validation</a></li>
                                    <li><a href="{{url('form-advanced')}}" class="slide-item">Form Advanced</a></li>
                                    <li><a href="{{url('wysiwyag')}}" class="slide-item">Form Editors</a></li>
                                    <li><a href="{{url('form-editable')}}" class="slide-item">Form editable</a></li>
                                    <li><a href="{{url('form-wizard')}}" class="slide-item">Form Wizard</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19,2H9C7.3438721,2.0018311,6.0018311,3.3438721,6,5v1H5C3.3438721,6.0018311,2.0018311,7.3438721,2,9v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-1h1c1.6561279-0.0018311,2.9981689-1.3438721,3-3V5C21.9981689,3.3438721,20.6561279,2.0018311,19,2z M17,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8h14V19z M17,10H3V9c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V10z M21,15c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-1V9c-0.0008545-0.7719116-0.3010864-1.4684448-0.7803345-2H21V15z M21,6H7V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10c1.1040039,0.0014038,1.9985962,0.8959961,2,2V6z"/></svg>
                                    <span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Tables</a></li>
                                    <li><a href="{{url('tables')}}" class="slide-item">Default Table</a></li>
                                    <li><a href="{{url('datatable')}}" class="slide-item">Data Tables</a></li>
                                    <li><a href="{{url('table-editable')}}" class="slide-item">Editable Tables</a></li>
                                </ul>
                            </li>
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="{{url('landing')}}" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.6,2.7c0-0.2-0.2-0.3-0.4-0.4c-3.8-1-7.9,0.3-10.4,3.3L9.5,7.1L6.8,6.4C5.7,6,4.6,6.5,4.1,7.5L2,11.2c0,0,0,0.1-0.1,0.1c-0.1,0.3,0.1,0.5,0.4,0.6l3.4,0.7c-0.3,0.9-0.6,1.8-0.7,2.7c0,0.2,0,0.3,0.1,0.4l3,2.9c0.1,0.1,0.2,0.1,0.4,0.1c0,0,0,0,0,0c0.9-0.1,1.9-0.3,2.8-0.6l0.7,3.3c0,0.2,0.3,0.4,0.5,0.4c0.1,0,0.2,0,0.2-0.1l3.7-2.1c0.9-0.5,1.3-1.6,1.1-2.6l-0.7-2.9l1.4-1.3C21.3,10.5,22.6,6.5,21.6,2.7z M3.2,11.1L4.9,8c0.3-0.6,0.9-0.8,1.5-0.6l2.3,0.6L7.7,9.2c-0.6,0.8-1.2,1.6-1.6,2.5L3.2,11.1z M16,19l-3.1,1.8l-0.6-2.9c0.9-0.4,1.7-1,2.5-1.6l1.3-1.2l0.6,2.3C16.7,18,16.5,18.7,16,19z M17.6,12.3l-3.5,3.2c-1.5,1.3-3.4,2.1-5.4,2.3l-2.6-2.6c0.3-2,1.1-3.9,2.4-5.4L10.1,8c0,0,0.1-0.1,0.1-0.1l1.4-1.6c2.2-2.6,5.8-3.8,9.1-3.1C21.4,6.6,20.3,10.1,17.6,12.3z M16.4,5.6c-1.1,0-1.9,0.9-1.9,1.9s0.9,1.9,1.9,1.9c1.1,0,1.9-0.9,1.9-1.9C18.3,6.5,17.5,5.6,16.4,5.6z M16.4,8.5c-0.5,0-0.9-0.4-0.9-0.9c0-0.5,0.4-0.9,0.9-0.9c0.5,0,0.9,0.4,0.9,0.9C17.3,8.1,16.9,8.5,16.4,8.5z"/></svg>
									<span class="side-menu__label">Landing</span>
									<span class="badge badge-sm bg-secondary badge-hide">new</span>
								</a>
							</li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21H20V4.5C20,4.223877,19.776123,4,19.5,4S19,4.223877,19,4.5V21h-3v-8.5c0-0.276123-0.223877-0.5-0.5-0.5S15,12.223877,15,12.5V21h-3V8.5C12,8.223877,11.776123,8,11.5,8S11,8.223877,11,8.5V21H8v-4.5C8,16.223877,7.776123,16,7.5,16S7,16.223877,7,16.5V21H3V2.5C3,2.223877,2.776123,2,2.5,2S2,2.223877,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z"/></svg>
                                    <span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                                    <li><a href="{{url('chart-echart')}}" class="slide-item"> ECharts</a></li>
                                    <li><a href="{{url('chart-chartjs')}}" class="slide-item">Chart Js</a></li>
                                    <li><a href="{{url('chart-flot')}}" class="slide-item"> Flot Charts</a></li>
                                    <li><a href="{{url('chart-morris')}}" class="slide-item"> Morris Charts</a></li>
                                    <li><a href="{{url('chart-nvd3')}}" class="slide-item">Nvd3 Charts</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M19.7819214,7.5h-9.2255249l2.5594482-4.4225464C15.9681396,3.4337769,18.4015503,5.1206055,19.7819214,7.5z M14.0211182,8.5l2.0198364,3.503479L14.0192871,15.5H9.9798584l-2.0228882-3.5084229L9.9776611,8.5H14.0211182z M12,3c0.0019531,0,0.0038452,0.0003052,0.0057983,0.0003052L7.380249,10.991272L4.8326416,6.5727539C6.4761353,4.4058838,9.0706177,3,12,3z M3,12c0-1.6405029,0.4459839-3.1737671,1.2128296-4.49823L8.8244019,15.5H3.7061157C3.2515259,14.4241333,3,13.2414551,3,12z M4.2138672,16.5h9.2272339l-2.5576782,4.423584C8.0288696,20.5695801,5.5935059,18.8815918,4.2138672,16.5z M12,21c-0.0021362,0-0.0041504-0.0003052-0.0062866-0.0003052l4.6235962-7.996582l2.550354,4.4237671C17.524231,19.5939941,14.9295654,21,12,21z M15.1746826,8.5h5.1159668C20.7460938,9.5758057,20.9986572,10.7584839,21,12c0,1.6407471-0.446106,3.1741943-1.2131348,4.4987183L15.1746826,8.5z"/></svg>
                                    <span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Icons</a></li>
                                    <li><a href="{{url('icons')}}" class="slide-item">Font Awesome</a></li>
                                    <li><a href="{{url('icons2')}}" class="slide-item"> Material Design Icons</a></li>
                                    <li><a href="{{url('icons3')}}" class="slide-item"> Simple Line Icons</a></li>
                                    <li><a href="{{url('icons4')}}" class="slide-item"> Feather Icons</a></li>
                                    <li><a href="{{url('icons5')}}" class="slide-item"> Ionic Icons</a></li>
                                    <li><a href="{{url('icons6')}}" class="slide-item"> Flag Icons</a></li>
                                    <li><a href="{{url('icons7')}}" class="slide-item"> pe7 Icons</a></li>
                                    <li><a href="{{url('icons8')}}" class="slide-item"> Themify Icons</a></li>
                                    <li><a href="{{url('icons9')}}" class="slide-item">Typicons Icons</a></li>
                                    <li><a href="{{url('icons10')}}" class="slide-item">Weather Icons</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12.1124268,2.0010986C7.6941528,1.9389648,4.0620728,5.4703979,4,9.8886719c0,5.4482422,7.3642578,11.7285156,7.6777344,11.9931641C11.7677002,21.958313,11.881958,22.0001831,12,22c0.118042,0.0001831,0.2322998-0.041687,0.3222656-0.1181641C12.6357422,21.6171875,20,15.3369141,20,9.8886719C19.9391479,5.5579224,16.4431763,2.0619507,12.1124268,2.0010986z M12,20.8339844C10.5839844,19.5625,5,14.2666016,5,9.8886719C5.0353394,6.0553589,8.166626,2.973877,12,3c3.833374-0.026123,6.9647217,3.0553589,7,6.8886719C19,14.2626953,13.414978,19.5615234,12,20.8339844z M12,7c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3c1.6561279-0.0018311,2.9981689-1.3438721,3-3C15,8.3431396,13.6568604,7,12,7z M12,12c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2c1.1040039,0.0014038,1.9985962,0.8959961,2,2C14,11.1045532,13.1045532,12,12,12z"/></svg>
                                    <span class="side-menu__label">Maps</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Maps</a></li>
                                    <li><a href="{{url('maps1')}}" class="slide-item">Leaflet Maps</a></li>
                                    <li><a href="{{url('maps2')}}" class="slide-item">Mapel Maps</a></li>
                                    <li><a href="{{url('maps')}}" class="slide-item">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Submenu's</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M18,14c-1.4293213,0-2.6744385,0.7554932-3.3817749,1.8830566l-4.9604492-2.2773438C9.8745117,13.1135864,9.9994507,12.5721436,10,12c0-0.5722656-0.1245728-1.1138916-0.3410645-1.6062012l4.9593506-2.2767944C15.3256226,9.2445068,16.5707397,10,18,10c2.208252-0.0021973,3.9978027-1.791748,4-4c0-2.2091675-1.7908325-4-4-4s-4,1.7908325-4,4c0,0.4233398,0.0836182,0.8234253,0.2055054,1.2064209L9.1296997,9.5366821C8.3972168,8.607666,7.2749023,8,6,8c-2.2091675,0-4,1.7908325-4,4s1.7908325,4,4,4c1.2741699-0.0012817,2.3956909-0.6087646,3.1281738-1.5372925l5.0773315,2.3308716C14.0836182,17.1765747,14,17.5766602,14,18c0,2.2091675,1.7908325,4,4,4c2.208252-0.0021973,3.9978027-1.791748,4-4C22,15.7908325,20.2091675,14,18,14z M18,3c1.6561279,0.0018311,2.9981689,1.3438721,3,3c0,1.6568604-1.3431396,3-3,3s-3-1.3431396-3-3S16.3431396,3,18,3z M6,15c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C9,13.6568604,7.6568604,15,6,15z M18,21c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C21,19.6568604,19.6568604,21,18,21z"/></svg>
                                    <span class="side-menu__label">Sub-menus</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Sub-menus</a></li>
                                    <li><a href="#" class="slide-item">Submenu-1</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                                class="sub-side-menu__label">Submenu-2</span><i
                                                class="sub-angle fa fa-angle-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="#">Submenu-2.1</a></li>
                                            <li><a class="sub-slide-item" href="#">Submenu-2.2</a></li>
                                            <li class="sub-slide2">
                                                <a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2"><span
                                                        class="sub-side-menu__label2">Submenu-2.3</span><i
                                                        class="sub-angle2 fa fa-angle-right"></i></a>
                                                <ul class="sub-slide-menu2">
                                                    <li><a href="#" class="sub-slide-item2">Submenu-2.3.1</a></li>
                                                    <li><a href="#" class="sub-slide-item2">Submenu-2.3.2</a></li>
                                                    <li><a href="#" class="sub-slide-item2">Submenu-2.3.3</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="sub-slide-item" href="#">Submenu-2.4</a></li>
                                            <li><a class="sub-slide-item" href="#">Submenu-2.5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Web Apps</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,13h-8.0005493C13.2234497,13.0001831,12.9998169,13.223999,13,13.5v8.0005493C13.0001831,21.7765503,13.223999,22.0001831,13.5,22h8.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-8.0006104C21.9998169,13.2234497,21.776001,12.9998169,21.5,13z M21,21h-7v-7h7V21z M10.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v8.0005493C2.0001831,10.7765503,2.223999,11.0001831,2.5,11h8.0006104C10.7765503,10.9998169,11.0001831,10.776001,11,10.5V2.4993896C10.9998169,2.2234497,10.776001,1.9998169,10.5,2z M10,10H3V3h7V10z M10.5,13H2.4993896C2.2234497,13.0001831,1.9998169,13.223999,2,13.5v8.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h8.0006104C10.7765503,21.9998169,11.0001831,21.776001,11,21.5v-8.0006104C10.9998169,13.2234497,10.776001,12.9998169,10.5,13z M10,21H3v-7h7V21z M21.5,2h-8.0005493C13.2234497,2.0001831,12.9998169,2.223999,13,2.5v8.0005493C13.0001831,10.7765503,13.223999,11.0001831,13.5,11h8.0006104C21.7765503,10.9998169,22.0001831,10.776001,22,10.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M21,10h-7V3h7V10z"/></svg>
                                    <span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                    <li><a href="{{url('calendar2')}}" class="slide-item">Calendar</a></li>
                                    <li><a href="{{url('chat')}}" class="slide-item">Chat</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                                class="sub-side-menu__label">E-Commerce</span><i
                                                class="sub-angle fa fa-angle-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="{{url('cart')}}">Cart</a></li>
                                            <li><a class="sub-slide-item" href="{{url('checkout')}}">Checkout</a></li>
                                            <li><a class="sub-slide-item" href="{{url('products')}}">Products</a></li>
                                            <li><a class="sub-slide-item" href="{{url('product-details')}}">Product-Details</a></li>
                                            <li><a class="sub-slide-item" href="{{url('wishlist')}}">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                                class="sub-side-menu__label">File Manager</span><i
                                                class="sub-angle fa fa-angle-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="{{url('file-manager')}}">Files</a></li>
                                            <li><a class="sub-slide-item" href="{{url('file-manager1')}}">File Manager</a></li>
                                            <li><a class="sub-slide-item" href="{{url('file-manager2')}}">File Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                                class="sub-side-menu__label">E-Mail</span><i
                                                class="sub-angle fa fa-angle-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="{{url('mail-inbox')}}">Inbox</a></li>
                                            <li><a class="sub-slide-item" href="{{url('mail-compose')}}">Compose Mail</a></li>
                                            <li><a class="sub-slide-item" href="{{url('mail-read')}}">Read Mail</a></li>
                                            <li><a class="sub-slide-item" href="{{url('mail-settings')}}">Mail Settings</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                                class="sub-side-menu__label">Invoices</span><i
                                                class="sub-angle fa fa-angle-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="{{url('invoice-list')}}">Invoice List</a></li>
                                            <li><a class="sub-slide-item" href="{{url('invoice-details')}}">Invoice Details</a></li>
                                            <li><a class="sub-slide-item" href="{{url('invoice-create')}}">Create Invoice</a></li>
                                            <li><a class="sub-slide-item" href="{{url('invoice-timelog')}}">Time Log Invoice</a></li>
                                            <li><a class="sub-slide-item" href="{{url('invoice-edit')}}">Edit Invoice</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                                class="sub-side-menu__label">Projects</span><i
                                                class="sub-angle fa fa-angle-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="{{url('projects')}}">Projects</a></li>
                                            <li><a class="sub-slide-item" href="{{url('projects-list')}}">Projects List</a></li>
                                            <li><a class="sub-slide-item" href="{{url('project-details')}}">Project Details</a></li>
                                            <li><a class="sub-slide-item" href="{{url('project-new')}}">Project New</a></li>
                                            <li><a class="sub-slide-item" href="{{url('project-edit')}}">Edit Project</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('ticket-details')}}" class="slide-item"><span class="side-menu__label">Tickets</span></a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                                class="sub-side-menu__label">Tasks</span><i
                                                class="sub-angle fa fa-angle-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="{{url('tasks-list')}}">Task List</a></li>
                                            <li><a class="sub-slide-item" href="{{url('task-edit')}}">Edit Task</a></li>
                                            <li><a class="sub-slide-item" href="{{url('task-create')}}">Create Task</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                                class="sub-side-menu__label">Clients</span><i
                                                class="sub-angle fa fa-angle-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="{{url('clients')}}">Clients</a></li>
                                            <li><a class="sub-slide-item" href="{{url('client-create')}}">Add Client</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16.6766357,7.3233643C15.7435303,4.2431641,12.8848267,2,9.5,2C5.3578491,2,2,5.3578491,2,9.5c0,3.3848267,2.2431641,6.2435303,5.3233643,7.1766357C8.2564697,19.7568359,11.1151733,22,14.5,22c4.1402588-0.0045166,7.4954834-3.3597412,7.5-7.5C22,11.1151733,19.7568359,8.2564697,16.6766357,7.3233643z M16,9.5c0,0.8760376-0.1757202,1.7103882-0.4899292,2.4730225l-3.4830933-3.4830933C12.7896118,8.1757202,13.6239624,8,14.5,8c0.4649658,0.0005493,0.9176636,0.0518799,1.3549194,0.1450806C15.9481201,8.5823364,15.9994507,9.0350342,16,9.5z M15.0283203,12.906311c-0.5328369,0.862854-1.2597656,1.5897217-2.1226807,2.1224365l-3.9343872-3.9343872c0.5328369-0.8630981,1.2598877-1.5901489,2.1229858-2.1230469L15.0283203,12.906311z M7.0787354,15.5289917C4.6891479,14.5682983,3,12.2332764,3,9.5C3,5.9101562,5.9101562,3,9.5,3c2.7313232,0.0031738,5.06427,1.6907959,6.0264893,4.0783081C15.1900635,7.0321655,14.8491211,7,14.5,7C10.3578491,7,7,10.3578491,7,14.5C7,14.8500366,7.0323486,15.1917114,7.0787354,15.5289917z M8,14.5c0-0.8759766,0.1757812-1.7103271,0.4899292-2.4729614l3.4830322,3.4830322C11.2103271,15.8242188,10.3759766,16,9.5,16c-0.465332,0-0.918457-0.0509644-1.3560791-0.1439209C8.0509644,15.418457,8,14.965332,8,14.5z M14.5,21c-2.7332764,0-5.0682983-1.6891479-6.0289917-4.0787354C8.8082886,16.9676514,9.1499634,17,9.5,17c4.1402588-0.0045166,7.4954834-3.3597412,7.5-7.5c0-0.3491211-0.0321655-0.6900635-0.0783081-1.0264893C19.3092041,9.43573,20.9968262,11.7686768,21,14.5C21,18.0898438,18.0898438,21,14.5,21z"/></svg>
                                    <span class="side-menu__label">UI Elements</span><i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">UI Elements</a></li>
                                    <li><a href="{{url('alerts')}}" class="slide-item">Alerts</a></li>
                                    <li><a href="{{url('avatar')}}" class="slide-item">Avatar</a></li>
                                    <li><a href="{{url('badge')}}" class="slide-item">Badges</a></li>
                                    <li><a href="{{url('breadcrumbs')}}" class="slide-item">Breadcrumbs</a></li>
                                    <li><a href="{{url('buttons')}}" class="slide-item">Buttons</a></li>
                                    <li><a href="{{url('colors')}}" class="slide-item">Colors</a></li>
                                    <li><a href="{{url('dropdown')}}" class="slide-item">Dropdown</a></li>
                                    <li><a href="{{url('gallery')}}" class="slide-item">Gallery</a></li>
                                    <li><a href="{{url('loaders')}}" class="slide-item">Loaders</a></li>
                                    <li><a href="{{url('navigation')}}" class="slide-item">Navigation</a></li>
                                    <li><a href="{{url('notify')}}" class="slide-item">Notifications</a></li>
                                    <li><a href="{{url('offcanvas')}}" class="slide-item">Offcanvas</a></li>
                                    <li><a href="{{url('pagination')}}" class="slide-item">Pagination</a></li>
                                    <li><a href="{{url('panels')}}" class="slide-item">Panels</a></li>
                                    <li><a href="{{url('rangeslider')}}" class="slide-item">Range Slider</a></li>
                                    <li><a href="{{url('scroll')}}" class="slide-item">Scroll</a></li>
                                    <li><a href="{{url('tags')}}" class="slide-item">Tags</a></li>
                                    <li><a href="{{url('thumbnails')}}" class="slide-item">Thumbnails</a></li>
                                    <li><a href="{{url('treeview')}}" class="slide-item">Treeview</a></li>
                                    <li><a href="{{url('typography')}}" class="slide-item">Typography</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M20.6601562,7c-0.767334-1.3284302-2.5855103-1.836853-4.8673706-1.5704346C14.8826904,3.3205566,13.5338745,2,12,2S9.1172485,3.3204956,8.2071533,5.4296265C5.9249268,5.1627808,4.1060181,5.6706543,3.3398438,7c-0.7667847,1.3283081-0.2972412,3.1570435,1.074585,5c-1.3718262,1.8429565-1.8413696,3.6716919-1.074646,5c0.6367188,1.1025391,1.9942017,1.6435547,3.7421875,1.6435547c0.3729858-0.0189819,0.7437134-0.0548096,1.112915-0.1002197C9.1050415,20.6685791,10.4594116,22,12,22s2.8949585-1.3314209,3.8051147-3.456665c0.3692017,0.0454102,0.7399292,0.0812378,1.112915,0.1002197c1.7469482,0,3.1063843-0.5410156,3.7421265-1.6435547c0.7667847-1.3283081,0.2972412-3.1570435-1.074585-5C20.9573975,10.1570435,21.4269409,8.3283081,20.6601562,7z M15.6480713,8.3894043C15.2786865,8.1427612,14.8995972,7.9006348,14.5,7.6699219c-0.3996582-0.230835-0.7990723-0.4382935-1.1974487-0.6350098c0.6378784-0.2148438,1.2570801-0.3780518,1.8477173-0.4918823C15.3469238,7.1115112,15.5151978,7.7294312,15.6480713,8.3894043z M12,3c1.0654297,0,2.0482178,0.9987793,2.7738037,2.5901489c-0.8824463,0.1806641-1.8171387,0.4703369-2.7739868,0.8580933C11.0432129,6.06073,10.1085815,5.7709351,9.2261353,5.59021C9.9517212,3.9987793,10.9345093,3,12,3z M8.8425293,6.5646973c0.6322021,0.1143799,1.2553101,0.2702026,1.866333,0.4645996C10.3067017,7.2276001,9.9035645,7.4368286,9.5,7.6699219C9.1004028,7.9006348,8.7213135,8.1427612,8.3519287,8.3894043C8.4831543,7.7377319,8.6489868,7.1273193,8.8425293,6.5646973z M4.2050781,7.5c0.6743774-0.8552856,1.7492065-1.2923584,2.8291016-1.1503906c0.2658691,0.0151367,0.5303345,0.0407715,0.7941895,0.0700073c-0.2806396,0.8480225-0.494751,1.7927856-0.6360474,2.8049927C6.3783569,9.859436,5.6602173,10.5241089,5.0626221,11.197998C4.0467529,9.7736816,3.6727905,8.4230347,4.2050781,7.5z M7.0488892,13.3538208C6.5440674,12.9088745,6.0932007,12.4544067,5.6994019,12c0.3937988-0.4544067,0.8446655-0.9089355,1.3494873-1.3538818C7.0200195,11.0892944,7,11.5386353,7,12S7.0200195,12.9107056,7.0488892,13.3538208z M4.2050781,16.5c-0.5322876-0.9230347-0.1583252-2.2736816,0.8575439-3.697998c0.5975952,0.6738892,1.3157349,1.338562,2.1296997,1.9733887c0.1427002,1.0221558,0.3591309,1.9763184,0.6437988,2.8307495C6.0949097,17.7734375,4.7382812,17.4219971,4.2050781,16.5z M8.3519287,15.6105957C8.7213135,15.8572388,9.1004028,16.0993652,9.5,16.3300781c0.3783569,0.2339478,0.7686157,0.4447021,1.1637573,0.6447144c-0.6261597,0.2092285-1.2341309,0.3692017-1.8143921,0.4810181C8.652832,16.8876953,8.4847412,16.2700806,8.3519287,15.6105957z M12,21c-1.0717163,0-2.0603027-1.0095215-2.7870483-2.6173096C10.1655884,18.2009888,11.0983276,17.9318848,12,17.5773926c0.9016113,0.3544922,1.8344116,0.6235962,2.7870483,0.8052979C14.0603027,19.9904785,13.0717163,21,12,21z M15.1503906,17.456543c-0.5805054-0.1118164-1.1887207-0.2718506-1.8151245-0.4812622C13.7307739,16.7751465,14.1212769,16.56427,14.5,16.3300781c0.3995972-0.2307129,0.7786865-0.4728394,1.1480713-0.7194824C15.5151978,16.2703857,15.3470459,16.8881836,15.1503906,17.456543z M15.8648682,14.2316284C15.2859497,14.6641235,14.6652832,15.0805054,14,15.4648438c-0.6655884,0.3839111-1.3366699,0.7131958-2.0007935,0.9981689C11.3355713,16.1780396,10.6650391,15.8487549,10,15.4648438c-0.6652832-0.3843384-1.2859497-0.8007202-1.8648682-1.2332153C8.0501099,13.5140381,8,12.7683105,8,12s0.0501099-1.5140381,0.1351318-2.2316284C8.7140503,9.3358765,9.3347168,8.9194946,10,8.5351562c0.6747437-0.3895264,1.3552246-0.7230835,2.0283813-1.0108032C12.7068481,7.8132324,13.3676758,8.1464844,14,8.5351562c0.6652832,0.3843384,1.2859497,0.8007202,1.8648682,1.2332153C15.9498901,10.4859619,16,11.2316895,16,12S15.9498901,13.5140381,15.8648682,14.2316284z M19.7949219,7.5c0.5322876,0.9230347,0.1583252,2.2736816-0.8575439,3.697998c-0.5975952-0.6738892-1.3157349-1.338562-2.1296997-1.9733887c-0.1427612-1.022644-0.359314-1.9771729-0.644165-2.8319092C17.90448,6.2254639,19.2612915,6.5772095,19.7949219,7.5z M16.9511108,10.6461182C17.4559326,11.0910645,17.9067993,11.5455933,18.3005981,12c-0.3937988,0.4544067-0.8446655,0.9088745-1.3494873,1.3538208C16.9799805,12.9107056,17,12.4613647,17,12S16.9799805,11.0892944,16.9511108,10.6461182z M19.7949219,16.5c-0.5328369,0.9221191-1.8897095,1.2739868-3.6312866,1.1068115c0.28479-0.8546143,0.5013428-1.80896,0.644043-2.8314209c0.8139648-0.6348267,1.5321045-1.2994995,2.1296997-1.9733887C19.9532471,14.2263184,20.3272095,15.5769653,19.7949219,16.5z"/></svg>
                                    <span class="side-menu__label">Advanced UI</span><i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Advanced UI</a></li>
                                    <li><a href="{{url('accordion')}}" class="slide-item">Accordions</a></li>
                                    <li><a href="{{url('carousel')}}" class="slide-item">Carousel</a></li>
                                    <li><a href="{{url('cards')}}" class="slide-item">Cards</a></li>
                                    <li><a href="{{url('counters')}}" class="slide-item">Counters</a></li>
                                    <li><a href="{{url('modal')}}" class="slide-item">Modals</a></li>
                                    <li><a href="{{url('timeline')}}" class="slide-item">Timeline</a></li>
                                    <li><a href="{{url('sweetalert')}}" class="slide-item">Sweet-Alerts</a></li>
                                    <li><a href="{{url('rating')}}" class="slide-item">Rating</a></li>
                                    <li><a href="{{url('mediaobject')}}" class="slide-item">Media Object</a></li>
                                    <li><a href="{{url('tabs')}}" class="slide-item">Tabs</a></li>
                                    <li><a href="{{url('tooltipandpopover')}}" class="slide-item">Tooltip and Popover</a></li>
                                    <li><a href="{{url('progress')}}" class="slide-item">Progress Bars</a></li>

                                    <li><a href="{{url('footers')}}" class="slide-item">Footers</a></li>
                                    <li><a href="{{url('users-list')}}" class="slide-item">Users List</a></li>
                                    <li><a href="{{url('file-attachments')}}" class="slide-item">File Attachments</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.8535156,8.1464844l-6-6C13.7597656,2.0526733,13.6326294,2,13.5,2H7C5.3438721,2.0018311,4.0018311,3.3438721,4,5v14c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V8.5C20,8.3673706,19.9473267,8.2402344,19.8535156,8.1464844z M14,3.7069702L18.2930298,8H14V3.7069702z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h6v5.5c0,0.0001831,0,0.0003662,0,0.0005493C13.0001831,8.7765503,13.223999,9.0001831,13.5,9H19V19z"/></svg>
                                    <span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                                class="sub-side-menu__label">Authentication</span><i
                                                class="sub-angle fa fa-angle-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="{{url('login')}}">Sign In</a></li>
                                            <li><a class="sub-slide-item" href="{{url('register')}}">Sign Up</a></li>
                                            <li><a class="sub-slide-item" href="{{url('forgot-password')}}">Forgot Password</a></li>
                                            <li><a class="sub-slide-item" href="{{url('lockscreen')}}">Lockscreen</a></li>
                                            <li><a class="sub-slide-item" href="{{url('construction')}}">UnderConstruction</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                                class="sub-side-menu__label">Error Pages</span><i
                                                class="sub-angle fa fa-angle-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="{{url('error404')}}">404 Error</a></li>
                                            <li><a class="sub-slide-item" href="{{url('error500')}}">500 Error</a></li>
                                            <li><a class="sub-slide-item" href="{{url('error501')}}">501 Error</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('settings')}}" class="slide-item">Settings</a></li>
                                    <li><a href="{{url('profile')}}" class="slide-item">Profile</a></li>
                                    <li><a href="{{url('about')}}" class="slide-item">About Company</a></li>
                                    <li><a href="{{url('services')}}" class="slide-item">Services</a></li>
                                    <li><a href="{{url('switcher')}}" class="slide-item">Switcher</a></li>
                                    <li><a href="{{url('terms')}}" class="slide-item">Terms</a></li>
                                    <li><a href="{{url('faq')}}" class="slide-item">Faq's</a></li>
                                    <li><a href="{{url('pricing')}}" class="slide-item">Pricing</a></li>
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                                class="sub-side-menu__label">Blog</span><i
                                                class="sub-angle fa fa-angle-right"></i></a>
                                        <ul class="sub-slide-menu">
                                            <li><a class="sub-slide-item" href="{{url('blog')}}">Blog</a></li>
                                            <li><a class="sub-slide-item" href="{{url('blog-details')}}">Blog Details</a></li>
                                            <li><a class="sub-slide-item" href="{{url('blog-edit')}}">Edit Post</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M2.25,8.4521484l9.5,5.4804688C11.8259277,13.9767456,11.9121704,14,12,14s0.1740723-0.0232544,0.25-0.0673828l9.5-5.4804688c0.0759888-0.0438843,0.1390381-0.1069946,0.1829224-0.1829224C22.071106,8.0300293,21.9891968,7.7241211,21.75,7.5859375l-9.5-5.4755859c-0.1550903-0.0878906-0.3449097-0.0878906-0.5,0l-9.5,5.4755859C2.1740112,7.6298218,2.1109619,7.6929321,2.0670776,7.7688599C1.928894,8.0080566,2.0108032,8.3139648,2.25,8.4521484z M12,3.1210938l8.4990234,4.8984375L12,12.9228516L3.5009766,8.0195312L12,3.1210938z M21.2479858,15.5263672L12,20.9208984l-9.2481079-5.3945312c-0.2384033-0.1391602-0.5444336-0.0587158-0.6835938,0.1796875s-0.0587158,0.5444336,0.1796875,0.6835938l9.5,5.5419922C11.8244019,21.9765015,11.911377,22.0001221,12,22c0.088562,0.0001221,0.1755371-0.0234985,0.2518921-0.0683594l9.5-5.5419922c0.2384033-0.1391602,0.3188477-0.4451904,0.1796875-0.6835938S21.4863892,15.387207,21.2479858,15.5263672z M21.2479858,11.5263672L12,16.9208984l-9.2481079-5.3945312c-0.2384033-0.1391602-0.5444336-0.0587158-0.6835938,0.1796875s-0.0587158,0.5444336,0.1796875,0.6835938l9.5,5.5419922C11.8244019,17.9765015,11.911377,18.0001221,12,18c0.088562,0.0001221,0.1755371-0.0234985,0.2518921-0.0683594l9.5-5.5419922c0.2384033-0.1391602,0.3188477-0.4451904,0.1796875-0.6835938S21.4863892,11.387207,21.2479858,11.5263672z"/></svg>
                                    <span class="side-menu__label">Utilities</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Utilities</a></li>
                                    <li><a href="{{url('background')}}" class="slide-item">Background</a></li>
                                    <li><a href="{{url('border')}}" class="slide-item">Border</a></li>
                                    <li><a href="{{url('display')}}" class="slide-item">Display</a></li>
                                    <li><a href="{{url('flex')}}" class="slide-item">Flex</a></li>
                                    <li><a href="{{url('height')}}" class="slide-item">Height</a></li>
                                    <li><a href="{{url('margin')}}" class="slide-item">Margin</a></li>
                                    <li><a href="{{url('padding')}}" class="slide-item">Padding</a></li>
                                    <li><a href="{{url('position')}}" class="slide-item">Position</a></li>
                                    <li><a href="{{url('width')}}" class="slide-item">Width</a></li>
                                    <li><a href="{{url('opacity')}}" class="slide-item">Opacity</a></li>
                                    <li><a href="{{url('emptypage')}}" class="slide-item">Empty Page</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!--/APP-SIDEBAR-->
