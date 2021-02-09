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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form action="/doktor" method="POST">
                <div class="form-inline">
                  <input type="text" class="form-control m-2" name="ime_prezime" id="ime_pacijenta" 
                  placeholder="Unesite ime" value="" required>
                  <input type="text" class="form-control m-2" name="jmbg" id="jmbg_pacijenta" 
                  placeholder="Unesite JMBG" value="" required>
                  <div class="form-group">
                <select class="form-control m-2" id="kategorija_doktora">
                <option value="pedijatar">Pedijatar</option>
                <option value="neurolog">Neurolog</option>
                <option value="dermatolog">Dermatolog</option>
                <option value="psiholog">Psiholog</option>
                    </select>
                    <div class="form-group">
                    <button type="submit" name="submit" id="dodaj_pacijenta" class="btn btn-success">Sačuvaj</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>    
        
        </div>
    
    </div>

