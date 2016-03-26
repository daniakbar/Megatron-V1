		
		<script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/components/sticky.js"></script>
        <script src="editor/ckeditor.js"></script>
        <script src="js/components/nestable.min.js"></script>
        <script src="js/components/accordion.min.js"></script>
        <script src="js/components/upload.min.js"></script>

        <script type="text/javascript">
        //=============================================================================================
                    // media gallery multiple image selected

                    	$(function(){
						    $(document).on('click', 'img', function(){
                            var $this = $(this);
                            $this.toggleClass('selected');
                            
                            if($this.hasClass('selected'))
                                $this.next(':hidden').val($this.data('id'))
                            else
                                $this.next(':hidden').val('');
						    })
						})

						//SINGLE IMAGE SELECTED 
        //             	$(function(){
						  //   $(document).on('click', 'img', function(){

						  //   $("img").not(this).removeClass("selected");

						  //   $(this).toggleClass("selected");
						  //   	})
						  // })
						  //---------------------------------------------------
                        // $('form').submit(function(){
                        //     console.log($(this).serialize());
                        //     return false;
                        // })
// ===================================================================================================================
                       

                        // image uploaded 
                        $(function(){

					        var progressbar = $("#progressbar"),
					            bar         = progressbar.find('.uk-progress-bar'),
					            settings    = {

					            action: '/', // upload url

					            allow : '*.(jpg|jpeg|gif|png)', // allow only images

					            loadstart: function() {
					                bar.css("width", "0%").text("0%");
					                progressbar.removeClass("uk-hidden");
					            },

					            progress: function(percent) {
					                percent = Math.ceil(percent);
					                bar.css("width", percent+"%").text(percent+"%");
					            },

					            allcomplete: function(response) {

					                bar.css("width", "100%").text("100%");

					                setTimeout(function(){
					                    progressbar.addClass("uk-hidden");
					                }, 250);

					                alert("Upload Completed")
					            }
					        };

					        var select = UIkit.uploadSelect($("#upload-select"), settings),
					            drop   = UIkit.uploadDrop($("#upload-drop"), settings);
					    });
					    //===============================================================
					    //preview image before upload thumbnail
					    $(function() {
						    $("#upload-select").on("change", function()
						    {
						        var files = !!this.files ? this.files : [];
						        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
						 
						        if (/^image/.test( files[0].type)){ // only image file
						            var reader = new FileReader(); // instance of the FileReader
						            reader.readAsDataURL(files[0]); // read the local file
						 
						            reader.onloadend = function(){ // set image data as background of div
						                $("#profile-imagePreview").css("background-image", "url("+this.result+")");
						            }
						        }
						    });
						});

                  </script>

    </body>
</html>