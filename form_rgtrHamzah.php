<!DOCTYPE html>
<html lang="en">
<head ><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>
  <style>
      font-family: Arial, sans-serif;{
      margin: 0;
      padding: 0;
      }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"], select {
      width: 100%;
      padding: 10px;
      border: 1px solid #cccccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 20px;
    }
    .hobbies-container {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      margin-bottom: 20px;
    }
    .hobbies-container label {
      display: inline-block;
      margin-right: 20px;
      margin-bottom: 10px;
    }
    button {
      background-color: #5cc5ee;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 30%;
    }
  </style>
</head>

<form class="form-horizontal">
  <fieldset>

    <!-- Form Name -->
    <legend>Form Registrasi</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nama Lengkap</label>  
      <div class="col-md-4">
      <input id="textinput" name="textinput" type="text" placeholder="Nama Lengkap" class="form-control input-md">
      <span class="help-block"></span>  
      </div>
    </div>

    <!-- Search input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="searchinput">Umur</label>
      <div class="col-md-4">
        <input id="searchinput" name="searchinput" type="search" placeholder="Umur" class="form-control input-md">
        <p class="help-block"></p>
      </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="radios">Gender</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="radios-0">
          <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
          Laki-laki
        </label> 
        <label class="radio-inline" for="radios-1">
          <input type="radio" name="radios" id="radios-1" value="2">
          Perempuan
        </label> 
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Pendidikan</label>
      <div class="col-md-4">
        <select id="selectbasic" name="selectbasic" class="form-control">
          <option value="1">SD</option>
          <option value="2">SMP</option>
          <option value="3">SMA</option>
          <option value="4">S1</option>
          <option value="5">S2</option>
          <option value="6">S3</option>
        </select>
      </div>
    </div>

    <!-- Multiple Checkboxes -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="checkboxes">Hobi</label>
      <div class="col-md-4">
        <div class="checkbox">
          <label for="checkboxes-0">
            <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
            Membaca Buku
          </label>
        </div>
        <div class="checkbox">
          <label for="checkboxes-1">
            <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
            Travelling
          </label>
        </div>
        <div class="checkbox">
          <label for="checkboxes-1">
            <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
            Olahraga
          </label>
        </div>
        <div class="checkbox">
          <label for="checkboxes-1">
            <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
            Nonton
          </label>
        </div>
        <div class="checkbox">
          <label for="checkboxes-1">
            <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
            Hiking
          </label>
        </div>
        <div class="checkbox">
          <label for="checkboxes-1">
            <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
            Mancing
          </label>
        </div>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Daftar</button>
      </div>
    </div>

  </fieldset>
</form>
