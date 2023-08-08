    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  

    <!-- Passowrd Eye Toggole -->
    <script>
      function togglePasswordVisibility(inputId) {
        const passwordInput = document.getElementById(inputId);
        const passwordToggleIcon = document.querySelector(`[onclick="togglePasswordVisibility('${inputId}')"]`);
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggleIcon.classList.remove('fa-eye-slash');
            passwordToggleIcon.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            passwordToggleIcon.classList.remove('fa-eye');
            passwordToggleIcon.classList.add('fa-eye-slash');
        }
      }
    </script>

    <!-- Update Jquery -->
    <script>
      $(document).ready(function() {
        $(".updatebtn").on("click", function() {
          $("#updateprofilemodal").modal("show");

          var userId = $(this).data("user-id");

          var name = $("#profileModal h2").text();
          var email = $("#profileModal h5:eq(0)").text();
          var phone = $("#profileModal h5:eq(1)").text();

          $("#update_id").val(userId);
          $("#name").val(name);
          $("#email").val(email);
          $("#phone").val(phone);
        });
      });
    </script>

    <!-- Image preview -->
    <script>
      function previewImage() {
        const fileInput = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');

        const file = fileInput.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
          imagePreview.src = reader.result;
        };

        if (file) {
          reader.readAsDataURL(file);
        } else {
          imagePreview.src = 'images/campusdotcrew.png';
        }
      }
    </script>

    <!-- Delete Jquery -->
    <script>
        $(document).ready(function(){
            $('.deletebtn').on('click', function() {
                $('#deletemodal').modal('show');
            });
        });
    </script>

    <!-- Dashboard -->
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

    <!-- Alert container related -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var alertContainer = document.querySelector('.alert-container');
            if (alertContainer) {
                alertContainer.classList.add('show');
                setTimeout(function() {
                    alertContainer.classList.remove('show');
                }, 3000);
            }
        });
    </script>
  </body>
</html>