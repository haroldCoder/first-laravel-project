<section class="bg-dark text-white m-5 p-4 w-50">
    <form action="{{route('save.clients')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Harold">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Correo Electronico</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Edad</label>
            <input type="number" name="age" class="form-control" id="exampleFormControlInput1" placeholder="18">
        </div>
        <button type="submit" class="px-4 py-2 rounded bg-primary text-white mt-6">Agregar</button>
    </form>
</section>