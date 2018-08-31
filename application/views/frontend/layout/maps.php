<div class="row">
				<div class="col-md-12">
					<br>
					<script src="https://maps.google.com/maps/api/js?key=AIzaSyC4xI03S7A49UtfJRr8cyE7IMptn3XTPKw" 
	          type="text/javascript"></script>
					<div id="map" style="width: 100%; height: 250px;"></div>
					<script type="text/javascript">
					    var locations = [
					      ['Citra Warna Imam Bonjol 1', -8.6831194,115.1961952, 1],
					      ['Citra Warna Imam Bonjol 2', -8.6980697,115.1855397, 2],
					      ['Citra Warna Buluh Indah', -8.6500855,115.1953654, 3],
					      ['Citra Warna Canggu', -8.6464189,115.1656472, 4],
					      ['Citra Warna Teuku Umar Barat', -8.6720333,115.1731858, 5],
					      ['Citra Warna Sunset Road', -8.696235,115.1758945, 6],
					      ['Citra Warna Gatot Subroto', -8.6357431,115.2299356, 7],
					      ['Citra Warna Ubud', -8.5258281,115.271246, 8],
					      ['Citra Warna Nusa Dua', -8.784843, 115.195003, 9],
					      ['Citra Warna Mahendradatta', -8.664949, 115.189706, 10],
					      ['Citra Warna Semabaung', -8.534997, 115.307913, 11],
					      ['Citra Warna Dalung', -8.635750, 115.175192],
					      ['Citra Warna Panjer', -8.677053, 115.239976],
					      ['Citra Warna Kediri Tabanan', -8.549910, 115.123622],
					      ['Citra Warna Singaraja', -8.120536, 115.072607],
					      ['Citra Warna Tibubeneng', -8.640428, 115.152664],
					      ['Citra Warna WR. Supratman', -8.640707, 115.252245]
					    ];

					    var map = new google.maps.Map(document.getElementById('map'), {
					      zoom: 12,
					      center: new google.maps.LatLng(-8.6595943,115.2019129),
					      mapTypeId: google.maps.MapTypeId.ROADMAP
					    });

					    var infowindow = new google.maps.InfoWindow();

					    var marker, i;

					    for (i = 0; i < locations.length; i++) {  
					      marker = new google.maps.Marker({
					        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					        map: map
					      });

					      google.maps.event.addListener(marker, 'click', (function(marker, i) {
					        return function() {
					          infowindow.setContent(locations[i][0]);
					          infowindow.open(map, marker);
					        }
					      })(marker, i));
					    }
					</script>
					
				</div>
			</div>
			<br><br>