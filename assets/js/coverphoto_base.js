$(function() {
      $(".coverphoto").CoverPhoto({
        currentImage: '../../assets/images/img_base.png',
        editable: true
      });
      $(".coverphoto").bind('coverPhotoUpdated', function(evt, dataUrl) {
        $(".output").empty();
        $("<img>").attr("src", dataUrl).appendTo(".output");
      });
    });