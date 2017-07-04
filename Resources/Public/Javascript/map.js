var map = (function($) {
	
	'use strict';
	
	var
	
	init = null,
	options = {
		maps : {
			center : {
				lat : 49,
				lng : 11.88
			},
			zoom : 4,
			scrollwheel : false,
			draggable : !('ontouchend' in window),
			disableDefaultUI : true,
			styles : [
				{
					'elementType': 'geometry',
					'stylers': [
						{ 'visibility': 'off' }
					]
				},
				{
					'elementType': 'labels',
					'stylers': [
						{ 'visibility': 'off' }
					]
				},
				{
					'featureType': 'water',
					'elementType': 'geometry.fill',
					'stylers': [
						{ 'color': '#e3e1dc' },
						{ 'visibility': 'on' }
					]
				}
			],
		},
		marker : {
			icon : '/typo3conf/ext/azgr_events/Resources/Public/Images/icon-mapmarker.png',
			icon_active : '/typo3conf/ext/azgr_events/Resources/Public/Images/icon-mapmarker-active.png'
		},
		layer : {
			fillColor : '#222',
			strokeColor : '#e3e1dc',
			strokeWeight : 1,
			fillOpacity : .8
		}
	},
	data = {
		layer : {
			layer : null
		},
		layers : null
	},
	map = null,
	marker = {
		icon : {},
		icon_active : {}
	},
	markers = [];
	
	marker.mark = function(id) {
		for (var i in markers) {
			markers[i].set('active', false);
			markers[i].setIcon(marker.icon);
			markers[i].get('infowindow').close();
		}
		if (id) {
			markers[id].setIcon(marker.icon_active);
			markers[id].set('active', true);
			markers[id].get('infowindow').open(map, markers[id]);
			$('.accordion input#t'+id).prop('checked',true);
		}
	};
	
	marker.addListener = function(id) {
		markers[id].addListener('click', function(e) {
			var id = (this.get('active')) ? null : this.id;
			marker.mark(id);
		});
	};
	
	marker.set = function(item) {
		var id = item.id,
			infowindow = null;
		markers[id] = new google.maps.Marker({
			icon: marker.icon,
			title: item.title,
			content: item.content,
			position: item.coords
		});
		infowindow = new google.maps.InfoWindow({
			content : '<div class="info"><div><h3>'+item.title+'</h3>'+item.content+'</div><div><span>'+item.location+'</span><a class="btn primary" href="'+item.ticketurl+'" target="_blank" data-cat="Ticket-Button" data-act="Map" data-label="'+item.title+'">Tickets</a></div></div>',
			pixelOffset : new google.maps.Size(20, -80)
		});
		markers[id].set('id', id);
		markers[id].set('infowindow', infowindow);
		markers[id].setMap(map);
		marker.addListener(id);
	};
	
	data.get = function(url) {
		var layer = data.layer;
		$.getJSON(url).done(function(data) {
			layer.draw(data);
		});
	};
	
	data.layer.init = function() {
		this.layer = new google.maps.Data({map: map});
		this.layer.setStyle(options.layer);
		data.get('/typo3conf/ext/azgr_events/Resources/Public/Javascript/countries.json');
	};
	
	data.layer.draw = function(layers) {
		if (layers.type == 'FeatureCollection') {
			
			if (layers.features) {
				var count = layers.features.length;
				
				for (var i = 0; i < count; i++) {
					var id = i + 1;
					if (!layers.features[i].properties) layers.features[i].properties = {}; 
					layers.features[i].properties.boundary_id = id;
					data.layer.layer.addGeoJson(layers.features[i], {idPropertyName: 'boundary_id'});
				}
			}
		}
	};
	
	init = function() {
		map = new google.maps.Map($('.map')[0], options.maps);
		data.layer.init();
		marker.icon = {
			url : options.marker.icon,
			scaledSize : new google.maps.Size(21.5, 39)
		};
		marker.icon_active = {
			url : options.marker.icon_active,
			scaledSize : new google.maps.Size(21.5, 39)
		};
		events.forEach(function(event) {
			marker.set(event);
		});
	};
	
	return { init:init, marker:marker, markers:markers };

})(jQuery);
	