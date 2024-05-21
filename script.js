$(document).ready(function(){
  $('.details-btn').click(function(){
    var title = $(this).data('title');
    var image = $(this).data('image');
    var description = $(this).data('description');
    var price = $(this).data('price');

    $('#detailTitle').text(title);
    $('#detailImage').attr('src', image);
    $('#detailDescription').text(description);
    $('#detailPrice').text('Price: ' + price);
    
    $('#detailsModal').modal('show');
  });
});
