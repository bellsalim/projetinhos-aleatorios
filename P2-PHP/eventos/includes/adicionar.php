<div class="modal" id="modal">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Adicionar evento</h5>
            <button class="btn btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
         </div>
         <form action="process.php" method="POST">
            <div class="modal-body">
               <div class="form-group mb-3">
                  <label class="form-label" for="nome">Nome</label>
                  <input placeholder="Insira o nome do evento" class="form-control" type="text" name="nome" required>
               </div>

               <div class="form-group mb-3">
                  <label class="form-label" for="tipo_evento">Tipo de Evento</label>
                  <input placeholder="Informe o tipo do evento" class="form-control" type="text" name="tipo_evento">
               </div>

               <div class="form-group mb-3">
                  <label class="form-label" for="duracao">Duração</label>
                  <input placeholder="Duração do evento em minutos" class="form-control" type="number" name="duracao">
               </div>

               <div class="form-group mb-3">
                  <label class="form-label" for="valor_ingresso">Valor do Ingresso</label>
                  <input placeholder="Informe o valor do ingresso" class="form-control" type="text" name="valor_ingresso">
               </div>

               <div class="form-check form-switch mb-3">
                  <input class="form-check-input" type="checkbox" name="em_cartaz" value="S" checked>
                  <label class="form-label" for="em_cartaz">Evento em cartaz</label>
               </div>

            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary" name="adicionar">Adicionar</button>
            </div>
         </form>
      </div>
   </div>
</div>