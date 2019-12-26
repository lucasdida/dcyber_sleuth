@extends('layouts.app', ['activePage' => 'add_digimon', 'titlePage' => __('Adicionar Digimon')])

@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<form method="post" action="{{ route('digimon.store') }}" class="form-horizontal">
						@csrf
						<div class="card">
							<div class="card-header card-header-primary">
								<h4 class="card-title">Novo Digimon</h4>
								<p class="card-category">Preencha os dados do novo Digimon</p>
							</div>
							<div class="card-body">
								@if (session('status'))
									<div class="row">
										<div class="col-sm-12">
											<div class="alert alert-success">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          							<i class="material-icons">close</i>
                        						</button>
                        						<span>{{ session('status') }}</span>
											</div>
										</div>
									</div>
								@endif
								<div class="row">
									<label class="col-sm-2 col-form-label">Nome</label>
									<div class="col-sm-7">
                    					<div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      						<input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="Nome" required="true" aria-required="true"/>
                      						@if ($errors->has('name'))
                        						<span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      						@endif
                    					</div>
                    					
                  					</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection