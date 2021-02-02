
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="css\app\css">
    <link rel="icon" type="image/png" href="css\favicon.png">
    <title>BOLNICA H&H</title>
</head>
<body id="doktori_body">

<div class="container-fluid padding">
      <div class="row welcome text-center">
        <div class="col-12">
          <div class="table">
            <h1 class="my-3">Doktori</h1>
            <table id="users-table" class="table">
              <thead>
                    <tr>
                      <th scope="col">Doktor ID</th>
                      <th scope="col">Ime</th>
                      <th scope="col">Prezime</th>
                      <th scope="col">JMBG</th>
                      <th scope="col">Specijalista</th>
                    </tr>
                  </thead>
                    <tbody id="doktori_podaci"></tbody>
                </table>
              </div>
        </div></div></div>
        

<!-- Forma za unos novog pacijenta-->
              <form id="dodaj_doktora">
                <div class="form-inline">
                  <input type="text" class="form-control m-2" name="ime" id="ime_doktora" 
                  placeholder="Unesite ime" value="" required>
                  <input type="text" class="form-control m-2" name="prezime" id="prezime_doktora" 
                  placeholder="Unesite prezime" value="" required>
                  <input type="text" class="form-control m-2" name="jmbg" id="jmbg_doktora" 
                  placeholder="Unesite JMBG" value="" required>
                  <div class="form-group">
                <select class="form-control m-2" id="kategorija_doktora">
                    </select>
                </div>
                  <button type="submit" name="submit" id="dodaj_doktora" class="btn btn-success m-2" onclick="kreirajDoktora()">Sačuvaj</button>
                
              </form>    
              
<!-- Tabela Pacijenata-->
<div class="container-fluid padding">
      <div class="row welcome text-center">
        <div class="col-12">
          <div class="table">
            <h1 class="my-3">Pacijenti</h1>
            <table id="users-table" class="table">
              <thead>
                    <tr>
                      <th scope="col">Pacijent ID</th>
                      <th scope="col">Ime</th>
                      <th scope="col">Prezime</th>
                      <th scope="col">JMBG</th>
                    </tr>
                  </thead>
                    <tbody id="pacijenti_podaci"></tbody>
                </table>
              </div>
        

<!-- Forma za unos novog pacijenta-->
              <form id="dodaj_pacijenta">
                <div class="form-inline">
                  <input type="text" class="form-control m-2" name="ime" id="ime_pacijenta" 
                  placeholder="Unesite ime" value="" required>
                  <input type="text" class="form-control m-2" name="prezime" id="prezime_pacijenta" 
                  placeholder="Unesite prezime" value="" required>
                  <input type="text" class="form-control m-2" name="jmbg" id="jmbg_pacijenta" 
                  placeholder="Unesite JMBG" value="" required>
                  <button type="submit" name="submit" id="dodaj_pacijenta" class="btn btn-success" onclick="kreirajPacijenta()">Sačuvaj</button>
                </div>
                   </form>     
            </div>
          </div>

<!-- Forma za dodavanje novog pregleda-->
<div class="formaZaDodavanje">
    <form>
        <h1 class="my-3">Unesite novi pregled</h1>
        <div class="form-inline">
            <input type="datetime" class="form-control m-2" title="Unesite datum i vreme pregleda (u formatu godina-mesec-dan sat:minut:sekund)" id="datum_pregleda" placeholder="Unesite datum u formatu:GGGG-MM-DD">
            
            <select class="form-control m-1" id="iddoktora">
            </select>
            
            <select class="form-control m-1" id="idpacijenta">
            </select>
        <br>
        <textarea class="form-control m-1" name="tekst_simptoma" id="simptomi" cols="30" rows="10" placeholder="Unesite simptome pacijenta" ></textarea>
        <button class="btn btn-primary form-control m-1" id="dodajPregled" onclick="kreirajPregled()">Sačuvaj</button>
</div>
</form>

</body>
  </html>
            