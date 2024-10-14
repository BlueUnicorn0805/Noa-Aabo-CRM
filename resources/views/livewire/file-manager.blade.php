@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Files</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">File Manager</a></li>
										<li class="breadcrumb-item active" aria-current="page">Files</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- row -->
							<div class="row">
								<div class="col-lg-4 col-xl-3">
									<div class="card mb-4">
										<div class="card-header border-bottom">
											<a class="btn btn-outline-primary btn-block py-2" href="{{url('file-manager1')}}">All Files</a>
										</div>
										<div class="card-body">
											<ul class="nav1 nav-column flex-column br-7 p-3">
												<li class="nav-item1 mt-0">
													<a class="nav-link thumb active" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn me-2" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="" d="M11.999939,6.5c-0.276123,0-0.5,0.223877-0.5,0.5v4.6914062l-2.7059937,1.3623047c-0.168457,0.0848999-0.2747803,0.2573853-0.2749634,0.4460449C8.5187988,13.7758789,8.7424927,13.9998169,9.0185547,14c0.078064,0.0003662,0.1550903-0.0180664,0.2245483-0.0537109l2.9814453-1.5C12.3933105,12.3615112,12.4998169,12.1888428,12.499939,12V7C12.499939,6.723877,12.276123,6.5,11.999939,6.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
														Recent
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn me-2" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M20.2246094,4.5693359C17.9908447,2.3260498,14.4058838,2.1826172,12,4.2402344C9.5941162,2.1826172,6.0091553,2.3260498,3.7753906,4.5693359c-2.3632812,2.3798218-2.3632812,6.2207642,0,8.6005859l7.8701172,7.8955078c0.09375,0.0944824,0.2213745,0.147583,0.3544922,0.1474609c0.1331177,0.0001221,0.2607422-0.0529785,0.3544922-0.1474609l7.8701172-7.8955078C22.5878906,10.7901001,22.5878906,6.9491577,20.2246094,4.5693359z M19.515625,12.4649048L12,20.0048828l-7.515625-7.5400391c-1.9755859-1.9897461-1.9755859-5.2007446,0-7.1904297C5.430603,4.319458,6.7201538,3.7837524,8.0644531,3.7871094c1.3446655-0.00354,2.6345825,0.5322266,3.5810547,1.4873657c0.1983643,0.1894531,0.5106201,0.1894531,0.7089844,0c0.0047607-0.0047607,0.0094604-0.0095215,0.0142212-0.0142822c1.9775391-1.9696045,5.1773071-1.9632568,7.1469116,0.0142822C21.4912109,7.2641602,21.4912109,10.4751587,19.515625,12.4649048z"/></svg>
														Favourites
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn me-2" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12,8c-2.2091675,0-4,1.7908325-4,4s1.7908325,4,4,4c2.208252-0.0021973,3.9978027-1.791748,4-4C16,9.7908325,14.2091675,8,12,8z M12,15c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C15,13.6568604,13.6568604,15,12,15z M21.960022,11.8046875C19.9189453,6.9902344,16.1025391,4,12,4s-7.9189453,2.9902344-9.960022,7.8046875c-0.0537109,0.1246948-0.0537109,0.2659302,0,0.390625C4.0810547,17.0097656,7.8974609,20,12,20s7.9190063-2.9902344,9.960022-7.8046875C22.0137329,12.0706177,22.0137329,11.9293823,21.960022,11.8046875z M12,19c-3.6396484,0-7.0556641-2.6767578-8.9550781-7C4.9443359,7.6767578,8.3603516,5,12,5s7.0556641,2.6767578,8.9550781,7C19.0556641,16.3232422,15.6396484,19,12,19z"/></svg>
														Hidden FIles
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn me-2" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M7.8535156,7.3535156L11.5,3.7069702v10.7935791C11.5001831,14.7765503,11.723999,15.0001831,12,15h0.0006104c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5V3.7069702l3.6464844,3.6465454C16.2401123,7.4474487,16.3673706,7.5001831,16.5,7.5c0.1325073,0,0.2596436-0.0526733,0.3533936-0.1463623c0.1953125-0.1952515,0.1953735-0.5118408,0.0001221-0.7070923l-4.5-4.5c-0.000061-0.000061-0.000061-0.0001221-0.0001221-0.0001831c-0.1952515-0.1951294-0.5117188-0.1950684-0.7068481,0.0001831l-4.5,4.5c-0.1871948,0.1937256-0.1871948,0.5009155,0,0.6947021C7.3383789,7.539856,7.6549072,7.5453491,7.8535156,7.3535156z M21.5,12c-0.276123,0-0.5,0.223877-0.5,0.5v7c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-7C3,12.223877,2.776123,12,2.5,12S2,12.223877,2,12.5v7c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-7C22,12.223877,21.776123,12,21.5,12z"/></svg>
														Transfer files
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn me-2" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.7319336,15.1376953c-0.0018921-0.0333252-0.0109253-0.0648193-0.0196533-0.0977173c-0.0087891-0.0328369-0.0167847-0.0644531-0.0317383-0.0942383c-0.0046387-0.0092773-0.0043945-0.0195923-0.0096436-0.0287476L15.5126953,4.25C15.4235229,4.0953369,15.258606,4.000061,15.0800781,4H8.9208984C8.833252,4.000061,8.7471924,4.0231934,8.6712646,4.0670166C8.5995483,4.1083984,8.5473633,4.1674805,8.5056152,4.2327271C8.5006104,4.239502,8.492981,4.2429199,8.4882812,4.25L2.3291016,14.9169922c-0.0898438,0.154541-0.0898438,0.345459,0,0.5L5.4091797,20.75c0.0072021,0.0125122,0.0214233,0.0179443,0.0296021,0.0296631c0.0339355,0.0488281,0.0745239,0.0894775,0.1233521,0.1234741c0.0183716,0.0127563,0.0338135,0.026062,0.0537109,0.0362549C5.6845093,20.9749756,5.7591553,20.999939,5.8417969,21h12.3173828c0.1785278-0.000061,0.3434448-0.0953369,0.4326172-0.25l3.0791016-5.3330078c0.0070801-0.0122681,0.0048828-0.0276489,0.0108643-0.0404663c0.0253296-0.053894,0.0402832-0.109314,0.0452881-0.1686401c0.0012207-0.0140991,0.0108643-0.0262451,0.0108643-0.0404663C21.737915,15.1568604,21.7325439,15.1480713,21.7319336,15.1376953z M14.7910156,5l5.5810547,9.6669922h-5.0029297L9.7871094,5H14.7910156z M14.2144165,14.6669922H9.7861938l2.2139282-3.8348389L14.2144165,14.6669922z M3.3388672,15.1669922L8.9208984,5.5l2.5019531,4.3330078L5.8417969,19.5L3.3388672,15.1669922z M17.8701172,20H6.7080078l2.5020142-4.3330078h11.1621094L17.8701172,20z"/></svg>
														Google Drive
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn me-2" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19,2H5C3.3438721,2.0018311,2.0018311,3.3438721,2,5v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.6365356l-0.5848389,0.9736328c-0.1871948,0.3120117-0.2855835,0.6692505-0.284668,1.0331421C6.7698364,21.1104126,7.6668091,22.0028076,8.7704468,22h6.460022c0.3610229-0.0005493,0.71521-0.098938,1.0247803-0.284668c0.9460449-0.567627,1.2528076-1.7946777,0.6852417-2.7407227L16.3602295,18H19c1.6561279-0.0018311,2.9981689-1.3438721,3-3V5C21.9981689,3.3438721,20.6561279,2.0018311,19,2z M15.2305298,21h-6.460022c-0.1824951,0.0009155-0.3616943-0.0482178-0.5182495-0.1420288c-0.4729614-0.2834473-0.6265869-0.8967285-0.3431396-1.3696899L8.8035889,18h6.3926392l0.8858643,1.4873047c0.0929565,0.1544189,0.142395,0.3311157,0.1430054,0.5114136C16.2269287,20.5498657,15.7816772,20.9981689,15.2305298,21z M21,15c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040649-0.0012817-1.9987183-0.8959351-2-2v-1h18V15z M21,13H3V5c0.0012817-1.1040649,0.8959351-1.9987183,2-2h14c1.1040039,0.0014038,1.9985962,0.8959961,2,2V13z"/></svg>
														FTP
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn me-2" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17,9V7c0-2.7614136-2.2385864-5-5-5S7,4.2385864,7,7v2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v7c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-7C19.9981689,10.3438721,18.6561279,9.0018311,17,9z M8,7c0-2.2091675,1.7908325-4,4-4s4,1.7908325,4,4v2H8V7z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-7c0.0014038-1.1040039,0.8959961-1.9985962,2-2h0.5h9h0.0006104H17c1.1040039,0.0014038,1.9985962,0.8959961,2,2V19z"/></svg>
														Private FIles
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn me-2" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M13.8964233,9.9463501l-3.046875,3.046814l-1.2460938-1.2470703c-0.1943359-0.1904907-0.5054321-0.1904907-0.6998291,0c-0.1972046,0.1932983-0.2003784,0.5098267-0.0071411,0.7070312l1.5996094,1.6005859c0.09375,0.093811,0.2208862,0.1464844,0.3535156,0.1464844c0.1325684,0,0.2597046-0.0526733,0.3534546-0.1464844l3.4075317-3.4075317c0.1932373-0.1972046,0.1900635-0.5137939-0.0071411-0.7070312S14.0897217,9.7490845,13.8964233,9.9463501z M19.9894409,3.753418c-0.0565796-0.2703857-0.3215942-0.4437256-0.59198-0.387207c-2.4692383,0.5214233-5.0440674-0.005127-7.1103516-1.4541016c-0.1722412-0.1210938-0.4019775-0.1210938-0.5742188,0C9.6466675,3.361145,7.0717773,3.8877563,4.6025391,3.3662109C4.5689697,3.3591919,4.53479,3.3556519,4.5004883,3.3556519C4.2242432,3.3554688,4.0001831,3.5792236,4,3.8554688v8.0185547c0.0016479,2.9362183,1.4152222,5.6925659,3.7988281,7.4072266l3.9101562,2.8037109C11.7937622,22.1459961,11.8955688,22.178833,12,22.1787109c0.1044312,0.0001221,0.2062378-0.0326538,0.2910156-0.093689l3.9101562-2.803772C18.5847778,17.5665894,19.9983521,14.8102417,20,11.8740234V3.8554688C20,3.821167,19.99646,3.7869873,19.9894409,3.753418z M19,11.8740234c-0.0010986,2.6139526-1.2591553,5.0679321-3.3808594,6.5947266L12,21.0634766L8.3808594,18.46875C6.2591553,16.9418945,5.0010986,14.4879761,5,11.8740234V4.453125c2.4417725,0.3647461,4.9324951-0.1790161,7-1.5283203c2.067688,1.348938,4.5582886,1.8927002,7,1.5283203V11.8740234z"/></svg>
														Deep Clean
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn me-2" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M20.5,6H16V4.5c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-3C9.119812,2.0012817,8.0012817,3.119812,8,4.5V6H3.5C3.223877,6,3,6.223877,3,6.5S3.223877,7,3.5,7H5v12.5c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h9c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5V7h1.5C20.776123,7,21,6.776123,21,6.5S20.776123,6,20.5,6z M9,4.5C9.0009155,3.671936,9.671936,3.0009155,10.5,3h3c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6H9V4.5z M18,19.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-9c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V7h12V19.5z M9.5,18h0.0006104C9.7765503,17.9998169,10.0001831,17.776001,10,17.5v-7c0-0.276123-0.223877-0.5-0.5-0.5S9,10.223877,9,10.5v7.0005493C9.0001831,17.7765503,9.223999,18.0001831,9.5,18z M14.5,18h0.0006104C14.7765503,17.9998169,15.0001831,17.776001,15,17.5v-7c0-0.276123-0.223877-0.5-0.5-0.5S14,10.223877,14,10.5v7.0005493C14.0001831,17.7765503,14.223999,18.0001831,14.5,18z"/></svg>
														Trash Bin
													</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn me-2" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,13h-8.0005493C13.2234497,13.0001831,12.9998169,13.223999,13,13.5v8.0005493C13.0001831,21.7765503,13.223999,22.0001831,13.5,22h8.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-8.0006104C21.9998169,13.2234497,21.776001,12.9998169,21.5,13z M21,21h-7v-7h7V21z M10.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v8.0005493C2.0001831,10.7765503,2.223999,11.0001831,2.5,11h8.0006104C10.7765503,10.9998169,11.0001831,10.776001,11,10.5V2.4993896C10.9998169,2.2234497,10.776001,1.9998169,10.5,2z M10,10H3V3h7V10z M10.5,13H2.4993896C2.2234497,13.0001831,1.9998169,13.223999,2,13.5v8.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h8.0006104C10.7765503,21.9998169,11.0001831,21.776001,11,21.5v-8.0006104C10.9998169,13.2234497,10.776001,12.9998169,10.5,13z M10,21H3v-7h7V21z M21.5,2h-8.0005493C13.2234497,2.0001831,12.9998169,2.223999,13,2.5v8.0005493C13.0001831,10.7765503,13.223999,11.0001831,13.5,11h8.0006104C21.7765503,10.9998169,22.0001831,10.776001,22,10.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M21,10h-7V3h7V10z"/></svg>
														More
													</a>
												</li>
											</ul>
											<div class="card custom-card mt-0 p-2 pb-0 mb-0 shadow-none storage-card">
												<div class="card-header font-weight-bold px-3 pb-2 border-bottom-0">
													<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn me-2" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.5,16c-0.8284302,0-1.5,0.6715698-1.5,1.5s0.6715698,1.5,1.5,1.5c0.828064-0.0009155,1.4990845-0.671936,1.5-1.5C19,16.6715698,18.3284302,16,17.5,16z M17.5,18c-0.276123,0-0.5-0.223877-0.5-0.5s0.223877-0.5,0.5-0.5c0.2759399,0.0005493,0.4994507,0.2240601,0.5,0.5C18,17.776123,17.776123,18,17.5,18z M21.9910889,15.4124756c-0.0004272-0.0222778,0.0065308-0.0431519,0.0030518-0.0657959l-0.0283203-0.1831055c-0.0103149-0.0753784-0.0178223-0.151001-0.034729-0.2241211L20.2558594,4.1181641C20.0731201,2.8966064,19.0212402,1.9945068,17.7861328,2H6.2138672C4.9787598,1.9945068,3.9268799,2.8966064,3.7441406,4.1181641L2.0689087,14.9394531c-0.0169067,0.0731201-0.0244141,0.1487427-0.034729,0.2241211l-0.0283203,0.1831055c-0.0031128,0.0215454,0.0036621,0.0413818,0.0033569,0.0626221C2.0080566,15.4400635,2,15.4689331,2,15.5v4c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-4C22,15.4700317,21.9921875,15.4421997,21.9910889,15.4124756z M4.7324219,4.2705078C4.8417358,3.5376587,5.4729004,2.9963989,6.2138672,3h11.5722656c0.7409668-0.0036011,1.3721313,0.5376587,1.4814453,1.2705078l1.3981323,9.0314331C20.3162231,13.1159058,19.9234619,13.0003662,19.5,13h-15c-0.4234619,0.0003662-0.8162231,0.1159058-1.1657104,0.3019409L4.7324219,4.2705078z M21,19.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-4c0.000061-0.0388184,0.008606-0.0753174,0.0115356-0.1134033l0.0391235-0.2528076C3.215332,14.4837646,3.7990112,14.0007935,4.5,14h15c0.7009888,0.0007935,1.284668,0.4837646,1.4493408,1.1337891l0.0391235,0.2528076C20.991394,15.4246826,20.999939,15.4611816,21,15.5V19.5z"/></svg>
													Storage
												</div>
												<div class="card-body pt-0 pb-0 px-3">
													<div class="storage-percent">
														<div class="progress fileprogress h-auto ps-0 mb-2">
															<div class="progress-bar progress-bar-xs wd-15p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="text-muted font-weight-semibold tx-13 mb-1">26.24 GB Used of 128GB</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-body upgrade-storage bg-primary-transparent">
											<a href="javascript:void(0)">
												<div class="upgrade-main text-center">
													<svg class="mb-1" xmlns="http://www.w3.org/2000/svg" style="width: 3rem;" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#67a719" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"/><path fill="#a3ca75" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"/></svg>
													<h4 class="mb-1">Upgrade Storage</h4>
													<span class="text-primary-lit mt-1">Extra 10GB Storage and More...</span>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-lg-8 col-xl-9">
									<div class="row mb-2">
										<div class="col-xl-6 col-md-6 col-sm-12">
											<div class="tx-18 mb-4">
												Files
											</div>
										</div>
										<div class="col-xl-6 col-md-6 col-sm-12 col-auto">
											<div class="input-group mb-2">
												<input type="text" class="form-control" placeholder="Search in file manager.....">
												<button class="btn ripple btn-primary input-group-text text-white border-0" type="button">Search</button>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="card custom-card overflow-hidden">
												<div class="card-body p-3">
													<div class="breadcrumb-main">
														<nav aria-label="breadcrumb">
															<ol class="breadcrumb mb-0">
															<li class="breadcrumb-item active"><a href="{{url('file-manager')}}" class="text-primary">Home</a></li>
															</ol>
														</nav>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-3 col-md-6 col-sm-12">
											<div class="card">
												<a href="{{url('file-manager2')}}">
													<div class="card-body">
														<div class="file-type tx-16 my-1">
															<svg class="file-manager-icon w-icn me-2"  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#c8e4a6" d="M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#add679" d="M19,2H5C3.34515,2.00483,2.00483,3.34515,2,5v8.86l3.88-3.88c1.18747-1.13,3.05253-1.13,4.24,0l2.87139,2.887l0.88752-0.88751c1.17344-1.16662,3.06874-1.16662,4.24218,0L22,15.8584V5C21.99517,3.34515,20.65485,2.00483,19,2z M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#77bc21" d="M10.12,9.98c-1.18747-1.13-3.05253-1.13-4.24,0L2,13.86V19c0.00484,1.65484,1.34516,2.99516,3,3h14c0.81512-0.00034,1.59497-0.3325,2.16-0.92L10.12,9.98z"/><path fill="#c8e4a6" d="M22,15.8584l-3.87891-3.87891c-1.17345-1.1666-3.06873-1.1666-4.24218,0L12.99139,12.867l8.16425,8.20856C21.69776,20.5208,22.00089,19.77567,22,19V15.8584z"/></svg>
															Image
															<div class="float-end tx-13 text-muted">14.2 mb</div>
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-md-6 col-sm-12">
											<div class="card">
												<a href="{{url('file-manager2')}}">
													<div class="card-body">
														<div class="file-type tx-16 my-1">
															<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#f2c8db" d="M14,18H5c-1.65611-0.00181-2.99819-1.34389-3-3V9c0.00181-1.65611,1.34389-2.99819,3-3h9c1.65611,0.00181,2.99819,1.34389,3,3v6C16.99819,16.65611,15.65611,17.99819,14,18z"/><path fill="#eaa4c4" d="M21.89465,7.55359c-0.24683-0.49432-0.8476-0.69495-1.34192-0.44812l-3.56421,1.7821C16.98999,8.92572,16.99994,8.96149,17,9v6c-0.00006,0.03851-0.01001,0.07428-0.01147,0.11243l3.56421,1.7821C20.69165,16.96381,20.84479,16.99994,21,17c0.55212-0.00037,0.99969-0.44788,1-1V8C21.99994,7.84503,21.96387,7.6922,21.89465,7.55359z"/></svg>
															Video
															<div class="float-end tx-13 text-muted">212 mb</div>
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-md-6 col-sm-12">
											<div class="card">
												<a href="{{url('file-manager2')}}">
													<div class="card-body">
														<div class="file-type tx-16 my-1">
															<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#b6dfff" d="M20,8.99969l-7-7H7a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z"/><path fill="#86cbff" d="M20 8.99969H15a2 2 0 0 1-2-2v-5zM19 22a.99974.99974 0 0 1-1-1V19a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 19 22zM19 17a1.03391 1.03391 0 0 1-.71-.29.99108.99108 0 0 1-.21045-1.08984A1.14883 1.14883 0 0 1 18.29 15.29a1.02673 1.02673 0 0 1 .32959-.21.91433.91433 0 0 1 .76025 0 1.03418 1.03418 0 0 1 .33008.21 1.15772 1.15772 0 0 1 .21.33008A.98919.98919 0 0 1 19.71 16.71a1.15384 1.15384 0 0 1-.33008.21A.9994.9994 0 0 1 19 17zM15 18H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM15 14H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM10 10H9A1 1 0 0 1 9 8h1a1 1 0 0 1 0 2z"/></svg>
															Docs
															<div class="float-end tx-13 text-muted">34 mb</div>
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-md-6 col-sm-12">
											<div class="card">
												<a href="{{url('file-manager2')}}">
													<div class="card-body">
														<div class="file-type tx-16 my-1">
															<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#efc956" d="M21.65137,2.24121a1.00561,1.00561,0,0,0-.80323-.22949l-13,2A1.00054,1.00054,0,0,0,7,5V15.35107A3.45946,3.45946,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.85779L20,9.16553v4.18554A3.45946,3.45946,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A.99909.99909,0,0,0,21.65137,2.24121Z"/></svg>
															Music
															<div class="float-end tx-13 text-muted">1.5 gb</div>
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-md-6 col-sm-12">
											<div class="card">
												<a href="{{url('file-manager2')}}">
													<div class="card-body">
														<div class="file-type tx-16 my-1">
															<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#fdc79a" d="M16,10H8c-2.20917,0-4-1.79083-4-4v6c0.0022,2.20825,1.79175,3.9978,4,4h8c2.20825-0.0022,3.9978-1.79175,4-4V6C20,8.20917,18.20917,10,16,10z"/><path fill="#fdab67" d="M16,16H8c-2.20825-0.0022-3.9978-1.79175-4-4v6c0.0022,2.20825,1.79175,3.9978,4,4h8c2.20825-0.0022,3.9978-1.79175,4-4v-6C19.9978,14.20825,18.20825,15.9978,16,16z"/><polygon fill="#fdc79a" points="20 5.998 20 6 20 5.999"/><path fill="#fdab67" d="M16,10H8c-2.20914,0-4-1.79086-4-4s1.79086-4,4-4h8c2.20914,0,4,1.79086,4,4S18.20914,10,16,10z"/><circle cx="8" cy="13" r="1" fill="#fc7303"/><circle cx="8" cy="19" r="1" fill="#fc7303"/></svg>
															APK
															<div class="float-end tx-13 text-muted">550 mb</div>
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-md-6 col-sm-12">
											<div class="card">
												<a href="{{url('file-manager2')}}">
													<div class="card-body">
														<div class="file-type tx-16 my-1">
															<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#a6b2ed" d="M20,9,13,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z"/><path fill="#6b80e2" d="M20 9H15a2 2 0 0 1-2-2V2zM12 18.00031a.99943.99943 0 0 1-1-1v-5a1 1 0 1 1 2 0v5A.99943.99943 0 0 1 12 18.00031z"/><path fill="#6b80e2" d="M12,18.00031a.99676.99676,0,0,1-.707-.293l-2-2A.99989.99989,0,1,1,10.707,14.29328L12,15.58625l1.293-1.293A.99989.99989,0,1,1,14.707,15.70734l-2,2A.99676.99676,0,0,1,12,18.00031Z"/></svg>
															Downloads
															<div class="float-end tx-13 text-muted">10.8 mb</div>
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-md-6 col-sm-12">
											<div class="card">
												<a href="{{url('file-manager2')}}">
													<div class="card-body">
														<div class="file-type tx-16 my-1">
															<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#fdb172" d="M12.00011,22h-9a.99991.99991,0,0,1-.707-1.707L4.257,18.3291A10.00061,10.00061,0,1,1,12.00011,22Z"/><path fill="#fd7e14" d="M12,16.24219a.99676.99676,0,0,1-.707-.293L8.46484,13.12109a3.00244,3.00244,0,0,1,0-4.24218A3.06772,3.06772,0,0,1,12,8.35254a3.0699,3.0699,0,0,1,3.53613.52637,3.00332,3.00332,0,0,1-.001,4.24218L12.707,15.94922A.99676.99676,0,0,1,12,16.24219Z"/></svg>
															Chat
															<div class="float-end tx-13 text-muted">1.5 Gb</div>
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-md-6 col-sm-12">
											<div class="card">
												<a href="#">
													<div class="card-body">
														<div class="file-type tx-16 my-1">
															<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect width="9" height="9" x="2" y="2" fill="#e6647f" rx="1"/><rect width="9" height="9" x="2" y="13" fill="#f0a2b2" rx="1"/><rect width="9" height="9" x="13" y="2" fill="#f0a2b2" rx="1"/><rect width="9" height="9" x="13" y="13" fill="#f0a2b2" rx="1"/></svg>
															More
															<div class="float-end tx-13 text-muted">16 Gb</div>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-12 ">
											<div class="card">
												<div class="card-header border-bottom">
													<p class="mb-0 tx-16">Recent Files</p>
												</div>
												<div class="card-body ">
													<div class="table-responsive">
														<table class="table  border text-nowrap text-md-nowrap recent-files-container">
															<thead>
																<tr class="row-first">
																	<th>File Name</th>
																	<th>Date Modified</th>
																	<th>Type</th>
																	<th>Size</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<div class="recent-files">
																			<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#b6dfff" d="M20,8.99969l-7-7H7a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z"/><path fill="#86cbff" d="M20 8.99969H15a2 2 0 0 1-2-2v-5zM19 22a.99974.99974 0 0 1-1-1V19a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 19 22zM19 17a1.03391 1.03391 0 0 1-.71-.29.99108.99108 0 0 1-.21045-1.08984A1.14883 1.14883 0 0 1 18.29 15.29a1.02673 1.02673 0 0 1 .32959-.21.91433.91433 0 0 1 .76025 0 1.03418 1.03418 0 0 1 .33008.21 1.15772 1.15772 0 0 1 .21.33008A.98919.98919 0 0 1 19.71 16.71a1.15384 1.15384 0 0 1-.33008.21A.9994.9994 0 0 1 19 17zM15 18H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM15 14H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM10 10H9A1 1 0 0 1 9 8h1a1 1 0 0 1 0 2z"/></svg>
																			<span class="mb-1 font-weight-semibold">noa documentation</span>
																		</div>
																	</td>
																	<td>
																		<span class="text-muted modified-date">07/10/21, 03:30</span>
																	</td>
																	<td>
																		<span>doc</span>
																	</td>
																	<td>
																		<span class=" text-muted file-size">15kb</span>
																	</td>
																	<td>
																		<div class="float-end ms-auto">
																			<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																			<div class="dropdown-menu dropdown-menu-start recent-files-options">
																				<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="recent-files">
																			<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#f2c8db" d="M14,18H5c-1.65611-0.00181-2.99819-1.34389-3-3V9c0.00181-1.65611,1.34389-2.99819,3-3h9c1.65611,0.00181,2.99819,1.34389,3,3v6C16.99819,16.65611,15.65611,17.99819,14,18z"/><path fill="#eaa4c4" d="M21.89465,7.55359c-0.24683-0.49432-0.8476-0.69495-1.34192-0.44812l-3.56421,1.7821C16.98999,8.92572,16.99994,8.96149,17,9v6c-0.00006,0.03851-0.01001,0.07428-0.01147,0.11243l3.56421,1.7821C20.69165,16.96381,20.84479,16.99994,21,17c0.55212-0.00037,0.99969-0.44788,1-1V8C21.99994,7.84503,21.96387,7.6922,21.89465,7.55359z"/></svg>
																			<span class="mb-1 font-weight-semibold">sample video</span>
																		</div>
																	</td>
																	<td>
																		<span class="text-muted modified-date">07/10/21, 03:30</span>
																	</td>
																	<td>
																		<span>mp4</span>
																	</td>
																	<td>
																		<span class=" text-muted file-size">30mb</span>
																	</td>
																	<td>
																		<div class="float-end ms-auto">
																			<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																			<div class="dropdown-menu dropdown-menu-start recent-files-options">
																				<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="recent-files">
																			<svg class="file-manager-icon w-icn me-2"  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#c8e4a6" d="M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#add679" d="M19,2H5C3.34515,2.00483,2.00483,3.34515,2,5v8.86l3.88-3.88c1.18747-1.13,3.05253-1.13,4.24,0l2.87139,2.887l0.88752-0.88751c1.17344-1.16662,3.06874-1.16662,4.24218,0L22,15.8584V5C21.99517,3.34515,20.65485,2.00483,19,2z M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#77bc21" d="M10.12,9.98c-1.18747-1.13-3.05253-1.13-4.24,0L2,13.86V19c0.00484,1.65484,1.34516,2.99516,3,3h14c0.81512-0.00034,1.59497-0.3325,2.16-0.92L10.12,9.98z"/><path fill="#c8e4a6" d="M22,15.8584l-3.87891-3.87891c-1.17345-1.1666-3.06873-1.1666-4.24218,0L12.99139,12.867l8.16425,8.20856C21.69776,20.5208,22.00089,19.77567,22,19V15.8584z"/></svg>
																			<span class="mb-1 font-weight-semibold">sample image</span>
																		</div>
																	</td>
																	<td>
																		<span class="text-muted modified-date">07/10/21, 03:30</span>
																	</td>
																	<td>
																		<span>jpeg</span>
																	</td>
																	<td>
																		<span class=" text-muted file-size">15kb</span>
																	</td>
																	<td>
																		<div class="float-end ms-auto">
																			<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																			<div class="dropdown-menu dropdown-menu-start recent-files-options">
																				<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="recent-files">
																			<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#b6dfff" d="M20,8.99969l-7-7H7a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z"/><path fill="#86cbff" d="M20 8.99969H15a2 2 0 0 1-2-2v-5zM19 22a.99974.99974 0 0 1-1-1V19a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 19 22zM19 17a1.03391 1.03391 0 0 1-.71-.29.99108.99108 0 0 1-.21045-1.08984A1.14883 1.14883 0 0 1 18.29 15.29a1.02673 1.02673 0 0 1 .32959-.21.91433.91433 0 0 1 .76025 0 1.03418 1.03418 0 0 1 .33008.21 1.15772 1.15772 0 0 1 .21.33008A.98919.98919 0 0 1 19.71 16.71a1.15384 1.15384 0 0 1-.33008.21A.9994.9994 0 0 1 19 17zM15 18H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM15 14H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM10 10H9A1 1 0 0 1 9 8h1a1 1 0 0 1 0 2z"/></svg>
																			<span class="mb-1 font-weight-semibold">word document</span>
																		</div>
																	</td>
																	<td>
																		<span class="text-muted modified-date">07/10/21, 03:30</span>
																	</td>
																	<td>
																		<span>doc</span>
																	</td>
																	<td>
																		<span class=" text-muted file-size">15kb</span>
																	</td>
																	<td>
																		<div class="float-end ms-auto">
																			<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																			<div class="dropdown-menu dropdown-menu-start recent-files-options">
																				<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="recent-files">
																			<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#efc956" d="M21.65137,2.24121a1.00561,1.00561,0,0,0-.80323-.22949l-13,2A1.00054,1.00054,0,0,0,7,5V15.35107A3.45946,3.45946,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.85779L20,9.16553v4.18554A3.45946,3.45946,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A.99909.99909,0,0,0,21.65137,2.24121Z"/></svg>
																			<span class="mb-1 font-weight-semibold">sample audio</span>
																		</div>
																	</td>
																	<td>
																		<span class="text-muted modified-date">07/10/21, 03:30</span>
																	</td>
																	<td>
																		<span>mp3</span>
																	</td>
																	<td>
																		<span class=" text-muted file-size">5.3mb</span>
																	</td>
																	<td>
																		<div class="float-end ms-auto">
																			<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																			<div class="dropdown-menu dropdown-menu-start recent-files-options">
																				<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="recent-files">
																			<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#f2c8db" d="M14,18H5c-1.65611-0.00181-2.99819-1.34389-3-3V9c0.00181-1.65611,1.34389-2.99819,3-3h9c1.65611,0.00181,2.99819,1.34389,3,3v6C16.99819,16.65611,15.65611,17.99819,14,18z"/><path fill="#eaa4c4" d="M21.89465,7.55359c-0.24683-0.49432-0.8476-0.69495-1.34192-0.44812l-3.56421,1.7821C16.98999,8.92572,16.99994,8.96149,17,9v6c-0.00006,0.03851-0.01001,0.07428-0.01147,0.11243l3.56421,1.7821C20.69165,16.96381,20.84479,16.99994,21,17c0.55212-0.00037,0.99969-0.44788,1-1V8C21.99994,7.84503,21.96387,7.6922,21.89465,7.55359z"/></svg>
																			<span class="mb-1 font-weight-semibold">sample video</span>
																		</div>
																	</td>
																	<td>
																		<span class="text-muted modified-date">07/10/21, 03:30</span>
																	</td>
																	<td>
																		<span>mp4</span>
																	</td>
																	<td>
																		<span class=" text-muted file-size">30mb</span>
																	</td>
																	<td>
																		<div class="float-end ms-auto">
																			<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																			<div class="dropdown-menu dropdown-menu-start recent-files-options">
																				<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr class="row-last">
																	<td>
																		<div class="recent-files">
																			<svg class="file-manager-icon w-icn me-2"  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#c8e4a6" d="M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#add679" d="M19,2H5C3.34515,2.00483,2.00483,3.34515,2,5v8.86l3.88-3.88c1.18747-1.13,3.05253-1.13,4.24,0l2.87139,2.887l0.88752-0.88751c1.17344-1.16662,3.06874-1.16662,4.24218,0L22,15.8584V5C21.99517,3.34515,20.65485,2.00483,19,2z M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#77bc21" d="M10.12,9.98c-1.18747-1.13-3.05253-1.13-4.24,0L2,13.86V19c0.00484,1.65484,1.34516,2.99516,3,3h14c0.81512-0.00034,1.59497-0.3325,2.16-0.92L10.12,9.98z"/><path fill="#c8e4a6" d="M22,15.8584l-3.87891-3.87891c-1.17345-1.1666-3.06873-1.1666-4.24218,0L12.99139,12.867l8.16425,8.20856C21.69776,20.5208,22.00089,19.77567,22,19V15.8584z"/></svg>
																			<span class="mb-1 font-weight-semibold">sample image</span>
																		</div>
																	</td>
																	<td>
																		<span class="text-muted modified-date">07/10/21, 03:30</span>
																	</td>
																	<td>
																		<span>jpeg</span>
																	</td>
																	<td>
																		<span class=" text-muted file-size">15kb</span>
																	</td>
																	<td>
																		<div class="float-end ms-auto">
																			<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																			<div class="dropdown-menu dropdown-menu-start recent-files-options">
																				<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

                            @endsection

        @section('scripts')

        @endsection
