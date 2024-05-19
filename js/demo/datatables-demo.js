// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable('#example', {
    info: false,
    ordering: false,
    paging: false
  });
});