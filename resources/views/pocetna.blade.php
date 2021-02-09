
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
                      <th scope="col">Ime i Prezime</th>
                      <th scope="col">JMBG</th>
                      <th scope="col">Specijalista</th>
                    </tr>
                  </thead>
                    <tbody id="doktori_podaci">
                    @foreach($doktori as $doktor)
                    <tr class="border-b hover:bg-orange-100">
                        <td class="p-3 px-5">
                            {{$doktor->ime_prezime}}
                        </td>
                        <td class="p-3 px-5">
                            {{$doktor->jmbg}}
                        </td>
                        <td class="p-3 px-5">
                            {{$doktor->kategorija}}
                        </td>
                        <td>
                        <a href="/doktor/{{$doktor->id}}" name="editd" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                        <a href="/doktordelete/{{$doktor->id}}" name="deleted" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</a>
                        <a href="/pregledd/{{$doktor->id}}" name="pregledid" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Pregledi</a>
</td>

                      </td>
                    </tr>
                @endforeach
                    </tbody>
                </table>
              </div>
        </div></div></div>
        

<!-- Forma za unos novog doktora-->

              <div class="flex-auto text-right mt-2">
                    <a href="/doktor" class="bg-blue-500 hover:bg-blue-700 text-red font-bold py-2 px-4 rounded">Dodaj novog doktora</a>
                </div>
              
<!-- Tabela Pacijenata-->
<div class="container-fluid padding">
      <div class="row welcome text-center">
        <div class="col-12">
          <div class="table">
            <h1 class="my-3">Pacijenti</h1>
            <table id="users-table" class="table">
              <thead>
                    <tr>
                      <th scope="col">Ime i Prezime</th>
                      <th scope="col">JMBG</th>
                    </tr>
                  </thead>
                    <tbody id="pacijenti_podaci">
                    @foreach($pacijenti as $pacijent)
                    <tr class="border-b hover:bg-orange-100">
                        <td class="p-3 px-5">
                            {{$pacijent->ime_prezime}}
                        </td>
                        <td class="p-3 px-5">
                            {{$pacijent->jmbg}}
                        </td>
                        <td>
                        <a href="/pacijent/{{$pacijent->id}}" name="editp" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                        <a href="/pacijentdelete/{{$pacijent->id}}" name="deletep" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</a>
                        <a href="/pregledip/{{$pacijent->id}}" name="pregledip" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Pregledi</a>
                      </td>
                    </tr>
                @endforeach
                    </tbody>
                </table>
              </div>
        

<!-- Forma za unos novog pacijenta-->
<div class="flex-auto text-right mt-2">
                    <a href="/pacijent" class="bg-blue-500 hover:bg-blue-700 text-red font-bold py-2 px-4 rounded">Dodaj novog pacijenta</a>
                </div>



<!-- Forma za dodavanje novog pregleda-->
<div class="flex-auto text-right mt-2">
                    <a href="/pregled" class="bg-blue-500 hover:bg-blue-700 text-red font-bold py-2 px-4 rounded">Zakažite novi pregled</a>
                </div>
</div>
</form>

</body>
  </html>
            