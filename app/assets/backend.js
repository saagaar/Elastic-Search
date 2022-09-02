$(function(){
$('#submitImageUrl').click(function(e){
	e.preventDefault();
	var _imgExts = ["jpg", "jpeg", "png", "gif", "ico"];

	let url=$(this).parents('.checkImageURL').find('input[name="image_url"]').val();
	alert(url);
	
	let extn=url.split('.').pop();

	if(isExtension(extn,_imgExts)){
		$('#imagePreviewParent').html('');
		$('#imagePreviewParent').append('<img className="img-fluid" src="'+url+'">')
	}
	else{
		$('#imagePreviewParent').html("<div class='text text-danger'>The image URL is Invalid. Please use URL without Query string.</div>")
	}
})
function isExtension(ext, extnArray) {
    var result = false;
    var i;
    if (ext) {
        ext = ext.toLowerCase();
        for (i = 0; i < extnArray.length; i++) {
            if (extnArray[i].toLowerCase() === ext) {
                result = true;
                break;
            }
        }
    }
    return result;
}
	$(document).ready(function() {
	    $('.js-example-basic-multiple').select2({
	      tags: true,
	      theme: "classic",
	      placeholder: "Please Search/Add tags separated by Enter",
	      createTag: function (params) {
		    return {
		      id: params.term,
		      text: params.term,
		      isNew: true
		    }
		  },
	       ajax: {
			    url: '/api/search-tags',
			    dataType: 'json',
			    data: function (params) {
				      var query = {
				        search: params.term,
				      }
				      return query;
			    },
			    processResults: function (data) {
		            return {
		                results: $.map(data, function (item) {
		                    return {
		                        text: item.tag_name,
		                        id: item.id
		                    }
		                })
		       		 };
			  	}
			}
		}).on("select2:select", function(e) {
			let thisSelect=$(this);
			let dataVal={tag:e.params.data.text};
			    if(e.params.data.isNew){
			    	   $.ajax ({
					    url: '/api/create-tag',
					    dataType: 'json',
					    type:'post',
					    data: dataVal,
					    success: function (data) {
				              thisSelect.find('[value="'+e.params.data.id+'"]').replaceWith('<option selected value="'+data.id+'">'+data.tag_name+'</option>');
					  	}
					})
			    }
		});
	})

	$(document).ready(function() {
	    $('.select2-single-tags').select2({
	      tags: true,
	      theme: "classic",
	      multiple:false,
	      placeholder: "Please Search/Add providers separated by Enter key",
	      createTag: function (params) {
		    return {
		      id: params.term,
		      text: params.term,
		      isNew: true
		    }
		  },
	       ajax: {
			    url: '/api/search-providers',
			    dataType: 'json',
			    data: function (params) {
				      var query = {
				        search: params.term,
				      }
				      return query;
			    },
			    processResults: function (data) {

		            return {
		                results: $.map(data, function (item) {
		                    return {
		                        text: item.provider_name,
		                        id: item.id
		                    }
		                })
		       		 };
			  	}
			}
		}).on("select2:select", function(e) {
			let thisSelect=$(this);
			let dataVal={provider:e.params.data.text};
			    if(e.params.data.isNew){
			    	   $.ajax ({
					    url: '/api/create-providers',
					    dataType: 'json',
					    type:'post',
					    data: dataVal,
					    success: function (data) {
				             // thisSelect.find('[value="'+e.params.id+'"]').replaceWith('<option selected value="'+data.id+'">'+data.provider_name+'</option>');
				             thisSelect.html('<option selected="selected" value="'+data.id+'">'+data.provider_name+'</option>')
				             thisSelect.trigger('change.select2');
					  	}
					})
			    }
		}).trigger("change")
	})
})