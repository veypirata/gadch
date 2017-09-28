$(document).ready(function(){
			var wrapper=$("<div/>").css({ height: 0,width: 0, 'overflow': 'hidden'});
			var fileInput0=$("#file-0").wrap(wrapper);
				
			$("#photo-0").on("click", function(){
				fileInput0.click();
			}).show();
			 

			fileInput0.on("change", function(){
				var file = this.files[0],
					fileName=file.name,
					fileSiza = file.size,
					fileType =file.type;
				var	ruta=fileInput0.val();

				//console.log(file+" "+fileName+" "+fileSiza+" "+fileType);

				if(fileType.match('image.*')){
					//console.log("formato correcto");
					//validar q sea imagen
					//$("#resultados").append("<img src='"+fileName+"' width='100' height='100'");
					var reader = new FileReader();
						reader.onload= function(e){
							//console.log("<img src='"+e.target.result+"'/>")
							//$("#resultados").append("<img src='"+e.target.result+"' width='200' height='200'/>");
							$("#photo-0").html("");
							$("#cerrar-0").html("");
							$("#photo-0").append("<img src='"+e.target.result+"' width='100' height='87' id='thumb-0' class='thumb'/>");
							$("#cerrar-0").show(function(){
								$("#cerrar-0").append("<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>");
							});

						}
					reader.readAsDataURL(file);
				}
				else{
					//console.log("no admitido");
					alert("solo se puede subir JPG Y PHG");
				}
			});
			// cerrar imagenes
			$("#cerrar-0").on("click",function(){
				//console.log(fileInput0.val());
				$("#thumb-0,#cerrar-0").hide();	
				///este codigo es solo para goole chrome
				fileInput0.val('');
				//y esto para los demas navegadores
				//fileInput0.replaceWidth(fileInput0 = fileInput0.val().clone(true));
			});
			//barra de progreso
			var bar= $('.bar'),
				percent=$('.percent'),
				status=$('.msj');

				$('#uploadForm').ajaxForm({
					beforeSend: function() {
				        status.empty();
				        var percentVal = '0%';
				        	bar.width(percentVal)
				       		percent.html(percentVal);
				    },
				     uploadProgress: function(event, position, total, percentComplete) {
				        var percentVal = percentComplete + '%';
				        bar.width(percentVal)
				        percent.html(percentVal);
				    },
				    complete: function(data) {
						console.log(data.responseText);
					}

				});
       
		});// fin