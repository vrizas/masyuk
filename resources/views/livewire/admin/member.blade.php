<article class="py-8 px-12">
    <h2 class="font-bold text-4xl">Admin Panel</h2>
    <p class="font-medium text-gray-500 mt-2">Member</p>
    <div class="btn-group mt-6">
        <button class="btn btn-xs">«</button> 
        <button class="btn btn-xs btn-active">1</button> 
        <button class="btn btn-xs">2</button> 
        <button class="btn btn-xs">3</button> 
        <button class="btn btn-xs">4</button> 
        <button class="btn btn-xs">»</button>
    </div>
    <div class="overflow-x-auto mt-4">
        <table class="table w-full">
          <thead>
            <tr>
              <th>
                <label>
                  <input type="checkbox" class="checkbox">
                </label>
              </th>
              <th>Id</th> 
              <th>Nama</th> 
              <th>Email</th> 
              <th></th>
            </tr>
          </thead> 
          <tbody>
            @for($i = 0; $i < 10; $i++)
            <tr>
              <th>
                <label>
                  <input type="checkbox" class="checkbox">
                </label>
              </th>
              <td>1</td> 
              <td>
                <div class="flex items-center space-x-3">
                  <div class="avatar">
                    <div class="w-12 h-12 mask mask-squircle">
                      <img src="https://i.insider.com/5ca389adc6cc503c5a53fd96?width=500&format=jpeg&auto=webp" alt="Avatar Tailwind CSS Component">
                    </div>
                  </div> 
                  <div>
                    <div class="font-bold">
                          Hart Hagerty
                        </div> 
                    <div class="text-sm opacity-50">
                          harthagerty
                        </div>
                  </div>
                </div>
              </td> 
              <td>harthagerty@gmail.com</td> 
              <td class="flex gap-4">
                <button><i class='bx bxs-message-square-edit text-xl'></i></button>
                <button><i class='bx bxs-trash-alt text-xl'></i></button>
            </td>
            </tr>
            @endfor
          </tbody> 
        </table>
      </div>
</article>
