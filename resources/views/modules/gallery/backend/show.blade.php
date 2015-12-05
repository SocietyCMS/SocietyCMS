@extends('layouts.master')

@section('title')
	{{ trans('gallery::gallery.title.gallery') }} | @parent
@endsection

@section('content-header')
	<h1>
		{{ trans('gallery::gallery.title.album') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ URL::route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
		<li class="active">{{ trans('gallery::gallery.title.gallery') }}</li>
	</ol>
@stop

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-body">
					<a href="#" class="btn btn-block btn-lg btn-primary"  data-toggle="modal" data-target="#myModal">{{trans('gallery::gallery.button.create album')}}</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row gallery-module">
		<div class="col-md-9">
			<div class="box">
				<div class="box-body">
					<div class="row" id="content_list">

						<div class="album-img-list" id="album-img-list">

							<div class="album-item" v-on="click: detail"  v-repeat="photo in album" v-class="selected: photo.id == detailPhoto.id">
								<span class="album-img">
									<img src="@{{ photo.image.thumbnail.small}}" class="img-thumbnail" alt="@{{ photo.title}}">
								</span>
								<span class="label">@{{ photo.title}}</span>
								<span class="property id">@{{ photo.id}}</span>
								<span class="property filename">@{{ photo.properties.filename}}</span>
								<span class="property uploaded_on">@{{ photo.properties.uploaded_on}}</span>
								<span class="property modified_on">@{{ photo.properties.modified_on}}</span>
								<span class="property captured_on">@{{ photo.properties.captured_on}}</span>
								<span class="property size">@{{ photo.properties.humanReadableSize}}</span>
								<span class="property thumbnail-small">@{{ photo.image.thumbnail.small}}</span>
								<span class="property thumbnail-medium">@{{ photo.image.thumbnail.medium}}</span>
								<span class="property thumbnail-large">@{{ photo.image.thumbnail.large}}</span>
							</div>

						</div>

						<div id="fine-uploader-gallery"></div>

					</div>
				</div>
			</div>

		</div>

		<div class="col-md-3 image-details" v-if="detailPhoto">
			<div class="box box-primary">
				<div class="box-body no-padding">
					<div class="detail-img">
						<img src="@{{ detailPhoto.image.thumbnail.large }}" alt="img03" id="detailImage">
					</div>


					<div class="box-group" id="accordion">


						<div class="panel box box-default">
							<div class="box-header with-border" role="tab" id="headingOne">
								<h4 class="box-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Properties
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="box-body">


									<form class="form-horizontal">
										<div class="box-body">
											<div class="form-group">
												<label for="title" class="col-sm-4 control-label">Title:</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" id="title" placeholder="" v-model="detailPhoto.title" v-on="blur: detailBlur">
												</div>
											</div>
											<div class="form-group">
												<label for="caption" class="col-sm-4 control-label">Caption:</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" id="caption" placeholder="" v-model="detailPhoto.caption" v-on="blur: detailBlur">
												</div>
											</div>


											<div class="form-group">
												<div class="col-sm-4 control-label">
													<b>Size:</b>
												</div>
												<div class="col-sm-8 control-text">
													@{{ detailPhoto.properties.humanReadableSize}}
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4 control-label">
													<b>Uploaded on:</b>
												</div>
												<div class="col-sm-8 control-text">
													@{{ detailPhoto.properties.uploaded_on}}
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4 control-label">
													<b>Modified on:</b>
												</div>
												<div class="col-sm-8 control-text">
													@{{ detailPhoto.properties.modified_on}}
												</div>
											</div>

										</div><!-- /.box-body -->
									</form>


								</div>
							</div>
						</div>


					</div>
				</div>
			</div>

		</div>
	</div>


@stop

@section('modals')

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>


	<script type="text/template" id="qq-template-gallery">
		<div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Drop files here">

			<div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
				<div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
			</div>

			<div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
				<span class="qq-upload-drop-area-text-selector"></span>
			</div>

			<div class="qq-upload-button-selector qq-upload-button">
				<div>Upload a file</div>
			</div>


            <div class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">

                <div class="album-item" >
                    <span class="album-img">
                        <img class="qq-thumbnail-selector img-thumbnail" qq-max-size="160" qq-server-scale>
                    </span>
                </div>

            </div>


		</div>
	</script>

@stop

@section('styles')
	<link href="{{\Pingpong\Modules\Facades\Module::asset('gallery:css/Gallery.css')}}" rel="stylesheet" type="text/css">
@stop

@section('javascript--disabled')
	<script>
		$(function() {

			var updateUrl = "/api/menu/menu?token={{ $jwtoken }}";

			$('.album-img-list').sortable({
				update: function(event, ui) {
					var order = $(this).sortable('toArray');
					$.post(
							updateUrl,
							{
								order:order
							}
					);
				}
			}).disableSelection();

		});
	</script>
@stop


@section('javascript')

	<script>
		$('#fine-uploader-gallery').fineUploader({
			template: 'qq-template-gallery',
			request: {
				endpoint: '{{app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.gallery.album.photo.store', ['album' => $albumSlug])}}?token={{$jwtoken}}',
				placeholders: {
					waitingPath: '{{\Pingpong\Modules\Facades\Module::asset('gallery:images/waiting-generic.png')}}',
					notAvailablePath: '{{\Pingpong\Modules\Facades\Module::asset('gallery:images/no-preview.png')}}'
				}
			},
			validation: {
				allowedExtensions: ['jpeg', 'jpg', 'gif', 'png']
			},
			dragAndDrop: {
				extraDropzones: [$("#content_list")]
			},
            listElement: $("#album-img-list"),
            callbacks: {
                onComplete: function(id, name, responseJSON) {
                    console.log(id);
                    console.log(name);
                    console.log(responseJSON);
                }
            }
		});
	</script>


	<script>

		new Vue({
			// We want to target the div with an id of 'events'
			el: '#app',
			// Here we can register any values or collections that hold data
			// for the application
			data: {
				newPhoto: { title: '', caption: '', photoCount: 0, cover: {data:[]} },

				detailPhoto: {
					title: '',
					caption: '',
					properties: {
						filename: '',
						size: 0,
						humanReadableSize: '',
						uploaded_on: '',
						modified_on: '',
						captured_on: ''
					}
				},

				album: []
			},
			// Anything within the ready function will run when the application loads
			ready: function() {
				this.fetchEvents();
			},

			methods: {

				fetchEvents: function() {

					var VueIn = this;
					$.getJSON( "{{app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.gallery.album.photo.index', ['album' => $albumSlug])}}?token={{$jwtoken}}", function(callback) {
						VueIn.$set('album', callback.data);
						VueIn.detailPhoto = VueIn.album[0];
					});

				},

				detail: function (event) {
					var photoID = $(event.target).closest( ".album-item").children('.property.id').text();
					var result = this.album.filter(function( obj ) {
						return obj.id == photoID;
					});

					this.detailPhoto = result[0];
				},

				detailBlur: function (event) {

					$.ajax({
						url: "{{app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.gallery.album.photo.update', ['album' => $albumSlug])}}/" + this.detailPhoto.id + "?token={{$jwtoken}}",
						type: 'PUT',
						data: this.detailPhoto
					});

					console.log(this.detailPhoto);
				},

				// Delete the event after the user confirms
				deleteEvent: function(index) {
					if(confirm("Are you sure you want to delete this event?")) {
						// $remove is a Vue convenience method similar to splice
						this.events.$remove(index);
					}

					// We could also delete an event if we had the events endpoint set up to delete data
					// this.$http.delete('api/events', index).success(function(response) {
					//   this.events.$remove(index);
					// }).error(function(error) {
					//   console.log(error);
					// });
				}
			}
		});

	</script>
@stop