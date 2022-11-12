require('./bootstrap');

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

deletePost = function (id) {
  let result = confirm('Do you want to delete the post?')
  if (result) {
    let actUrl = '/posts/' + id
    $.post(actUrl, {
      _method: 'delete'
    }).done(function () {
      location.reload()
      // location.href = '/posts'
    })
  }
}