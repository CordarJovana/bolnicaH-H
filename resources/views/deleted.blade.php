<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form action="/doktordelete/{{$doktor->id}}" method="POST">
                @method('DELETE')
                        <button type="submit" name="delete"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Obriši doktora</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>    
        
        </div>
    
    </div>
