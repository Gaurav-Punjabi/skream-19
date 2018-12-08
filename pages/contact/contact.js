var platform = new H.service.Platform({
    'app_id': 'WDUmhcMdwtEqgMzT7urT',
    'app_code': 'DuPYojcWM4lVJlsMYSIjlA'
});


// Obtain the default map types from the platform object:
var defaultLayers = platform.createDefaultLayers();

// Instantiate (and display) a map object:
var map = new H.Map(
    document.getElementById('map'),
    defaultLayers.normal.map, {
        zoom: 40,
        center: {
            lat: 19.073142, 
            lng: 72.899774
        }
    }
);
