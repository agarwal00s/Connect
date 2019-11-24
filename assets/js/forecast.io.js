function displayLocation(latitude,longitude){
        var request = new XMLHttpRequest();
        var method = 'GET';
        var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='+latitude+','+longitude+'&sensor=true';
        var async = true;
        request.open(method, url, async);
        request.onreadystatechange = function(){
          if(request.readyState == 4 && request.status == 200){
            var data = JSON.parse(request.responseText);
            var address = data.results[0];
			        var add= address.formatted_address ;
                    var  value=add.split(",");
                    count=value.length;
                    country=value[count-1];
                    state=value[count-2];
                    city=value[count-3];
					var srcVal="http://forecast.io/embed/#lat="+latitude+"&lon="+longitude+"&name="+city+"&font=Lucida Console&units=ca&color=#BDBDBD";
					$('#forecast_embed').attr('src', srcVal);
		}
          }
        request.send();
	};
      var successCallback = function(position){
        var x = position.coords.latitude;
        var y = position.coords.longitude;
		displayLocation(x,y);
      };
      var errorCallback = function(error){
        var errorMessage = 'Unknown error';
        switch(error.code) {
          case 1:
            errorMessage = 'Permission denied';
            break;
          case 2:
            errorMessage = 'Position unavailable';
            break;
          case 3:
            errorMessage = 'Timeout';
            break;
        }
      };
      var options = {
        enableHighAccuracy: true,
        timeout: 1000*10,
        maximumAge: 0
      };
navigator.geolocation.getCurrentPosition(successCallback,errorCallback,options);