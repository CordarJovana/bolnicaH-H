<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form action="/pacijent/{{$pacijent->id}}" method="POST">
                    <div class="form-group">
                    <div class="form-inline">
                  <input type="text" class="form-control m-2" name="ime_prezime" id="ime_pacijenta" 
                  placeholder="Unesite ime i prezime" value="" required>
                  <input type="text" class="form-control m-2" name="jmbg" id="jmbg_pacijenta" 
                  placeholder="Unesite JMBG" value="" required>
                    </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Ažuriraj podatke</button>

                    {{ csrf_field() }}
                </form>
            </div>    
        
        </div>
    
    </div>
