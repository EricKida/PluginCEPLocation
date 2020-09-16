<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
 </script>

 <script>
 	
 	$(document).on('click', '#button-buscar',function(){
 		var cep = $("#input-cep").val();
 		$.ajax({
 			type:"get",
 			url:"https://viacep.com.br/ws/"+cep+"/json/",
 			success: function(data){
 				var conteudo = '';
 				conteudo+="<p class='slide-in-left-1'><b>Informações sobre o CEP</b></p>"
 				conteudo+="<p class='slide-in-left-2'><b>Estado:</b> "+data.uf+"</p>";
 				conteudo+="<p class='slide-in-left-3'><b>Cidade:</b> "+data.localidade+"</p>";
 				conteudo+="<p class='slide-in-left-4'><b>Bairro:</b> "+data.bairro+"</p>";
 				$("#dados").append(conteudo);
 			}
 		});
 	});

 </script>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class=""><h5>CEP:</h5></label>
			<input type="number" name="cep" class="form-control" placeholder="00000000" maxlength="8" id="input-cep">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<button class="btn btn-danger btn-block" id="button-buscar">Buscar</button>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div id='dados'></div>
	</div>
</div>

<style type="text/css"> 
	
.slide-in-left-1 {
	-webkit-animation: slide-in-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: slide-in-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

.slide-in-left-2 {
	-webkit-animation: slide-in-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.5s both;
	        animation: slide-in-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.5s both;
}
.slide-in-left-3 {
	-webkit-animation: slide-in-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 1s both;
	        animation: slide-in-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 1s both;
}
.slide-in-left-4 {
	-webkit-animation: slide-in-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 1.5s both;
	        animation: slide-in-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 1.5s both;
}

@-webkit-keyframes slide-in-left-1 {
  0% {
    -webkit-transform: translateX(-1000px);
            transform: translateX(-1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}
@keyframes slide-in-left-1 {
  0% {
    -webkit-transform: translateX(-1000px);
            transform: translateX(-1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes slide-in-left-2 {
  0% {
    -webkit-transform: translateX(-1000px);
            transform: translateX(-1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}
@keyframes slide-in-left-2 {
  0% {
    -webkit-transform: translateX(-1000px);
            transform: translateX(-1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes slide-in-left-3 {
  0% {
    -webkit-transform: translateX(-1000px);
            transform: translateX(-1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}
@keyframes slide-in-left-3 {
  0% {
    -webkit-transform: translateX(-1000px);
            transform: translateX(-1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes slide-in-left-4 {
  0% {
    -webkit-transform: translateX(-1000px);
            transform: translateX(-1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}
@keyframes slide-in-left-4 {
  0% {
    -webkit-transform: translateX(-1000px);
            transform: translateX(-1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}


</style>


