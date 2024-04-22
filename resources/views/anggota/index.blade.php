
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-register w-100 m-auto">
            <form method="POST" action="/anggota" class="" novalidate>
              <!--untuk menambah method post tambah csrf (token security)-->
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>

              <div class="form-floating">
                <input type="text" value="{{ old('name') }}" name="name" required class="form-control rounded-top @error('name') is-invalid @enderror"
                id="floatingInput" placeholder="name">
                
                <div class="invalid-feedback">
                  @if ($errors->has('name'))
                      {{ $errors->first('name') }}
                  @else
                      Silahkan isi Nama.
                  @endif
                </div>
              </div>
              <div class="form-floating">
                <input type="text" value="{{ old('phone') }}" name="phone" required class="form-control @error('phone') is-invalid @enderror"
                id="floatingInput" placeholder="">
               
                <div class="invalid-feedback">
                  @if ($errors->has('phone'))
                      {{ $errors->first('phone') }}
                  @else
                      Silahkan isi nomor hp.
                  @endif
                </div>
              </div>
              <div class="form-floating">
                <input type="email" value="{{ old('email') }}" name="email" required class="form-control @error('email') is-invalid @enderror"
                id="floatingInput" placeholder="name@example.com">
              
                <div class="invalid-feedback">
                  @if ($errors->has('email'))
                      {{ $errors->first('email') }}
                  @else
                      Silahkan isi Email.
                  @endif
                </div>
              </div>
             
              <button class="btn btn-danger w-100 py-2 mt-2" type="submit">insert</button>
            </form>
        </main>
    </div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.register-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
    </script>


