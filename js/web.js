function nextPhotos() {
	$("#more-photos").click(function() {
		$("#more-photos").html('Momentík ...');
		$.ajax({
			url: "_fb-next-photos.php?"+$(this).attr('data-url')
		}).done(function( data ) {
			if ( console && console.log ) {
				console.log(data);
				for(var i=0; i < data.data.length; i++) {
					
					if(data.data[i].images[4]) {
						var img = data.data[i].images[4].source;
					}
					else {
						var img = data.data[i].images[3].source;
					}

					$( "<a href='"+data.data[i].source+"' class='thumb1'><img src='"+img+"' /></a>" ).appendTo( "#photoThumbs" );
				}
				if(data.paging.next){
					$("#more-photos").html('Další fotky');
					$("#more-photos").attr('data-url',data.paging.next.split('photos?')[1]);
				}
				else {
					$("#more-photos").remove();
				}
				
			}
		});
	});
}
