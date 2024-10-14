@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Mail-Settings</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
										<li class="breadcrumb-item active" aria-current="page">Mail Settings</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW -->
							<div class="row">
								<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<a href="{{url('mail-compose')}}" class="btn btn-outline-primary btn-block py-2">Compose</a>
										</div>
										<div class="card-body">
											<ul class="nav1 nav-column flex-column br-7">
												<li class="nav-item1 mt-0">
													<a class="nav-link thumb" href="{{url('mail-inbox')}}">
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
										</div>
										<div class="card-footer border-top p-5">
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

								<div class="col-lg-8 col-xl-9 col-md-12 col-sm-12">
									<div class="card">
										<div class="card-body">
											<form class="form-horizontal">
												<div class="mb-4 main-content-label">Account</div>
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label for="userName" class="form-label">User Name</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control" id="userName" placeholder="User Name" value="Elena">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label for="eMail" class="form-label">Email</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control" id="eMail" placeholder="Email" value="info@noa.spruko.in">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label for="language" class="form-label">Language</label>
														</div>
														<div class="col-md-9">
															<select class="form-control select2" id="language">
																<option value="US English">US English</option>
																<option value="Arabic">Arabic</option>
																<option value="Korean">Korean</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label for="timeZone" class="form-label">Timezone</label>
														</div>
														<div class="col-md-9">
															<select class="form-control select2" id="timeZone">
																<option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
																<option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
																<option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
																<option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
																<option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
																<option value="America/Anchorage">(GMT-09:00) Alaska</option>
																<option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
																<option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
																<option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
																<option value="America/Denver">(GMT-07:00) Mountain Time (US & Canada)</option>
																<option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
																<option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
																<option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
																<option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
																<option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
																<option value="America/Chicago">(GMT-06:00) Central Time (US & Canada)</option>
																<option value="America/New_York">(GMT-05:00) Eastern Time (US & Canada)</option>
																<option value="America/Havana">(GMT-05:00) Cuba</option>
																<option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
																<option value="America/Caracas">(GMT-04:30) Caracas</option>
																<option value="America/Santiago">(GMT-04:00) Santiago</option>
																<option value="America/La_Paz">(GMT-04:00) La Paz</option>
																<option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
																<option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
																<option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
																<option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
																<option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
																<option value="America/Araguaina">(GMT-03:00) UTC-3</option>
																<option value="America/Montevideo">(GMT-03:00) Montevideo</option>
																<option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
																<option value="America/Godthab">(GMT-03:00) Greenland</option>
																<option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
																<option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
																<option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
																<option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
																<option value="Atlantic/Azores">(GMT-01:00) Azores</option>
																<option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
																<option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
																<option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
																<option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
																<option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
																<option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
																<option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
																<option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
																<option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
																<option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
																<option value="Asia/Beirut">(GMT+02:00) Beirut</option>
																<option value="Africa/Cairo">(GMT+02:00) Cairo</option>
																<option value="Asia/Gaza">(GMT+02:00) Gaza</option>
																<option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
																<option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
																<option value="Europe/Minsk">(GMT+02:00) Minsk</option>
																<option value="Asia/Damascus">(GMT+02:00) Syria</option>
																<option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
																<option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
																<option value="Asia/Tehran">(GMT+03:30) Tehran</option>
																<option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
																<option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
																<option value="Asia/Kabul">(GMT+04:30) Kabul</option>
																<option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
																<option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
																<option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
																<option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
																<option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
																<option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
																<option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
																<option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
																<option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
																<option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
																<option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
																<option value="Australia/Perth">(GMT+08:00) Perth</option>
																<option value="Australia/Eucla">(GMT+08:45) Eucla</option>
																<option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
																<option value="Asia/Seoul">(GMT+09:00) Seoul</option>
																<option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
																<option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
																<option value="Australia/Darwin">(GMT+09:30) Darwin</option>
																<option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
																<option value="Australia/Hobart">(GMT+10:00) Hobart</option>
																<option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
																<option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
																<option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
																<option value="Asia/Magadan">(GMT+11:00) Magadan</option>
																<option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
																<option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
																<option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
																<option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
																<option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
																<option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
																<option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3 col">
															<label class="form-label">Verification</label>
														</div>
														<div class="col-md-9 col verification-options-main" id="verification">
															<label class="ckbox"><input type="checkbox" checked><span>Email</span></label>
															<label class="ckbox"><input type="checkbox"><span>SMS</span></label>
															<label class="ckbox"><input type="checkbox" checked><span>Phone</span></label>
														</div>
													</div>
												</div>
												<div class="mb-4 main-content-label">Security Settings</div>
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label">Login Verification</label>
														</div>
														<div class="col-md-9">
															<a class="text-teritary" href="#">Setup Verification</a>
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label">Password Verification</label>
														</div>
														<div class="col-md-9">
															<label class="ckbox"><input type="checkbox"><span>Require Personal Details</span></label>
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
														</div>
														<div class="col-md-9">
															<a class="mg-r-20 text-teritary" href="#">Deactivate Account</a>
															<a class="text-teritary" href="#">Change Password</a>
														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="card-footer">
											<div class="float-end"><a href="#" class="btn btn-primary">Save Changes</a></div>
										</div>
									</div>
								</div>
							</div>
							<!--ROW CLOSED-->

                            @endsection

        @section('scripts')

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- MAIL-SETTINGS JS -->
		<script src="{{asset('assets/js/mail-settings.js')}}"></script>

        @endsection
