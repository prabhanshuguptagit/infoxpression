window.onload = function(){

	
	var body = document.body,
	html = document.documentElement;
	
	var height = Math.max( body.scrollHeight, body.offsetHeight, 
               html.clientHeight, html.scrollHeight, html.offsetHeight );
                       
	var mouseX = 0, mouseY = 0,

			windowHalfX = window.innerWidth / 2,
			windowHalfY = height / 2,
			
			SEPARATION = 200,
			AMOUNTX = 10,
			AMOUNTY = 10,

			camera, scene, renderer;

			init();
			animate();
			
			
	

			function init() {

				var container, separation = 1000, amountX = 50, amountY = 50, color = 0xffffff,
                particles, particle;

                container = document.getElementById("canvas");


                camera = new THREE.PerspectiveCamera( 75, window.innerWidth / height, 1, 10000 );
                camera.position.z = 100;

                scene = new THREE.Scene();
	
                renderer = new THREE.CanvasRenderer({ antialiasing:true});
                renderer.setPixelRatio( window.devicePixelRatio );
                
                renderer.setSize( window.innerWidth, height);
                container.appendChild( renderer.domElement );

				// particles

				var PI2 = Math.PI * 2;
				var material = new THREE.SpriteCanvasMaterial( {

					color: 0x89b4b4,
					program: function ( context ) {

						context.beginPath();
						context.arc( 0, 0, 0.5, 0, PI2, true );
						context.fill();

					}

				} );

				var geometry = new THREE.Geometry();

				for ( var i = 0; i < 100; i ++ ) {

					particle = new THREE.Sprite( material );
					particle.position.x = Math.random() * 2 - 1;
					particle.position.y = Math.random() * 2 - 1;
					particle.position.z = Math.random() * 2 - 1;
					particle.position.normalize();
					particle.position.multiplyScalar( Math.random() * 10 + 450 );
					particle.scale.x = particle.scale.y = 10;
					scene.add( particle );

					geometry.vertices.push( particle.position );

				}

				// lines

				var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0x89b569, opacity: 0.5 } ) );
				scene.add( line );

				document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				document.addEventListener( 'touchstart', onDocumentTouchStart, false );
				document.addEventListener( 'touchmove', onDocumentTouchMove, false );

				

				window.addEventListener( 'resize', onWindowResize, false );

			}

			function onWindowResize() {

				windowHalfX = window.innerWidth / 2;
				windowHalfY = height/2;

				camera.aspect = window.innerWidth / height;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, height );
				
				$('.canvas-content').height(height);
				$('.canvas-content').width(window.innerWidth);
				
			}

			

			function onDocumentMouseMove(event) {

				mouseX = (event.clientX - windowHalfX)*0.5;
				mouseY = (event.clientY - windowHalfY)*0.5;

			}

			function onDocumentTouchStart( event ) {

				if ( event.touches.length > 1 ) {

					
					if(event.touches[ 0 ].pageY<=1500){
					mouseX = event.touches[ 0 ].pageX - windowHalfX;
					mouseY = event.touches[ 0 ].pageY - windowHalfY;}

				}

			}

			function onDocumentTouchMove( event ) {

				if ( event.touches.length == 1 ) {

					
					if(event.touches[ 0 ].pageY<=1500)
					{mouseX = event.touches[ 0 ].pageX - windowHalfX;
					mouseY = event.touches[ 0 ].pageY - windowHalfY;}

				}

			}

			

			function animate() {

				requestAnimationFrame( animate );

				render();
				
				scene.rotation.y+=0.001;
				scene.rotation.x+=0.001;
			}

			function render() {

				camera.position.x += ( mouseX + 200 - camera.position.x ) * .05;
				camera.position.y += ( - mouseY + 200 - camera.position.y ) * .05;
				camera.lookAt( scene.position );

				
				renderer.autoClear = false;
				renderer.clear();
            
				
				renderer.render( scene, camera );
				
			}
		
			
}


























