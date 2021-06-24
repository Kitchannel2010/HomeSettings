function logout() {
Swal.fire({
  title: 'Are you sure?',
  text: "You are going to logout! Are you sure about that?",
  icon: 'warning',
  confirmButtonColor: '#3085d6',
    showCancelButton: true,
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes!'
}).then((result) => {
  if (result.isConfirmed) {
              Swal.fire(
                'Logout successfully!',
                '',
              'success'
      ).then((result) => {
            window.location="../../Login/HtmlPage.html"
     })    
  }
})

}
function star_rating() {
  window.location="../star rating/star rating.html"
}
function update() {
  window.location = "../browser update/index.html"
}