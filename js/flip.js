$(document).ready(function () {
  $('.flipButton').bind("click", function() {
    $(this).next().toggleClass('hover');
  })
});