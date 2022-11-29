@extends('layouts.adminapp')

@section('content')
<div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">{{__('admincp.posts')}}</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="far fa-newspaper"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{$postpublish->count()}}</h1>
												<!--<div class="mb-0">-->
												<!--	<span class="badge badge-primary-light"> <i class="mdi mdi-arrow-bottom-right"></i> Terakhir </span>-->
												<!--	<span class="text-muted">Tanggal</span>-->
												<!--</div>-->
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">{{__('admincp.page')}}</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="fas fa-file-alt"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{$pagepublish->count()}}</h1>
												<!--<div class="mb-0">-->
												<!--	<span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>-->
												<!--	<span class="text-muted">Since last week</span>-->
												<!--</div>-->
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">{{__('admincp.announ')}}</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="fas fa-exclamation-circle"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{$announs->count()}}</h1>
												<!--<div class="mb-0">-->
												<!--	<span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>-->
												<!--	<span class="text-muted">Since last week</span>-->
												<!--</div>-->
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">{{__('admincp.report')}}</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="fas fa-file-pdf"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{$laporans->count()}}</h1>
												<!--<div class="mb-0">-->
												<!--	<span class="badge badge-danger-light"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>-->
												<!--	<span class="text-muted">Since last week</span>-->
												<!--</div>-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
        </div>
</div>
@endsection
