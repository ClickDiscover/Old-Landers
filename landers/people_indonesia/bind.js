function loadScript(url, callback){

    var script = document.createElement("script")
    script.type = "text/javascript";

    if (script.readyState){  //IE
        script.onreadystatechange = function(){
            if (script.readyState == "loaded" ||
                    script.readyState == "complete"){
                script.onreadystatechange = null;
                callback();
            }
        };
    } else {  //Others
        script.onload = function(){
            callback();
        };
    }

    script.src = url;
    document.getElementsByTagName("head")[0].appendChild(script);
}

angular.module('App', []);

angular.module('App').factory('Branding', function(){
	var Branding = {
    brand_name      : 'BellaVeì',
    brand_name_2    : 'Phytoceramides',
    city            : 'Jakarta',
    state           : 'Selatan',
    price           :  '200',
    price2          :  '200',
    price3          :  '100',
    price4          :  '10'
	};
	return Branding;
}).controller("MainCtrl", function(Branding, $rootScope, $scope, $sce) {
	$scope.b = Branding;
	var redir = {};
	redir.href = window.location.href;
	redir.host = window.location.host;
	redir.pathname = window.location.pathname;
	redir.dest = redir.href.replace(redir.host + redir.pathname, 'vikingtrck.com/');

	$scope.country = '';

	loadScript('http://js.maxmind.com/js/geoip.js', function(){
		var x = geoip_country_name();
    var lat = geoip_latitude();
    var long = geoip_longitude();
    // alert("Lat and Long: " + lat + ", " + long);
		if (x)
			$scope.country = x;
		$scope.$apply();
	});


	if (window.location.search) {
	$scope.step1 = redir.dest.replace(/&oc2=[^&]*/i, '').replace(/&oc1=/i, '&oc=').replace(/&c=[^&]*/i, '&c=851');
	$scope.step2 = redir.dest.replace(/&oc1=[^&]*/i, '').replace(/&oc2=/i, '&oc=').replace(/&c=[^&]*/i, '&c=852');
	} else {
		$scope.step1 = 'https://bellaveiskincare.com/flux/#/id/main/';
		$scope.step2 = 'https://youthrenewphyto.com/flux/#/id/main/';
	}
	$scope.step1 = $sce.trustAsResourceUrl($scope.step1);
	$scope.step2 = $sce.trustAsResourceUrl($scope.step2);

	$scope.dateNew = function(dateVar) {
		var newDate = new Date();
		return newDate.setDate(newDate.getDate() + dateVar);
	}
  $scope.date = Date.now();
	$scope.countryName = function() {
		return geoip_country_name();
	}

	$scope.exitTo = function(){
		//this.m.exitmodal = false;
		window.onbeforeunload = false;
		//$location.path(this.m.exitpath);
		window.location.href = this.m.exitpath + window.location.search;
	}

	window.onbeforeunload = function(event) {
		$scope.m.exitmodal = true;
		$scope.$apply();
		if (navigator.userAgent.indexOf("Firefox") > -1) {
			alert($scope.m.message);
		}
		return $scope.m.message;
	}

});
