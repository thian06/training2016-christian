
	<!-- importamos header php -->
	@include('header')
	<!-- menu var -->

			<!-- 	</div>
		</div>
	</div> -->
	<!-- imagen de fondo  -->
	<div class="imagen">
	</div>
	<!-- div triangulo amarillo -->
	<div class="content">
    	<h3>Full width responsive triangle divider</h3>
	</div
  
	<div class="wrapper">
    	<div class="triangle-down">
    	<div></div>

    	</div>
	</div>
	 <!--iconos  -->
	 <div class="section-about-goes text-center" id="about">
	 	<div class="container">
	 		<div class="col-md-4 icons">
					<span class="foco"></span>
					<h3>title goes here</h3>
					<p>Normally, both your asses would be dead as fucking fried chicken,    </p>

				</div>
				<div class="col-md-4 icons">
					<span class="buscar"></span>
					<h3>title goes here</h3>
					<p>Normally, both your asses would be dead as fucking fried chicken,    </p>

				</div>
				<div class="col-md-4 icons">
					<span class="herramientas"></span>
					<h3>title goes here</h3>
					<p>Normally, both your asses would be dead as fucking fried chicken,    </p>

				</div>
	 	</div>
	 </div>
	 
	 <!-- seccion some our work -->
	 <div class="section-about text-center">

				 	<!-- div triangulo blanco-->
				<div class="content1">
			    	
				</div
			  
				<div class="wrapper1">
			    	<div class="triangle-down1">
			    	<div></div>

			    	</div>
				
			<div class="container text-center container1 ">
				<h2>Some of Our Work</h2>
				
				<p> I don't wanna kill you,<span>I wanna help you.</span>  But I can't give you this case, . </p>
				   <div class="container">
  <div class="row">
    <div class="col-sm-12">
        
    <div class="clearfix">
        <div id="thumbcarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="item active">
                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="http://placehold.it/100/e8117f/fff&amp;text=Product+Main"></div>
                    <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="http://placehold.it/100/00ffff/000&amp;text=Product+Image+2"></div>
                    <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="http://placehold.it/100/ff00ff/fff&amp;text=Product+Image+3"></div>
                    
                </div><!-- /item -->
                <div class="item">
                <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="http://placehold.it/100/ffff00/000&amp;text=Product+Image+4"></div>
                    <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="http://placehold.it/100/612b65/fff&amp;text=Product+Image+5"></div>
                    <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="http://placehold.it/100/00ffcc/000&amp;text=Product+Image+6"></div>
                    
                </div><!-- /item -->
            </div><!-- /carousel-inner -->
            <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div> <!-- /thumbcarousel -->
    </div><!-- /clearfix -->
    </div> <!-- /col-sm-6 -->
    
  </div> <!-- /row -->
</div> <!-- /container --
			</div>
		</div>

		</div>
		<!-- div triangulo 3 plomo-->
	<div class="content2">
    	<h3>Full width responsive triangle divider</h3>
	</div
  
	<div class="wrapper2">
    	<div class="triangle-down2">
    	<div></div>

    	</div>
	</div>
	<!-- clase de imagenes antes de footer -->
	<div class="my-work text-center " >
	<div class="imagenes6 row">
		<div class="container-imagen">
		

		<div class="imagen-work col-md-4">
				<img src="img/img1.jpg" >

				<div class="imagen-hover	">
				<div class="contenido-interno1">
				@foreach($noticias as $noticia)
							
								{{$noticia->id=='1'}}<br>
								{{$noticia->text}}
							
					@endforeach
				</div>
				</div>

			</div>
			<div class="imagen-work col-md-4 ">
			
				<img src="img/img2.jpg"><table class="table table-responsive">
						
					</table>
				<div class="imagen-hover">
				<div class="contenido-interno">
					@foreach($noticias as $noticia)
							
								{{$noticia->id=='1'}}<br>
								{{$noticia->text}}
							
					@endforeach
				</div>
				</div>
			</div>
			<div class="imagen-work col-md-4">
				<img src="img/img3.jpg">
				<div class="imagen-hover">
				<div class="contenido-interno">
					@foreach($noticias as $noticia)
							
								{{$noticia->id=='1'}}<br>
								{{$noticia->text}}
							
					@endforeach
				</div>
				</div>
			</div>
			</div>
			</div>
			</div>
	<div class="h">
	<!-- triangulo blanco -->
	<div class="content1">
    	



    	
		</div
  
		<div class="wrapper1">
    	<div class="triangle-down1">
    	<div></div>

    	</div>
    	<div id="canvas-holder container" class="container">
			<canvas id="chart-area" class="cnvas" width="100" height="100" margin="32"></canvas>
			<canvas id="chart-area2" width="100" height="100"></canvas>
			<canvas id="chart-area3" width="100" height="100"></canvas>
			<canvas id="chart-area4" width="100" height="100"></canvas>
		
			<canvas id="chart-area5" width="100" height="100"></canvas>
	
		</div>
		
    	</div>
	</div>
	
	<!-- importamos footer.php -->
	@include('footer')
<script>
var pieData = [{value: 30,color:"#fff",highlight: "#fff",label: "Google Chrome"},
			
				{
					value: 70,
					color: "#c8beb7",
					highlight: "#c8beb7",
					label: "Safari"
				}
			];
var pieData2 = [{value: 60,color:"#fff",highlight: "#fff",label: "Google Chrome"},
			
				{
					value: 40,
					color: "#c8beb7",
					highlight: "#c8beb7",
					label: "Safari"
				}
			];
	
var pieData3 = [{value: 10,color:"#fff",highlight: "#fff",label: "Google Chrome"},
			
				{
					value: 90,
					color: "#c8beb7",
					highlight: "#c8beb7",
					label: "Safari"
				}
			];
		
var pieData4 = [{value: 55,color:"#fff",highlight: "#fff",label: "Google Chrome"},
			
				{
					value: 45,
					color: "#c8beb7",
					highlight: "#c8beb7",
					label: "Safari"
				}
			];
	
var ctx = document.getElementById("chart-area").getContext("2d");
var ctx2 = document.getElementById("chart-area2").getContext("2d");
var ctx3 = document.getElementById("chart-area3").getContext("2d");
var ctx4 = document.getElementById("chart-area4").getContext("2d");
var ctx5 = document.getElementById("chart-area5").getContext("2d");

window.myPie = new Chart(ctx).Doughnut(pieData);	
window.myPie = new Chart(ctx2).Doughnut(pieData2);				
window.myPie = new Chart(ctx3).Doughnut(pieData3);
window.myPie = new Chart(ctx4).Doughnut(pieData4);
window.myPie = new Chart(ctx5).Doughnut(pieData2);

</script>