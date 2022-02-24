<section class="w-25 mx-auto">
    <h1 class="text-center">Insérez des aliments</h1>
    <form action="/store" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Amount</label>
          <input name="amount" type="number" class="form-control" id="amount" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">URL</label>
          <input name="url" type="text" class="form-control" id="url" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>