<!-- inline scripts related to this page -->
			jQuery(function($) {
				
				//another option is using modals
				$('#avatar2').on('click', function(){
					var modal = 
					'<div class="modal fade">\
					  <div class="modal-dialog">\
					   <div class="modal-content">\
						<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal">&times;</button>\
							<h4 class="blue">Change Avatar</h4>\
						</div>\
						\
						<form class="no-margin" method="post" action="" enctype="multipart/form-data">\
						 <div class="modal-body">\
							<div class="space-4"></div>\
							<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
						 </div>\
						\
						 <div class="modal-footer center">\
							<button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
							<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
						 </div>\
						</form>\
					  </div>\
					 </div>\
					</div>';
					
					
					var modal = $(modal);
					modal.modal("show").on("hidden", function(){
						modal.remove();
					});
			
					var working = false;
			
					var form = modal.find('form:eq(0)');
					var file = form.find('input[type=file]').eq(0);
					file.ace_file_input({
						style:'well',
						btn_choose:'Click to choose new avatar',
						btn_change:null,
						no_icon:'ace-icon fa fa-picture-o',
						thumbnail:'small',
						before_remove: function() {
							//don't remove/reset files while being uploaded
							return !working;
						},
						allowExt: ['jpg', 'jpeg', 'png', 'gif'],
						allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
					});
			
					form.on('submit', function(){
						if(!file.data('ace_input_files')) return false;
						
						file.ace_file_input('disable');
						form.find('button').attr('disabled', 'disabled');
						form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");
						
						var deferred = new $.Deferred;
						working = true;
						deferred.done(function() {
							form.find('button').removeAttr('disabled');
							form.find('input[type=file]').ace_file_input('enable');
							form.find('.modal-body > :last-child').remove();
							
							modal.modal("hide");
			
							var thumb = file.next().find('img').data('thumb');
							if(thumb) $('#avatar2').get(0).src = thumb;
			
							working = false;
						});
						
						
						setTimeout(function(){
							deferred.resolve();
						} , parseInt(Math.random() * 800 + 800));
			
						return false;
					});
							
				});
			
				//right & left position
				//show the user info on right or left depending on its position
				$('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
					var $this = $(this);
					var $parent = $this.closest('.tab-pane');
			
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $this.offset();
					var w2 = $this.width();
			
					var place = 'left';
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
					
					$this.find('.popover').removeClass('right left').addClass(place);
				}).on('click', function(e) {
					e.preventDefault();
				});
			
			
				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Change avatar',
					btn_change:null,
					no_icon:'ace-icon fa fa-picture-o',
					thumbnail:'large',
					droppable:true,
					
					allowExt: ['jpg', 'jpeg', 'png', 'gif'],
					allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
				})
				.end().find('button[type=reset]').on(ace.click_event, function(){
					$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
				})
				.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				$('.input-mask-phone').mask('(999) 999-9999');
			
				$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
			
				////////////////////
				//change profile
				$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.user-profile').parent().addClass('hide');
					$('#user-profile-'+which).parent().removeClass('hide');
				});
				
				
				
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					try {
						$('.editable').editable('destroy');
					} catch(e) {}
					$('[class*=select2]').remove();
				});
				
				$('#spinner1').ace_spinner({value:0,min:0,max:100,step:1, btn_up_class:'btn' , btn_down_class:'btn'})
				.closest('.ace-spinner')
				.on('changed.fu.spinbox', function(){
					//alert($('#spinner1').val())
				}); 
				
			});
			
			$(document).ready (function(){
				$("#alert-failed").fadeTo(2000, 500).slideUp(500, function(){
				    $("#alert-failed").alert('close');
				});
				
				$("#alert-success").fadeTo(2000, 500).slideUp(500, function(){
				    $("#alert-success").alert('close');
				});       
	         
			});