$(document).ready(function (e){
    //show image on web
	$("#fileToUpload").change(function(){
      readImage( this );
    });
    
    function readImage(input) {
        if ( input.files && input.files[0] ) {
            var FR= new FileReader();
            FR.onload = function(e) {
            //e.target.result = base64 format picture
            $('#img').attr( "src", e.target.result );
		    $('#img').attr( "width", '100px' );
		    $('#img').attr( "height", '100px' );
		  
            }; 
       	    $('#img').hover(function(){
                $(this).css("width", "150px");
    		    $(this).css("height", "150px");
            },
		    function(){
                $(this).css("width", "100px");
		        $(this).css("height", "100px");
            });	
            FR.readAsDataURL( input.files[0] );
        }
    }
	
	//show img modal
	// Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('img');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
        modal.style.display = "none";
    }
	
	
	//upload img 
	$("#uploadForm").on('submit',(function(e){
        e.preventDefault();

        $.ajax({
        url: "upload.php",
        type: "POST",
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success: function(data){
            alert(data);
        
		},
        error: function(){} 	        
        
		});
    }));
});