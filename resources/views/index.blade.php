<!DOCTYPE html>
    @extends('layout')
    @section('titulo')
    Página inicial
    @endsection
    @section ('content')
    <div class="col d-flex p-5 justify-content-center">
      <div class="row">
  <div class="col-sm-6">
    <div class="card border-primary mb-3">
      <div class="card-body text-primary">
        <h5 class="card-title">Ver usuários!</h5>
        <p class="card-text text-primary font-italic">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br> A similique rerum consequatur. Rerum nisi pariatur quaerat quod aspernatur. <br> Ipsam quod ipsum reprehenderit autem atque dicta enim recusandae beatae, deserunt est?</p>
        <a href="dados" class="btn btn-primary">Ver usuários cadastrados</a>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6">
    <div class="card border-info mb-3">
      <div class="card-body text-info">
        <h5 class="card-title">Quer conhecer mais sobre nós? Clique no link abaixo!</h5>
        <p class="card-text text-info font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Dolor autem explicabo pariatur natus vitae ipsa corporis mollitia iste. <br> Error consequatur consectetur ab est animi unde nemo perspiciatis eaque tempore exercitationem?</p>
        <a href="sobre" class="btn btn-info">Sobre</a>
      </div>
    </div>
  </div>
</div>
    </div>

    @endsection
