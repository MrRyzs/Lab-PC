<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OurLab - @yield('title')</title>
    <link href="{{ asset('/css/register.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
</head>
<body style="background: url('https://smkn1jakarta.sch.id/wp-content/uploads/2016/11/Picture1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed; scroll-behavior: smooth ">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: rgba(0, 0, 0, 0.3); min-height: 100vh">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0 text-center ">
          <h1 class="my-5 display-3 fw-bold ls-tight text-warning">
            OurLab
            <br />
            <small class="text-primary">Register</small>
          </h1>
          <p class="mb-4 opacity-70 text-white">
            Harap diperhatikan bahwa data yang anda masukkan sudah benar dan sesuai dengan data dari Sekolah
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <h2 class="fw-bold mb-5 text-center">Register</h2>
              <form method="POST" action="{{ route('reg-proses') }}" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="{{ route('login') }}">
                @csrf
                <!-- Role input -->
                <div class="form-outline mb-4 d-grid gap-2">
                  <select name="role" id="role" class="form-select" required>
                    <option value="" selected disabled >Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="teacher">Guru</option>
                    <option value="student">Siswa</option>
                  </select>
                  <label class="form-label" for="role">Role</label>
                </div>

                <!-- Full Name -->
                <div class="form-outline mb-4" id="fullNameContainer" style="display: none;">
                  <input type="text" name="name" id="fullNameData" class="form-control" required />
                  <label class="form-label" for="fullNameData">Full Name</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4" id="emailContainer" style="display: none;">
                  <input type="email" name="email" id="emailData" class="form-control" required />
                  <label class="form-label" for="emailData">Email address</label>
                </div>

                <!-- No. Telp input -->
                <div class="form-outline mb-4" id="noTelpContainer" style="display: none;">
                  <input type="text" name="phone" id="form3Example2" class="form-control" required />
                  <label class="form-label" for="form3Example2">No. Telp</label>
                </div>

                <!-- NIS input -->
                <div class="form-outline mb-4" id="nisContainer" style="display: none;">
                  <input type="text" name="nis" id="nisData" class="form-control" required />
                  <label class="form-label" for="nisData">NIS</label>
                </div>

                <!-- Kelas input -->
                <div class="form-outline mb-4" id="classContainer" style="display: none;">
                  <input type="text" name="kelas" id="classData" class="form-control" required />
                  <label class="form-label" for="classData">Kelas</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4" id="passwordContainer" style="display: none;">
                  <input type="password" name="password" id="passwordData" class="form-control" required />
                  <label class="form-label" for="passwordData">Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4" id="dataIsCorrectContainer" style="display: none;">
                  <input class="form-check-input me-2" type="checkbox" value="" id="dataIsCorrect" required />
                  <label class="form-check-label" for="dataIsCorrect">
                    Data diatas sudah benar dan sesuai dengan data Sekolah
                  </label>
                </div>

                <!-- Submit button -->
                <div class="d-grid gap-2" id="submitContainer" style="display: none;">
                  <button class="btn btn-primary" type="submit">Sign Up</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
  <script>
    document.getElementById('role').addEventListener('change', function() {
      var role = this.value;
      var noTelpContainer = document.getElementById('noTelpContainer');
      var fullNameContainer = document.getElementById('fullNameContainer');
      var emailContainer = document.getElementById('emailContainer');
      var passwordContainer = document.getElementById('passwordContainer');
      var dataIsCorrectContainer = document.getElementById('dataIsCorrectContainer');
      var submitContainer = document.getElementById('submitContainer');
      var classContainer = document.getElementById('classContainer');
      var nisContainer = document.getElementById('nisContainer');

      if (role === 'student') {
        // Change the structure to include NIS and Class inputs
        nisContainer.style.display = 'block';
        classContainer.style.display = 'block';
      } else {
        // Revert to the default structure
        nisContainer.style.display = 'none';
        classContainer.style.display = 'none';
      }

      // Show relevant input containers based on role selection
      if (role !== '' && role !== null) {
        fullNameContainer.style.display = 'block';
        emailContainer.style.display = 'block';
        noTelpContainer.style.display = 'block';
        passwordContainer.style.display = 'block';
        dataIsCorrectContainer.style.display = 'block';
        submitContainer.style.display = 'block';
      } else {
        // Hide all input containers if no role is selected
        fullNameContainer.style.display = 'none';
        emailContainer.style.display = 'none';
        noTelpContainer.style.display = 'none';
        passwordContainer.style.display = 'none';
        dataIsCorrectContainer.style.display = 'none';
        submitContainer.style.display = 'none';
      }
    });
  </script>
</body>
</html>
