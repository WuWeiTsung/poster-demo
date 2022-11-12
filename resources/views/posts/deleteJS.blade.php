<script>
  deletePost = function(id) {
    let result = confirm('Do you want to delete the post?')
    if (result) {
      let actUrl = '/posts/' + id
      $.post(actUrl, {
        _method: 'delete'
      }).done(function() {
        // location.reload()
        location.href = '/posts'
      })
    }
  }

  deleteCommenet = function(id) {
    let result = confirm('Do you want to delete the comment?')

    if (result) {
      let actionUrl = '/comments/' + id
      $.post(actionUrl, {
        _method: 'delete'
      }).done(function() {
        location.reload()
      })
    }
  }
</script>