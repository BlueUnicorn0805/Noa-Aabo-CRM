@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Inbox</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">E-Mail</a></li>
										<li class="breadcrumb-item active" aria-current="page">Inbox</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12 col-lg-4 col-xl-3">
									<div class="card">
										<div class="card-header border-bottom">
											<a href="{{url('mail-compose')}}" class="btn btn-block btn-outline-primary py-2">Compose</a>
										</div>
										<div class="card-body">
											<ul class="nav1 nav-column flex-column br-7">
												<li class="nav-item1 mt-0">
													<a class="nav-link thumb active" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,4h-15C3.119812,4.0012817,2.0012817,5.119812,2,6.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-11C21.9987183,5.119812,20.880188,4.0012817,19.5,4z M21,17.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V8.0913696l8.7392578,5.3353882c0.0080566,0.0048828,0.0184326,0.0030518,0.0266724,0.0075073C11.836731,13.4725952,11.9138184,13.500061,12,13.5c0.0905762,0.000061,0.1763306-0.0263672,0.2519531-0.0707397c0.0026855-0.0015869,0.0061646-0.0008545,0.0087891-0.0025024L21,8.0913696V17.5z M21,6.9194946l-0.2387695,0.145752c-0.0070801,0.0038452-0.0150146,0.0037842-0.0219727,0.0079956l-8.7313843,5.3359985L12,12.4140625l-0.0078735-0.0048218L3.2607422,7.0732422C3.2603149,7.072998,3.2598877,7.0727539,3.2594604,7.0724487c-0.006958-0.0042114-0.0149536-0.0041504-0.0220337-0.0079956L3,6.9194946V6.5C3.0009155,5.671936,3.671936,5.0009155,4.5,5h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6.9194946z"/></svg>
														Inbox
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M13.5,10h2.4199219c0.1328125,0,0.2597656-0.0527344,0.3535156-0.1464844l5.5800781-5.5800781c0.1953125-0.1953125,0.1953125-0.5117188,0-0.7070312l-2.4199219-2.4199219c-0.1953125-0.1953125-0.5117188-0.1953125-0.7070312,0l-5.5800781,5.5800781C13.0527344,6.8203125,13,6.9472656,13,7.0800781V9.5C13,9.7763672,13.2236328,10,13.5,10z M14,7.2871094l5.0800781-5.0800781l1.7128906,1.7128906L15.7128906,9H14V7.2871094z M21.5,9C21.2236328,9,21,9.2236328,21,9.5v8c0,0.8271484-0.6728516,1.5-1.5,1.5h-15C3.6728516,19,3,18.3271484,3,17.5v-11c0-0.2324219,0.0576172-0.4499512,0.1523438-0.6464844l7.0859375,7.0859375c0.4863281,0.4863281,1.125,0.7294922,1.7636719,0.7294922s1.2773438-0.2431641,1.7636719-0.7294922c0.1953125-0.1953125,0.1953125-0.5117188,0-0.7070312s-0.5117188-0.1953125-0.7070312,0c-0.5820312,0.5820312-1.53125,0.5820312-2.1132812,0L3.861145,5.1482544C4.0557251,5.0558472,4.2706909,5,4.5,5h6C10.7763672,5,11,4.7763672,11,4.5S10.7763672,4,10.5,4h-6C3.1210938,4,2,5.1210938,2,6.5v11C2,18.8789062,3.1210938,20,4.5,20h15c1.3789062,0,2.5-1.1210938,2.5-2.5v-8C22,9.2236328,21.7763672,9,21.5,9z"/></svg>
														Drafts
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.9189453,10.1265259c0.0802612-0.546814-0.2979736-1.0551147-0.8447266-1.135376L15.4228516,8.164978l-2.5253906-5.1464844c-0.0909424-0.1569824-0.2214355-0.2873535-0.37854-0.3781128c-0.4960327-0.2866821-1.1306152-0.1170044-1.4173584,0.3790894L8.5771484,8.164978L2.9257812,8.9912109C2.7097168,9.0228882,2.5100098,9.1244507,2.3569946,9.2802734c-0.387146,0.3943481-0.3812256,1.0278931,0.0131226,1.4150391l4.0927734,4.0126953l-0.9658203,5.6640625c-0.0091553,0.0541992-0.013855,0.1090698-0.0139771,0.1641235c-0.0015259,0.5534058,0.4458618,1.0032959,0.9993286,1.0048218c0.163147-0.0002441,0.3237915-0.0404663,0.4677734-0.1171875L12,18.7539062l5.0488281,2.6689453c0.1951294,0.1035767,0.4190063,0.1396484,0.6367798,0.1025391c0.5441895-0.0928345,0.9100952-0.6091309,0.8173218-1.1533203l-0.9658203-5.6640625l4.09375-4.0137329C21.7861328,10.5414429,21.8872681,10.3421021,21.9189453,10.1265259z M16.6503906,14.1766968c-0.1170654,0.1148682-0.1706543,0.2796631-0.1435547,0.4414062l1.0097656,5.9208984l-5.2832031-2.7930298c-0.1463013-0.0761719-0.3204956-0.0761719-0.4667969,0L6.4833984,20.539978l1.0097046-5.921814c0.0271606-0.1617432-0.0264282-0.3265381-0.1435547-0.4414062L3.0702515,9.9814453l5.9121094-0.8642578C9.1456299,9.0927734,9.286499,8.9898682,9.359375,8.8417969L12,3.460022l2.640564,5.3817139c0.072876,0.1480713,0.2138062,0.2509766,0.3770142,0.2753906l5.9130859,0.8632812L16.6503906,14.1766968z"/></svg>
														Starred
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16.6474609,7.3417969c0.093689,0.0939331,0.2208862,0.1466675,0.3535156,0.1464844c0.1326294,0.0001221,0.2598877-0.0526123,0.3535156-0.1464844l4.5-4.5c0.1904907-0.194397,0.1904907-0.5055542,0-0.6999512c-0.1932983-0.1971436-0.5098267-0.2003174-0.7070312-0.0070801L17.0009766,6.28125l-2.1464844-2.1464233c-0.0023804-0.0024414-0.0047607-0.0048218-0.0072021-0.0072021c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0072021c-0.1932373,0.1972046-0.1900635,0.5137329,0.0071411,0.7069702L16.6474609,7.3417969z M21.5078125,6.9736328c-0.276123,0-0.5,0.223877-0.5,0.5v10c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-11c0.0002441-0.2310181,0.0570068-0.4471436,0.1503906-0.6425781l7.0859375,7.0859375c0.4643555,0.4656372,1.0953369,0.7268066,1.7529297,0.7255859c0.6781006-0.0012207,1.3276978-0.2729492,1.8046875-0.7548828l1.7196655-1.7207031c0.1904907-0.194397,0.1904907-0.5054321,0-0.6998291c-0.1932373-0.1972046-0.5097656-0.2004395-0.7070312-0.0072021l-1.75,1.75c-0.5841675,0.5820923-1.5290527,0.5820923-2.1132812,0L3.8651733,5.1240234C4.0606079,5.0305786,4.2767944,4.973877,4.5078125,4.9736328h7c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-7c-1.380188,0.0012817-2.4987183,1.119812-2.5,2.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-10C22.0078125,7.1975098,21.7839355,6.9736328,21.5078125,6.9736328z"/></svg>
														Sent
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.7319336,15.1376953c-0.0018921-0.0333252-0.0109253-0.0648193-0.0196533-0.0977173c-0.0087891-0.0328369-0.0167847-0.0644531-0.0317383-0.0942383c-0.0046387-0.0092773-0.0043945-0.0195923-0.0096436-0.0287476L15.5126953,4.25C15.4235229,4.0953369,15.258606,4.000061,15.0800781,4H8.9208984C8.833252,4.000061,8.7471924,4.0231934,8.6712646,4.0670166C8.5995483,4.1083984,8.5473633,4.1674805,8.5056152,4.2327271C8.5006104,4.239502,8.492981,4.2429199,8.4882812,4.25L2.3291016,14.9169922c-0.0898438,0.154541-0.0898438,0.345459,0,0.5L5.4091797,20.75c0.0072021,0.0125122,0.0214233,0.0179443,0.0296021,0.0296631c0.0339355,0.0488281,0.0745239,0.0894775,0.1233521,0.1234741c0.0183716,0.0127563,0.0338135,0.026062,0.0537109,0.0362549C5.6845093,20.9749756,5.7591553,20.999939,5.8417969,21h12.3173828c0.1785278-0.000061,0.3434448-0.0953369,0.4326172-0.25l3.0791016-5.3330078c0.0070801-0.0122681,0.0048828-0.0276489,0.0108643-0.0404663c0.0253296-0.053894,0.0402832-0.109314,0.0452881-0.1686401c0.0012207-0.0140991,0.0108643-0.0262451,0.0108643-0.0404663C21.737915,15.1568604,21.7325439,15.1480713,21.7319336,15.1376953z M14.7910156,5l5.5810547,9.6669922h-5.0029297L9.7871094,5H14.7910156z M14.2144165,14.6669922H9.7861938l2.2139282-3.8348389L14.2144165,14.6669922z M3.3388672,15.1669922L8.9208984,5.5l2.5019531,4.3330078L5.8417969,19.5L3.3388672,15.1669922z M17.8701172,20H6.7080078l2.5020142-4.3330078h11.1621094L17.8701172,20z"/></svg>
														Google Drive
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.0859375,10.8789062l-8.7324219-8.7324219C12.2597656,2.0526733,12.1326294,2,12,2H2.5C2.4998169,2,2.4996338,2,2.4993896,2C2.2234497,2.0001831,1.9998169,2.223999,2,2.5V12c0,0.1326294,0.0526733,0.2597656,0.1464844,0.3535156l8.7324219,8.7323608C11.44104,21.6488647,12.2044067,21.9644775,13,21.9628906c0.7955933,0.0015869,1.55896-0.3140259,2.1210938-0.8769531l5.9648438-5.9648438C22.2558594,13.9490356,22.2558594,12.0509644,21.0859375,10.8789062z M20.3789062,14.4140625l-5.9648438,5.9649048c-0.7816772,0.7792358-2.0464478,0.7792358-2.828125,0L3,11.7930298V3h8.7930298l8.5858765,8.5859985C21.1582031,12.3676147,21.1582031,13.6324463,20.3789062,14.4140625z M7.5,6C6.6715698,6,6,6.6715698,6,7.5S6.6715698,9,7.5,9C8.328064,8.9990845,8.9990845,8.328064,9,7.5C9,6.6715698,8.3284302,6,7.5,6z M7.5,8C7.223877,8,7,7.776123,7,7.5S7.223877,7,7.5,7C7.7759399,7.0005493,7.9994507,7.2240601,8,7.5C8,7.776123,7.776123,8,7.5,8z"/></svg>
														Tags
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17,9V7c0-2.7614136-2.2385864-5-5-5S7,4.2385864,7,7v2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v7c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-7C19.9981689,10.3438721,18.6561279,9.0018311,17,9z M8,7c0-2.2091675,1.7908325-4,4-4s4,1.7908325,4,4v2H8V7z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-7c0.0014038-1.1040039,0.8959961-1.9985962,2-2h0.5h9h0.0006104H17c1.1040039,0.0014038,1.9985962,0.8959961,2,2V19z"/></svg>
														Trash Bin
													</a>
												</li>
											</ul>
											<ul class="nav1 nav-column flex-column br-7 mt-3">
												<li class="nav-item1 mt-0">
													<a class="nav-link thumb" href="{{url('mail-settings')}}">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M11.5,7.9c-2.3,0-4,1.9-4,4.2s1.9,4,4.2,4c2.2,0,4-1.9,4-4.1c0,0,0-0.1,0-0.1C15.6,9.7,13.7,7.9,11.5,7.9z M14.6,12.1c0,1.7-1.5,3-3.2,3c-1.7,0-3-1.5-3-3.2c0-1.7,1.5-3,3.2-3C13.3,8.9,14.7,10.3,14.6,12.1C14.6,12,14.6,12.1,14.6,12.1z M20,13.1c-0.5-0.6-0.5-1.5,0-2.1l1.4-1.5c0.1-0.2,0.2-0.4,0.1-0.6l-2.1-3.7c-0.1-0.2-0.3-0.3-0.5-0.2l-2,0.4c-0.8,0.2-1.6-0.3-1.9-1.1l-0.6-1.9C14.2,2.1,14,2,13.8,2H9.5C9.3,2,9.1,2.1,9,2.3L8.4,4.3C8.1,5,7.3,5.5,6.5,5.3l-2-0.4C4.3,4.9,4.1,5,4,5.2L1.9,8.8C1.8,9,1.8,9.2,2,9.4l1.4,1.5c0.5,0.6,0.5,1.5,0,2.1L2,14.6c-0.1,0.2-0.2,0.4-0.1,0.6L4,18.8c0.1,0.2,0.3,0.3,0.5,0.2l2-0.4c0.8-0.2,1.6,0.3,1.9,1.1L9,21.7C9.1,21.9,9.3,22,9.5,22h4.2c0.2,0,0.4-0.1,0.5-0.3l0.6-1.9c0.3-0.8,1.1-1.2,1.9-1.1l2,0.4c0.2,0,0.4-0.1,0.5-0.2l2.1-3.7c0.1-0.2,0.1-0.4-0.1-0.6L20,13.1z M18.6,18l-1.6-0.3c-1.3-0.3-2.6,0.5-3,1.7L13.4,21H9.9l-0.5-1.6c-0.4-1.3-1.7-2-3-1.7L4.7,18l-1.8-3l1.1-1.3c0.9-1,0.9-2.5,0-3.5L2.9,9l1.8-3l1.6,0.3c1.3,0.3,2.6-0.5,3-1.7L9.9,3h3.5l0.5,1.6c0.4,1.3,1.7,2,3,1.7L18.6,6l1.8,3l-1.1,1.3c-0.9,1-0.9,2.5,0,3.5l1.1,1.3L18.6,18z"/></svg>
														Mail Settings
													</a>
												</li>
											</ul>
										</div>
										<div class="card-body border-top">
											<ul class="nav1 nav-column flex-column br-7">
												<li class="nav-item1 mt-0">
													<a class="nav-link thumb" href="#">
														<span class="wpx-10 hpx-10 rounded-circle bg-orange me-2"></span>Friends
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<span class="wpx-10 hpx-10 rounded-circle bg-secondary me-2"></span>Family
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<span class="wpx-10 hpx-10 rounded-circle bg-info me-2"></span>Social
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<span class="wpx-10 hpx-10 rounded-circle bg-danger me-2"></span>Office
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-8 col-xl-9">
									<div class="card">
										<div class="card-body p-6">
											<div class="inbox-body">
												<div class="mail-option">
													<div class="chk-all">
														<div class="btn-group">
															<a data-bs-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
																All
																<i class="fa fa-angle-down "></i>
															</a>
															<ul class="dropdown-menu">
																<li><a href="#"> None</a></li>
																<li><a href="#"> Read</a></li>
																<li><a href="#"> Unread</a></li>
															</ul>
														</div>
													</div>
													<div class="btn-group">
														<a  href="#" class="btn mini tooltips">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M20.5,16h-4c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h2.9760132c-1.6599121,2.4746704-4.44104,3.9971313-7.4585571,4C7.0420532,21.0048218,3.0048218,16.9754028,3,12c-0.0004272-0.4752197,0.0374756-0.9497681,0.1133423-1.4188843c0.0447388-0.2723999-0.1397705-0.52948-0.4121094-0.5742188c-0.2723999-0.0447998-0.52948,0.1397095-0.5742188,0.4121094C2.0422363,10.9417114,1.9997559,11.470459,2,12c0.0064697,5.5201416,4.4798584,9.9935303,10,10c3.1759033,0.0013428,6.1253662-1.5065308,8-3.9985962V20.5c0,0.0001831,0,0.0003662,0,0.0005493C20.0001831,20.7765503,20.223999,21.0001831,20.5,21c0.0001831,0,0.0003662,0,0.0006104,0C20.7765503,20.9998169,21.0001831,20.776001,21,20.5v-4c0-0.0001831,0-0.0003662,0-0.0006104C20.9998169,16.2234497,20.776001,15.9998169,20.5,16z M16.7373047,3.1964722C12.3201904,0.817749,6.9207764,2.1072388,4,6.0029297V3.5C4,3.223877,3.776123,3,3.5,3S3,3.223877,3,3.5v4c0,0.0001831,0,0.0003662,0,0.0006104C3.0001831,7.7765503,3.223999,8.0001831,3.5,8h4C7.776123,8,8,7.776123,8,7.5S7.776123,7,7.5,7H4.5239868c1.6599121-2.4746704,4.44104-3.9971313,7.4585571-4C16.9579468,2.9951782,20.9951782,7.0245972,21,12c0.0004272,0.4752808-0.0374146,0.9497681-0.1132202,1.4189453c-0.0001831,0.0007935-0.0003052,0.0015259-0.0004272,0.0023193c-0.0440063,0.2718506,0.140686,0.5278931,0.4125366,0.5718994C21.3259277,13.9978638,21.3533936,14.0001221,21.3808594,14c0.2445068-0.0003662,0.4527588-0.1776733,0.4921265-0.4190063C21.9577637,13.0582886,22.0002441,12.529541,22,12C21.9970703,8.3212891,19.9761963,4.9407349,16.7373047,3.1964722z"/></svg>
														</a>
													</div>
													<div class="btn-group hidden-phone">
														<a data-bs-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
															More
															<i class="fa fa-angle-down "></i>
														</a>
														<ul class="dropdown-menu">
															<li><a href="#"><i class="fa fa-pencil me-2"></i> Mark as Read</a></li>
															<li><a href="#"><i class="fa fa-ban me-2"></i> Spam</a></li>
															<li><a href="#"><i class="fa fa-trash-o me-2"></i> Delete</a></li>
														</ul>
													</div>
													<ul class="unstyled inbox-pagination">
														<li><span>1-50 of 234</span></li>

														<li>
															<a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
														</li>
													</ul>
												</div>
												<div class="table-responsive">
													<table class="table table-inbox table-hover text-nowrap mb-0">
														<tbody>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Tim Reid, S P N</td>
																<td class="view-message">Boost Your Website Traffic</td>
																<td class="view-message text-end fw-semibold">April 01</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Freelancer.com </td>
																<td class="view-message">Stop wasting your visitors </td>
																<td class="view-message text-end fw-semibold">May 23</td>
															</tr>
															<tr class="unread">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked>
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
																<td class="view-message  dont-show">PHPClass</td>
																<td class="view-message ">Added a new class: Login Class Fast Site</td>
																<td class="view-message  text-end">9:27 AM</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Facebook</td>
																<td class="view-message view-message">Somebody requested a new password </td>
																<td class="view-message text-end fw-semibold">June 13</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Skype</td>
																<td class="view-message view-message">Password successfully changed</td>
																<td class="view-message text-end fw-semibold">March 24</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Google+</td>
																<td class="view-message">alireza, do you know</td>
																<td class="view-message text-end fw-semibold">March 09</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">WOW Slider </td>
																<td class="view-message">New WOW Slider v7.8 - 67% off</td>
																<td class="view-message text-end fw-semibold">March 14</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">LinkedIn Pulse</td>
																<td class="view-message">The One Sign Your Co-Worker Will Stab</td>
																<td class="view-message text-end fw-semibold">Feb 19</td>
															</tr>
															<tr class="unread">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Google Webmaster </td>
																<td class="view-message">Improve the search presence of WebSite</td>
																<td class="view-message text-end fw-semibold">March 15</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">JW Player</td>
																<td class="view-message">Last Chance: Upgrade to Pro for </td>
																<td class="view-message text-end fw-semibold">March 15</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Drupal Community</td>
																<td class="view-message view-message">Welcome to the Drupal Community</td>
																<td class="view-message text-end fw-semibold">March 04</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="dont-show fw-semibold">Zoosk </td>
																<td class="view-message">7 new singles we think you'll like</td>
																<td class="view-message text-end fw-semibold">May 14</td>
															</tr>
															<tr class="unread">
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
																<td class="view-message dont-show fw-semibold">LinkedIn </td>
																<td class="view-message">Alireza: Nokia Networks, System Group and </td>
																<td class="view-message text-end fw-semibold">February 25</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="dont-show fw-semibold">Facebook</td>
																<td class="view-message view-message">Your account was recently logged into</td>
																<td class="view-message text-end fw-semibold">March 14</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Twitter</td>
																<td class="view-message">Your Twitter password has been changed</td>
																<td class="view-message text-end fw-semibold">April 07</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">InternetSeer</td>
																<td class="view-message">Performance Report</td>
																<td class="view-message text-end fw-semibold">July 14</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
																<td class="view-message dont-show fw-semibold">Bertina </td>
																<td class="view-message">IMPORTANT: Don't lose your domains!</td>
																<td class="view-message text-end fw-semibold">June 16</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
																<td class="view-message dont-show fw-semibold">Laura Gaffin, S P N </td>
																<td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
																<td class="view-message text-end fw-semibold">August 10</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Facebook</td>
																<td class="view-message view-message">Alireza Zare Login faild</td>
																<td class="view-message text-end fw-semibold">feb 14</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">AddMe.com</td>
																<td class="view-message">Submit Your Website to the AddMe Business Directory</td>
																<td class="view-message text-end fw-semibold">August 10</td>
															</tr>
															<tr>
																<td class="inbox-small-cells">
																	<label class="custom-control custom-checkbox mb-0">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label"></span>
																	</label>
																</td>
																<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
																<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
																<td class="view-message dont-show fw-semibold">Terri Rexer, S P N</td>
																<td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
																<td class="view-message text-end fw-semibold">April 14</td>
															</tr>

														</tbody>
													</table>

												</div>
											</div>
										</div>
									</div>
									<ul class="pagination mb-4">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection
