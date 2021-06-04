@extends('layouts.master')

@section('content')
<div class="container">
				<div class="our-team-info">
					<h4 class="title-box">Our teams</h4>
					<div class="our-staff" style = "padding-left: 400px;" >

						<div 
							class="slide-carousel owl-carousel style-nav-1 equal-container" 
							data-items="5" 
							data-loop="false" 
							data-nav="true" 
							data-dots="false"
							data-margin="30"
							data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="BRIAN">
										<figure><img src="{{asset('images/brian.jpg')}}" alt="BRIAN"
											style="height: 210px;"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">BRIAN</b>
									<span class="title">1941720190</span>
									<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
								</div>
							</div>

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="NANA">
										<figure><img src="{{asset('images/putri.jpg')}}" alt="PUTRI"style="
											height: 210px;"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">PUTRI</b>
									<span class="title">1941720036</span>
									<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
								</div>
							</div>


						</div>

					</div>

				</div>
			<!-- </div> -->
			

		</div><!--end container-->

	</main>
	<!--main area-->
@endsection