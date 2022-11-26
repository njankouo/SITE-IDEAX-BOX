	<style>
body{
    background: #D3CCE3;  
background: -webkit-linear-gradient(to right, #E9E4F0, #D3CCE3); 
background: linear-gradient(to right, #E9E4F0, #D3CCE3); 


}
 main {
    flex: 1 0 auto;
  }
.text-title{
	font-family: 'Lobster', cursive;
}
.card-rounded{
	padding: 5px;
	margin: 0.2rem 0 2rem 0;
	box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.2);
	border-radius: 100%;
	background-color: #fff;
}
    </style>
    <main>
    <h4 class="center text-title white-text">NOS PARTENAIRES</h4>
	<div class="row">
		<div class="col s12 carousel">
			<a class="carousel-item" href="#one!"><img class="card-rounded hoverable" src="./assets/img/afisa.png"></a>
			<a class="carousel-item" href="#two!"><img class="card-rounded hoverable" src="./assets/img/agc.png"></a>
			<a class="carousel-item" href="#three!"><img class="card-rounded hoverable" src="./assets/img/food.jpg" style="height: 200px"></a>
			<a class="carousel-item" href="#four!"><img class="card-rounded hoverable" src="./assets/img/smid.png" style="height: 200px"></a>
			<a class="carousel-item" href="#five!"><img class="card-rounded hoverable" src="./assets/img/scb.jpg" style="height: 200px"></a>
            <a class="carousel-item" href="#six!"><img class="card-rounded hoverable" src="./assets/img/savon.jpg" style="height: 200px"></a>
            <a class="carousel-item" href="#seven!"><img class="card-rounded hoverable" src="./assets/img/sika.png" style="height: 200px"></a>
            <a class="carousel-item" href="#height!"><img class="card-rounded hoverable" src="./assets/img/chococam.jpg" style="height: 200px"></a>
		</div>
	</div>      
</main>

        <footer class="page-footer" style=" background: #b92b27;
    
    background: -webkit-linear-gradient(to right, #1565C0, #b92b27);
   
    background: linear-gradient(to right, #1565C0, #b92b27);">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">IDEAX BOX</h5>
                <p class="grey-text text-lighten-4">Conseil en Communication et Marketing</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">LIENS PAR DEFAUTS</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Acceuil</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">A propos De Nous</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Nos Services</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Nos Realisations</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Nos Partenaires</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Notre Equipe</a></li>
                </ul>
              </div>
            </div>
          </div>
         
        </footer>
        <script>
            $(document).ready(function(){
		$(".carousel").carousel({
			dist: 0,
			padding: 40,
			indicators: true,
			numVisible: 5    
		}); 
	});
        </script>
        