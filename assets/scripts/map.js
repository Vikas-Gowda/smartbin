 var locations = [
      
      ['Bin-4', 12.991970, 75.340563, 4],
      ['Bin-3', 12.990172, 75.340187, 3],
      ['Bin-2', 12.990731, 75.341501, 2],
      ['Bin-1',12.992425, 75.340014, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 17,
      center: new google.maps.LatLng(12.991494, 75.342129),
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
	  if(i==0){
	  var infowindow = new google.maps.InfoWindow({
    content: "Bin-1"
  });
  infowindow.open(map,marker);
	}
	else if(i==1){
	  var infowindow = new google.maps.InfoWindow({
    content: "Bin-2"
  });
  infowindow.open(map,marker);
	}
	else if(i==2){
	  var infowindow = new google.maps.InfoWindow({
    content: "Bin-3"
  });
  infowindow.open(map,marker);
	}
	else if(i==3){
	  var infowindow = new google.maps.InfoWindow({
    content: "Bin-4"
  });
  infowindow.open(map,marker);
	}
	
    }