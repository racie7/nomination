@extends('layouts.app')

@section('content')
	<section id="subintro">
		<div class="container">
			<div class="row">
				<div class="span4">
					<h3 style="alignment: center"><strong>Nominations</strong></h3>
				
				</div>
				<div class="span8">
					<ul class="breadcrumb notop">
						<li><a href="#">Home</a><span class="divider">/</span></li>
						<li class="active" style="text-align: center">Nominations</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<div class="container">
		@include('partials.alerts')
		<div class="row">
			<div class="span12">
                <h4 style="text-align: center"><b>Individual Awards</b></h4>
				<label style="color:black"><strong>Eligibility Criteria:</strong></label>
				<p style="color:black">To qualify for an individual nomination, candidates must meet the following
					requirements:</p>
				<ol>
					<li style="color:black">Must be a member of staff who has worked continuously for a period of one
						year.
					</li>
					<li style="color:black">Has demonstrated professional excellence in service delivery.</li>
					<li style="color:black">Serving in any cadre within the school at the time of nomination.</li>
					<li style="color:black">Maintained excellent performance appraisal score.</li>
					<li style="color:black">Is not subject of an ongoing discipline case.</li>
				</ol>
				<br> <br>
				<!-- start: Accordion -->
				<div class="accordion " id="accordion2">
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2"
							   href="#collapseOne">
								<i class="icon-plus"></i> Most Improved Employee Award</a>
						</div>
						<div id="collapseOne" class="accordion-body in collapse">
							<div class="accordion-inner">
								<p style="color:black"><strong>Nominee Type:</strong>This category is open for
									individual nominations.</p>
								<p style="color:black"><strong>Award Description:</strong> The award shall recognize an employee who has demonstrated significant
                                    improvement in <b>their Performance through the school performance appraisal system. The
                                        scores of the performance appraisal will form the basis of this award.</b> Where there is a tie, the
                                    Campus Performance Committee shall seek supervisor’s recommendations.
								</p>
								<label style="color:black"><strong>Criteria:</strong></label>
								<ol>
									<li style="color:black">Must have been an employee of the nominating campus for one
										continuous year in the year of nomination.
									</li>
								</ol>
								<br>
								@if(!request()->has('_preview'))
									@include('partials.nomination-form')
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end: Accordion -->
		</div>
	</div>
@endsection