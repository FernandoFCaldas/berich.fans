@extends ('layout')
@section ('title', 'Curriculum')

@section('content')

<form method="POST" action ="{{ route('curriculums.store') }}">
@csrf
<div class="container-4">
    <div class="org-accordion">
        <div class="container">
    <div class="py-5 text-center resize-text">
      <p class="title">FIND ME A JOB</p>
      <p class="lead">
        Suas informações ficaram disponíveis apenas para recrutadores de empresas
      </p>
    </div>

    @if (session('success'))
      <div class="flash-success">
          {{ session('success')}}
      </div>
    @endif

      <div class="col-md-10 col-lg-12">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6 text-start">
              <label for="fname" class="form-label">First name</label>
              @error('fname')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('fname') error-border @enderror" name="fname" value="{{ old('fname') }}" placeholder="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6 text-start">
              <label for="lname" class="form-label">Last name</label>
              @error('lname')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('lname') error-border @enderror" name="lname" value="{{ old('lname') }}" placeholder="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12 text-start">
              <label for="url" class="form-label">Linkedin</label>
              @error('linkedin')
                <div class="error">
                  {{$message}}
                </div>
                @enderror
              <div class="input-group has-validation">
                <input type="text" class="form-control @error('linkedin') error-border @enderror" name="linkedin" value="{{ old('linkedin') }}" placeholder="URL" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12 text-start">
              <label for="email" class="form-label">Email <span class="text-muted" style="font-size: 15px;">(Be sure to provide an email that you have access to)</span></label>
              @error('emailforcontact')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('emailforcontact') error-border @enderror" name="emailforcontact" value="{{ old('emailforcontact') }}" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-sm-6 text-start">
              <label for="zip" class="form-label">Zip <span class="text-muted" style="font-size: 15px;">(Optional)</span></label>
              <input type="text" class="form-control" name="zip" value="{{ old('zip') }}" placeholder="">
            </div>

            <div class="col-sm-6 text-start">
              <label for="twitter" class="form-label">Twitter <span class="text-muted" style="font-size: 15px;">(Optional)</span></label>
              <input type="text" class="form-control" name="twitter" value="{{ old('twitter') }}" placeholder="@you">
            </div>

            <div class="col-sm-6 text-start">
              <label for="instagram" class="form-label">Instagram <span class="text-muted" style="font-size: 15px;">(Optional)</span></label>
              <input type="text" class="form-control" name="instagram" value="{{ old('instagram') }}" placeholder="@you">
            </div>

            <div class="col-md-6 text-start">
              <label for="country" class="form-label">Country</label>
              @error('country')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('country') error-border @enderror" name="country" value="{{ old('country') }}" placeholder="" required>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-6 text-start">
              <label for="state" class="form-label">State</label>
              @error('state')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('state') error-border @enderror" name="state" value="{{ old('state') }}" placeholder="" required>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-6 text-start">
              <label for="city" class="form-label">City</label>
              @error('city')
                <div class="error">
                  {{$message}}
                </div>
              @enderror
              <input type="text" class="form-control @error('city') error-border @enderror" name="city" value="{{ old('city') }}" placeholder="" required>
              <div class="invalid-feedback">
              Please provide a valid city.
              </div>
            </div>
          </div>

          <div class="col-12 text-start">
              <label for="job" class="form-label">Desired Job</label>
              @error('job')
                <div class="error">
                  {{$message}}
                </div>
                @enderror
              <div class="input-group has-validation">
                <input type="text" class="form-control @error('job') error-border @enderror" name="job" value="{{ old('job') }}" placeholder="Developer Jr" required>
              <div class="invalid-feedback">
                  Your desired job is required.
                </div>
              </div>
            </div>

            <div class="col-12 text-start">
              <label for="description" class="form-label">Note <span class="text-muted" style="font-size: 15px;">(Describe yourself and tell us your skills)</span></label>
              <textarea name="description" style="height: 200px;">{{ old('description') }}</textarea>
            </div>
          <hr class="my-4">
          <button class="button-home" style="width: 100%;" type="submit" href="">POST</button>
          
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/css/script.js"></script>
</form>

@endsection