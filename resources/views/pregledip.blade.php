<div class="container-fluid padding">
      <div class="row welcome text-center">
        <div class="col-12">
          <div class="table">
            <h1 class="my-3">Pregledi</h1>
            <table id="users-table" class="table">
              <thead>
                    <tr>
                      <th scope="col">Simptomi</th>
                      <th scope="col">Termin</th>
                      
                    </tr>
                  </thead>
                    <tbody id="doktori_podaci">
                    @foreach($pregledi as $pregled)
                    <tr class="border-b hover:bg-orange-100">
                        <td contentEditable=true class="p-3 px-5">
                            {{$pregled->simptomi}}
                        </td>
                        <td contentEditable=true class="p-3 px-5">
                            {{$pregled->termin}}
                        </td>
                       
                    </tr>
                @endforeach

                </tbody>
                </table>
              </div>

                            